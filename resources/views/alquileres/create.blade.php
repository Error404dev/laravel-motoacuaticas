@extends('layouts.app')

@section('contenido')
<h1>Nuevo alquiler</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

<form action="{{ route('alquileres.store') }}" method="POST">
    @csrf
    <select name="moto_acuatica_id" class="form-control mb-2">
        <option value="">Elegir moto</option>
        @foreach ($motos as $moto)
            <option value="{{ $moto->id }}" @selected(old('moto_acuatica_id') == $moto->id)>
                {{ $moto->marca }} {{ $moto->modelo }}
            </option>
        @endforeach
    </select>
    <input type="text" name="cliente" value="{{ old('cliente') }}" placeholder="Cliente" class="form-control mb-2">
    <input type="date" name="fecha" value="{{ old('fecha') }}" class="form-control mb-2">
    <input type="number" name="horas" value="{{ old('horas') }}" placeholder="Horas" class="form-control mb-2">
    <button class="btn btn-primary">Guardar</button>
</form>
@endsection
