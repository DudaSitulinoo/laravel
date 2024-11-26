<?php

namespace App\Http\Controllers;

use App\Models\Cultura;
use Illuminate\Http\Request;

class CulturaController extends Controller
{
    // Exibir a lista de culturas
    public function index()
    {
        $culturas = Cultura::all();
        return view('culturas.index', compact('culturas'));
    }

    // Exibir o formulário para criar uma nova cultura
    public function create()
    {
        return view('culturas.create');
    }

    // Armazenar uma nova cultura
    public function store(Request $request)
    {
        $request->validate(['nome' => 'required']);
        Cultura::create($request->all());
        return redirect()->route('culturas.index')->with('success', 'Cultura criada com sucesso!');
    }



    // Exibir o formulário para editar uma cultura
    public function edit(Cultura $cultura)
    {
        return view('culturas.edit', compact('cultura'));
    }

    // Atualizar uma cultura existente
    public function update(Request $request, Cultura $cultura)
    {
        $request->validate(['nome' => 'required']);
        $cultura->update($request->all());
        return redirect()->route('culturas.index')->with('success', 'Cultura atualizada com sucesso!');
    }

    // Remover uma cultura
    public function destroy(Cultura $cultura)
    {
        $cultura->delete();
        return redirect()->route('culturas.index')->with('success', 'Cultura excluída com sucesso!');
    }

    public function show(Cultura $cultura)
    {

    }
}
