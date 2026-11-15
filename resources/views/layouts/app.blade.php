<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alquiler de Motos Acuáticas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('motos.index') }}">Motos</a>
            <a class="navbar-brand" href="{{ route('alquileres.index') }}">Alquileres</a>
        </div>
    </nav>

    <div class="container">
        @yield('contenido')
    </div>
</body>
</html>
