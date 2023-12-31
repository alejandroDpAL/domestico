<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <header class="flex items-center justify-between border-b p-5 bg-white  shadow">
        <h1 class="text-3xl font-bold">Electrodomesticos alejo</h1>
        <nav>
            <a
                href="/login"
                class="uppercase text-gray-600 font-bold text-small">
                Login
            </a>
            <a href="/registro"
               class="uppercase text-gray-600 font-bold text-small">
                Crear cuenta
            </a>
        </nav>
    </header>
    <main class="container mx-auto mt-10 ">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
    Todos los derechos reservados  {{ date('Y') }}
    </footer>
</html>