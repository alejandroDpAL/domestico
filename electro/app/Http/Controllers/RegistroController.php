<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(){
        return view('auth.registro');
    }
    public function store(Request $request){
        $this->validate($request, [
            'Name'=>'required|email',
            'Cedula'=>'required'
        ]);

        if(!auth()->attempt($request->only('Name', 'Cedula'))){
            return back()->with('mensaje','Error en la autenticación, algo no coincide');
        }

        return redirect()->route('post.index');
    }
}
