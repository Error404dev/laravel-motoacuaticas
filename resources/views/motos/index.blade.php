@extends('layouts.app')

@section('titulo', 'Motos acuáticas')

@section('contenido')
    <h2>Listado de motos acuáticas</h2>

    <a class="boton" href="{{ route('motos.create') }}">Agregar moto</a>

    <form method="GET" action="{{ route('motos.index') }}">
        <label for="buscar">Buscar por marca:</label>
        <input type="text" name="buscar" id="buscar" value="{{ request('buscar') }}">
        <button class="boton" type="submit">Buscar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio por hora</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($motos as $moto)
                <tr>
                    <td>{{ $moto->marca }}</td>
                    <td>{{ $moto->modelo }}</td>
                    <td>${{ $moto->precio_hora }}</td>
                    <td>
                        <a class="boton" href="{{ route('motos.edit', $moto) }}">Editar</a>

                        <form action="{{ route('motos.destroy', $moto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="boton boton-eliminar" type="submit"
                                onclick="return confirm('¿Querés eliminar esta moto?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay motos registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
