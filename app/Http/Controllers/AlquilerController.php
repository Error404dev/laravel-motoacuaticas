<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\MotoAcuatica;
use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    private $reglas = [
        'moto_acuatica_id' => 'required|exists:motos_acuaticas,id',
        'cliente'          => 'required|max:255',
        'fecha'            => 'required|date',
        'horas'            => 'required|integer|min:1',
    ];

    public function index(Request $request)
    {
        $direccion = $request->direccion == 'desc' ? 'desc' : 'asc';

        $alquileres = Alquiler::with('motoAcuatica')
            ->where('cliente', 'like', '%' . $request->buscar . '%')
            ->orderBy('fecha', $direccion)
            ->get();

        return view('alquileres.index', compact('alquileres'));
    }

    public function create()
    {
        $motos = MotoAcuatica::all();

        return view('alquileres.create', compact('motos'));
    }

    public function store(Request $request)
    {
        Alquiler::create($request->validate($this->reglas));

        return redirect()->route('alquileres.index');
    }

    public function edit(Alquiler $alquiler)
    {
        $motos = MotoAcuatica::all();

        return view('alquileres.edit', compact('alquiler', 'motos'));
    }

    public function update(Request $request, Alquiler $alquiler)
    {
        $alquiler->update($request->validate($this->reglas));

        return redirect()->route('alquileres.index');
    }

    public function destroy(Alquiler $alquiler)
    {
        $alquiler->delete();

        return redirect()->route('alquileres.index');
    }
}
