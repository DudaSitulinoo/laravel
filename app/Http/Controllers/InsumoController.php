<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    public function index()
    {
        $insumos = Insumo::all();
        return view('insumos.index', compact('insumos'));
    }

    public function create()
    {
        return view('insumos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'quantidade' => 'required|numeric',
        ]);
        Insumo::create($request->all());
        return redirect()->route('insumos.index')->with('success', 'Insumo criado com sucesso!');
    }


    public function edit(Insumo $insumo)
    {
        return view('insumos.edit', compact('insumo'));
    }

    public function update(Request $request, Insumo $insumo)
    {
        $request->validate([
            'nome' => 'required',
            'quantidade' => 'required|numeric',
        ]);
        $insumo->update($request->all());
        return redirect()->route('insumos.index')->with('success', 'Insumo atualizado com sucesso!');
    }

    public function destroy(Insumo $insumo)
    {
        $insumo->delete();
        return redirect()->route('insumos.index')->with('success', 'Insumo excluído com sucesso!');
    }

    
    public function show(Insumo $insumo)
    {

    }
}
