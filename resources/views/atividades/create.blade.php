@extends('layouts.app')

@section('content')
    <h1>Adicionar Atividade</h1>

    <form action="{{ route('atividades.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cultura_id">Cultura</label>
            <select name="cultura_id" id="cultura_id" class="form-control" required>
                @foreach($culturas as $cultura)
                    <option value="{{ $cultura->id }}">{{ $cultura->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="area_id">Área</label>
            <select name="area_id" id="area_id" class="form-control" required>
                @foreach($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->localizacao }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="area_id">Insumos</label>
            <select name="insumo_id" id="insumo_id" class="form-control" required>
                @foreach($insumos as $insumo)
                    <option value="{{ $insumo->id }}">{{ $insumo->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição" required>
        </div>
        <div class="form-group">
            <label for="data_hora">Data e Hora</label>
            <input type="datetime-local" name="data_hora" id="data_hora" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('atividades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
