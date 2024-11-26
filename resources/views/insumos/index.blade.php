@extends('layouts.app')

@section('content')
    <h1>Insumos</h1>
    <a href="{{ route('insumos.create') }}" class="btn btn-primary">Adicionar Insumo</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul class="list-group">
        @foreach ($insumos as $insumo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Nome: {{ $insumo->nome }}, Quantidade: {{ $insumo->quantidade }}
                <div>
                    <a href="{{ route('insumos.edit', $insumo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('insumos.destroy', $insumo->id) }}" method="POST" style="display: inline;">
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
