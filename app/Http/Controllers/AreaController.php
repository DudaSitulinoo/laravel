<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'localizacao' => 'required',
            'tamanho' => 'required|numeric',
        ]);
        Area::create($request->all());
        return redirect()->route('areas.index')->with('success', 'Área criada com sucesso!');
    }
    public function edit(Area $area)
    {
        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $request->validate([
            'localizacao' => 'required',
            'tamanho' => 'required|numeric',
        ]);
        $area->update($request->all());
        return redirect()->route('areas.index')->with('success', 'Área atualizada com sucesso!');
    }

    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('areas.index')->with('success', 'Área excluída com sucesso!');
    }

    public function show(Area $area)
    {

    }
}
