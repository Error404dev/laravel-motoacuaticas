<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotoAcuaticaRequest;
use App\Models\MotoAcuatica;
use Illuminate\Http\Request;

class MotoAcuaticaController extends Controller
{
    public function index(Request $request)
    {
        $direccion = $request->direccion == 'desc' ? 'desc' : 'asc';

        $motos = MotoAcuatica::where('marca', 'like', '%' . $request->buscar . '%')
            ->orderBy('precio_hora', $direccion)
            ->get();

        return view('motos.index', compact('motos'));
    }

    public function create()
    {
        return view('motos.create');
    }

    public function store(MotoAcuaticaRequest $request)
    {
        MotoAcuatica::create($request->validated());

        return redirect()->route('motos.index');
    }

    public function edit(MotoAcuatica $moto)
    {
        return view('motos.edit', compact('moto'));
    }

    public function update(MotoAcuaticaRequest $request, MotoAcuatica $moto)
    {
        $moto->update($request->validated());

        return redirect()->route('motos.index');
    }

    public function destroy(MotoAcuatica $moto)
    {
        $moto->delete();

        return redirect()->route('motos.index');
    }
}
