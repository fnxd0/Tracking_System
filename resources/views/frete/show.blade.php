<x-layout title="Detalhes da Entrega">

    <main class="container my-5">
        <div class="p-4 rounded shadow text-white mb-4" style="background: linear-gradient(to right, #007BFF);">
            <h3 class="fw-bold">📦 Rastreamento Encomenda</h3>
            <p class="mb-1">Código de Rastreamento: <strong>{{ $frete->codigo_rastreio }}</strong></p>
            <p class="mb-1">Status: <span class="badge bg-success">{{ $frete->status }}</span></p>
            <p class="mb-0">Destino: <strong>{{ $frete->destino }}</strong></p>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-white fw-bold text-primary">
                Histórico da Encomenda
            </div>
            <div class="card-body p-0">
                <table class="table mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Descrição</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($frete->etapas as $etapa)
                            <tr>
                                <td>{{ $etapa->descricao }}</td>
                                <td>{{ $etapa->created_at ? $etapa->created_at->format('d/m/Y H:i') : '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</x-layout>
