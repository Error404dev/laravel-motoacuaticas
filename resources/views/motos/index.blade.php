@extends('layouts.app')

@section('contenido')
<h1>Motos acuáticas</h1>

<a href="{{ route('motos.create') }}" class="btn btn-primary mb-3">Nueva moto</a>

<form method="GET" class="mb-3">
    <input type="text" name="buscar" value="{{ request('buscar') }}" placeholder="Buscar por marca">
    <button class="btn btn-secondary btn-sm">Buscar</button>
</form>

<table class="table">
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>
            Precio/hora
            <a href="{{ route('motos.index', ['buscar' => request('buscar'), 'direccion' => 'asc']) }}">↑</a>
            <a href="{{ route('motos.index', ['buscar' => request('buscar'), 'direccion' => 'desc']) }}">↓</a>
        </th>
        <th>Acciones</th>
    </tr>
    @foreach ($motos as $moto)
        <tr>
            <td>{{ $moto->marca }}</td>
            <td>{{ $moto->modelo }}</td>
            <td>${{ $moto->precio_hora }}</td>
            <td>
                <a href="{{ route('motos.edit', $moto) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('motos.destroy', $moto) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
