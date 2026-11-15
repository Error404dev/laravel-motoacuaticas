@extends('layouts.app')

@section('contenido')
<h1>Editar alquiler</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

<form action="{{ route('alquileres.update', $alquiler) }}" method="POST">
    @csrf
    @method('PUT')
    <select name="moto_acuatica_id" class="form-control mb-2">
        @foreach ($motos as $moto)
            <option value="{{ $moto->id }}" @selected(old('moto_acuatica_id', $alquiler->moto_acuatica_id) == $moto->id)>
                {{ $moto->marca }} {{ $moto->modelo }}
            </option>
        @endforeach
    </select>
    <input type="text" name="cliente" value="{{ old('cliente', $alquiler->cliente) }}" placeholder="Cliente" class="form-control mb-2">
    <input type="date" name="fecha" value="{{ old('fecha', $alquiler->fecha) }}" class="form-control mb-2">
    <input type="number" name="horas" value="{{ old('horas', $alquiler->horas) }}" placeholder="Horas" class="form-control mb-2">
    <button class="btn btn-primary">Actualizar</button>
</form>
@endsection
