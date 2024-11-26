@extends('layouts.app')

@section('content')
    <h1>Editar Área</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('areas.update', $area->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="localizacao">Localização:</label>
            <input type="text" name="localizacao" id="localizacao" class="form-control" value="{{ $area->localizacao }}" required>
        </div>

        <div class="form-group">
            <label for="tamanho">Tamanho (hectares):</label>
            <input type="number" name="tamanho" id="tamanho" class="form-control" value="{{ $area->tamanho }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('areas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <a href="{{ route('areas.index') }}" class="btn btn-secondary">Voltar para Áreas</a>

@endsection
