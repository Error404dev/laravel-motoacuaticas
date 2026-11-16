@extends('layouts.app')

@section('titulo', 'Agregar alquiler')

@section('contenido')
    <h2>Agregar alquiler</h2>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('alquileres.store') }}" method="POST">
        @csrf

        <label for="moto_acuatica_id">Moto acuática:</label>
        <select name="moto_acuatica_id" id="moto_acuatica_id" required>
            <option value="">Seleccionar moto</option>
            @foreach ($motos as $moto)
                <option value="{{ $moto->id }}" @selected(old('moto_acuatica_id') == $moto->id)>
                    {{ $moto->marca }} {{ $moto->modelo }}
                </option>
            @endforeach
        </select>

        <label for="cliente">Nombre del cliente:</label>
        <input type="text" name="cliente" id="cliente" value="{{ old('cliente') }}" required>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}" required>

        <label for="horas">Cantidad de horas:</label>
        <input type="number" name="horas" id="horas" min="1" value="{{ old('horas') }}" required>

        <button class="boton" type="submit" {{ $motos->isEmpty() ? 'disabled' : '' }}>Guardar</button>
        <a class="boton" href="{{ route('alquileres.index') }}">Volver</a>
    </form>
@endsection
