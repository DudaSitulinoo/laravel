@extends('layouts.app')

@section('content')
    <h1>Gráfico de Atividades por Área</h1>

    <!-- Exibe o gráfico de pizza dentro de uma div para controle do tamanho -->
    <div class="grafico-container" style="width: 50%; margin: auto;">
        <canvas id="graficoPizza"></canvas>
    </div>

    <!-- Botão para voltar ao menu -->
    <a href="{{ url('/') }}" class="btn btn-secondary">Voltar para o Menu</a>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Dados fornecidos pelo Controller
        const labels = @json($labels);  // Nomes das áreas
        const valores = @json($valores);  // Quantidade de atividades por área

        // Configuração do gráfico de pizza
        const ctx = document.getElementById('graficoPizza').getContext('2d');
        const graficoPizza = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Atividades por Área',
                    data: valores,
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `${tooltipItem.label}: ${tooltipItem.raw} atividades`;
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection
