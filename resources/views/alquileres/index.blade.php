@extends('layouts.app')

@section('contenido')
<h1>Alquileres</h1>

<a href="{{ route('alquileres.create') }}" class="btn btn-primary mb-3">Nuevo alquiler</a>

<form method="GET" class="mb-3">
    <input type="text" name="buscar" value="{{ request('buscar') }}" placeholder="Buscar por cliente">
    <button class="btn btn-secondary btn-sm">Buscar</button>
</form>

<table class="table">
    <tr>
        <th>Cliente</th>
        <th>Moto</th>
        <th>
            Fecha
            <a href="{{ route('alquileres.index', ['buscar' => request('buscar'), 'direccion' => 'asc']) }}">↑</a>
            <a href="{{ route('alquileres.index', ['buscar' => request('buscar'), 'direccion' => 'desc']) }}">↓</a>
        </th>
        <th>Horas</th>
        <th>Acciones</th>
    </tr>
    @foreach ($alquileres as $alquiler)
        <tr>
            <td>{{ $alquiler->cliente }}</td>
            <td>{{ $alquiler->motoAcuatica->marca }} {{ $alquiler->motoAcuatica->modelo }}</td>
            <td>{{ $alquiler->fecha }}</td>
            <td>{{ $alquiler->horas }}</td>
            <td>
                <a href="{{ route('alquileres.edit', $alquiler) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('alquileres.destroy', $alquiler) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
