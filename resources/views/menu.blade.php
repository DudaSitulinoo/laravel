@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Sistema de Controle de Produção Agrícola</h1>
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ route('culturas.index') }}">Gerenciar Culturas</a></li>
            <li class="list-group-item"><a href="{{ route('areas.index') }}">Gerenciar Áreas</a></li>
            <li class="list-group-item"><a href="{{ route('insumos.index') }}">Gerenciar Insumos</a></li>
            <li class="list-group-item"><a href="{{ route('atividades.index') }}">Gerenciar Atividades</a></li>
            <li class="list-group-item"><a href="{{ route('grafico.index') }}">Ver Gráfico</a></li>
        </ul>
    </div>
@endsection
