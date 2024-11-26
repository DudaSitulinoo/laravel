@extends('layouts.app')

@section('content')
    <h1>Culturas</h1>
    <a href="{{ route('culturas.create') }}" class="btn btn-primary">Adicionar Cultura</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach ($culturas as $cultura)
            <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $cultura->nome }}
            <div>
                <a href="{{ route('culturas.edit', $cultura->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('culturas.destroy', $cultura->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </div>
            </li>
        @endforeach
    </ul>
    <a href="{{ url('/') }}" class="btn btn-secondary">Voltar para o Menu</a>
@endsection
