@extends('layouts.app')

@section('titulo', 'Alquileres')

@section('contenido')
    <h2>Listado de alquileres</h2>

    <a class="boton" href="{{ route('alquileres.create') }}">Agregar alquiler</a>

    <form method="GET" action="{{ route('alquileres.index') }}">
        <label for="buscar">Buscar por cliente:</label>
        <input type="text" name="buscar" id="buscar" value="{{ request('buscar') }}">
        <button class="boton" type="submit">Buscar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Moto acuática</th>
                <th>Fecha</th>
                <th>Horas</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($alquileres as $alquiler)
                <tr>
                    <td>{{ $alquiler->cliente }}</td>
                    <td>{{ $alquiler->motoAcuatica->marca }} {{ $alquiler->motoAcuatica->modelo }}</td>
                    <td>{{ $alquiler->fecha }}</td>
                    <td>{{ $alquiler->horas }}</td>
                    <td>
                        <a class="boton" href="{{ route('alquileres.edit', $alquiler) }}">Editar</a>

                        <form action="{{ route('alquileres.destroy', $alquiler) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="boton boton-eliminar" type="submit"
                                onclick="return confirm('¿Querés eliminar este alquiler?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay alquileres registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
