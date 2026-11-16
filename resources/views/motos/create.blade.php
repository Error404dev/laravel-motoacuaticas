@extends('layouts.app')

@section('titulo', 'Agregar moto')

@section('contenido')
    <h2>Agregar moto acuática</h2>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('motos.store') }}" method="POST">
        @csrf

        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" value="{{ old('marca') }}" required>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" value="{{ old('modelo') }}" required>

        <label for="precio_hora">Precio por hora:</label>
        <input type="number" step="0.01" name="precio_hora" id="precio_hora"
            value="{{ old('precio_hora') }}" required>

        <button class="boton" type="submit">Guardar</button>
        <a class="boton" href="{{ route('motos.index') }}">Volver</a>
    </form>
@endsection
