@extends('layouts.app')

@section('contenido')
<h1>Editar moto acuática</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

<form action="{{ route('motos.update', $moto) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="marca" value="{{ old('marca', $moto->marca) }}" placeholder="Marca" class="form-control mb-2">
    <input type="text" name="modelo" value="{{ old('modelo', $moto->modelo) }}" placeholder="Modelo" class="form-control mb-2">
    <input type="number" step="0.01" name="precio_hora" value="{{ old('precio_hora', $moto->precio_hora) }}" placeholder="Precio por hora" class="form-control mb-2">
    <button class="btn btn-primary">Actualizar</button>
</form>
@endsection
