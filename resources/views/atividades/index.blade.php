@extends('layouts.app')

@section('content')
    <h1>Atividades</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('atividades.create') }}" class="btn btn-primary">Adicionar Atividade</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cultura</th>
                <th>Área</th>
                <th>Insumo</th>
                <th>Descrição</th>
                <th>Data e Hora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($atividades as $atividade)
                <tr>
                    <td>{{ $atividade->id }}</td>
                    <td>{{ $atividade->cultura->nome }}</td>
                    <td>{{ $atividade->area->localizacao }}</td>
                    <td>{{ $atividade->insumo->nome }}</td>
                    <td>{{ $atividade->descricao }}</td>
                    <td>{{ $atividade->data_hora }}</td>
                    <td>
                        <a href="{{ route('atividades.edit', $atividade) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('atividades.destroy', $atividade) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/') }}" class="btn btn-secondary">Voltar para o Menu</a>
@endsection

