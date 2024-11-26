@extends('layouts.app')

@section('content')
    <h1>Adicionar Cultura</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('culturas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da Cultura:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('culturas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <a href="{{ route('culturas.index') }}" class="btn btn-secondary">Voltar para Culturas</a>

@endsection
