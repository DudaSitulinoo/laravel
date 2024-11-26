<!-- resources/views/atividades/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Atividade</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('atividades.update', $atividade->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="cultura_id">Cultura:</label>
            <select name="cultura_id" id="cultura_id" class="form-control" required>
                @foreach ($culturas as $cultura)
                    <option value="{{ $cultura->id }}" {{ $atividade->cultura_id == $cultura->id ? 'selected' : '' }}>
                        {{ $cultura->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="area_id">Área:</label>
            <select name="area_id" id="area_id" class="form-control" required>
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}" {{ $atividade->area_id == $area->id ? 'selected' : '' }}>
                        {{ $area->localizacao }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="insumo_id">Insumo:</label>
            <select name="insumo_id" id="insumo_id" class="form-control" required>
                @foreach ($insumos as $insumo)
                    <option value="{{ $insumo->id }}" {{ $atividade->insumo_id == $insumo->id ? 'selected' : '' }}>
                        {{ $insumo->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $atividade->descricao }}" required>
        </div>

        <div class="form-group">
            <label for="data_hora">Data e Hora:</label>
            <input type="datetime-local" name="data_hora" id="data_hora" class="form-control" value="{{ $atividade->data_hora }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('atividades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
