<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function index()
    {
        // Consulta a quantidade de atividades por área
        $dados = \DB::table('atividades')
            ->join('areas', 'atividades.area_id', '=', 'areas.id')
            ->select('areas.localizacao as area', \DB::raw('COUNT(atividades.id) as total_atividades'))
            ->groupBy('areas.localizacao')
            ->get();

        // Transformar os dados para serem enviados ao gráfico
        $labels = $dados->pluck('area'); // Nomes das áreas
        $valores = $dados->pluck('total_atividades'); // Total de atividades por área

        return view('grafico.index', compact('labels', 'valores'));
    }
}
