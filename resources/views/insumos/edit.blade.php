@extends('layouts.app')

@section('content')
    <h1>Editar Insumo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('insumos.update', $insumo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome do Insumo:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $insumo->nome }}" required>
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $insumo->quantidade }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('insumos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <a href="{{ route('insumos.index') }}" class="btn btn-secondary">Voltar para Insumos</a>

@endsection
