@extends('layouts.app')

@section('titulo', 'Editar alquiler')

@section('contenido')
    <h2>Editar alquiler</h2>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('alquileres.update', $alquiler) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="moto_acuatica_id">Moto acuática:</label>
        <select name="moto_acuatica_id" id="moto_acuatica_id" required>
            @foreach ($motos as $moto)
                <option value="{{ $moto->id }}"
                    @selected(old('moto_acuatica_id', $alquiler->moto_acuatica_id) == $moto->id)>
                    {{ $moto->marca }} {{ $moto->modelo }}
                </option>
            @endforeach
        </select>

        <label for="cliente">Nombre del cliente:</label>
        <input type="text" name="cliente" id="cliente"
            value="{{ old('cliente', $alquiler->cliente) }}" required>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha"
            value="{{ old('fecha', $alquiler->fecha) }}" required>

        <label for="horas">Cantidad de horas:</label>
        <input type="number" name="horas" id="horas" min="1"
            value="{{ old('horas', $alquiler->horas) }}" required>

        <button class="boton" type="submit">Guardar cambios</button>
        <a class="boton" href="{{ route('alquileres.index') }}">Volver</a>
    </form>
@endsection
