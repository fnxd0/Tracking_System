<x-layout title="Histórico de Encomendas">

    <main class="container my-5">
        <!-- Cabeçalho com gradiente -->
        <div class="p-4 rounded shadow text-white mb-4" style="background: linear-gradient(to right, #007BFF);">
            <h2 class="fw-bold mb-0">Histórico de encomendas</h2>
            <p class="mb-0">{{ $cliente->nome }}</p>
        </div>

        <!-- Itens Enviados -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="fw-bold text-center mb-3">Itens enviados</h5>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Código de rastreamento</th>
                                <th>Origem</th>
                                <th>Destino</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente->enviados as $frete)
                                <tr>
                                    <td><a
                                            href="{{ route('frete.rastreamento', ['codigo_rastreio' => $frete->codigo_rastreio]) }}">{{ $frete->codigo_rastreio }}</a>
                                    </td>
                                    <td>{{ $frete->origem }}</td>
                                    <td>{{ $frete->destino }}</td>
                                    <td><span
                                            class="badge {{ $frete->status->pegarCorEtiqueta() }}">{{ $frete->status }}</span>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Itens Recebidos -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="fw-bold text-center mb-3">Itens Recebidos</h5>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Código de rastreamento</th>
                                <th>Origem</th>
                                <th>Destino</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente->recebidos as $frete)
                                <tr>
                                    <td><a
                                            href="{{ route('frete.rastreamento', ['codigo_rastreio' => $frete->codigo_rastreio]) }}">{{ $frete->codigo_rastreio }}</a>
                                    </td>
                                    <td>{{ $frete->origem }}</td>
                                    <td>{{ $frete->destino }}</td>
                                    <td><span
                                            class="badge {{ $frete->status->pegarCorEtiqueta() }}">{{ $frete->status }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</x-layout>
