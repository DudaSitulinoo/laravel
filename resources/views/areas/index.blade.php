@extends('layouts.app')

@section('content')
    <h1>Áreas</h1>
    <a href="{{ route('areas.create') }}" class="btn btn-primary">Adicionar Área</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
    @foreach ($areas as $area)
        <li class="list-group-item d-flex justify-content-between align-items-center">
        Localização: {{ $area->localizacao }}, Tamanho: {{ $area->tamanho }} hectares
        <div>
            <a href="{{ route('areas.edit', $area->id) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('areas.destroy', $area->id) }}" method="POST" style="display: inline;">
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
