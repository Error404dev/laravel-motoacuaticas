<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Alquiler de motos acuáticas')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Alquiler de motos acuáticas</h1>

        <nav>
            <a href="{{ route('motos.index') }}">Motos acuáticas</a>
            <a href="{{ route('alquileres.index') }}">Alquileres</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        Sistema de gestión de motos acuáticas
    </footer>
</body>
</html>
