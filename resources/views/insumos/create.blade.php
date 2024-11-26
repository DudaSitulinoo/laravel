@extends('layouts.app')

@section('content')
    <h1>Adicionar Insumo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('insumos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Insumo:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ old('quantidade') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('insumos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <a href="{{ route('insumos.index') }}" class="btn btn-secondary">Voltar para Insumos</a>

@endsection
