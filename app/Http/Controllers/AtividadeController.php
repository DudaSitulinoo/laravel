<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Atividade;
use App\Models\Cultura;
use App\Models\Insumo;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    public function index()
    {
        // Busca todas as atividades com as suas relações
        $atividades = Atividade::with(['cultura', 'area', 'insumo'])->get();

        return view('atividades.index', compact('atividades'));
    }

    public function create()
    {
        // Aqui você deve buscar as culturas, áreas e insumos para popular os selects
        return view('atividades.create', [
            'culturas' => Cultura::all(),
            'areas' => Area::all(),
            'insumos' => Insumo::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'cultura_id' => 'required|exists:culturas,id',
            'area_id' => 'required|exists:areas,id',
            'insumo_id' => 'required|exists:insumos,id',
            'descricao' => 'required|string|max:255',
            'data_hora' => 'required|date',
        ]);

        // Criação da nova atividade
        Atividade::create($request->all());

        return redirect()->route('atividades.index')->with('success', 'Atividade criada com sucesso!');
    }



    public function edit(Atividade $atividade)
    {
        return view('atividades.edit', [
            'atividade' => $atividade,
            'culturas' => Cultura::all(),
            'areas' => Area::all(),
            'insumos' => Insumo::all(),
        ]);
    }

    public function update(Request $request, Atividade $atividade)
    {
        $request->validate([
            'cultura_id' => 'required|exists:culturas,id',
            'area_id' => 'required|exists:areas,id',
            'insumo_id' => 'required|exists:insumos,id',
            'descricao' => 'required|string|max:255',
            'data_hora' => 'required|date',
        ]);

        $atividade->update($request->all());

        return redirect()->route('atividades.index')->with('success', 'Atividade atualizada com sucesso!');
    }

    public function destroy(Atividade $atividade)
    {
        $atividade->delete();

        return redirect()->route('atividades.index')->with('success', 'Atividade excluída com sucesso!');
    }
    public function show(Atividade $atividade)
    {

    }
}
