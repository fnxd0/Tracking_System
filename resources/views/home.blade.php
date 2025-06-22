<x-layout title="Rastreamento de Pedidos">

    <!-- Conteúdo Principal -->
    <main class="container my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary">Rastreamento de Pedidos</h1>
            <p class="text-secondary">Acompanhe seus pedidos de forma rápida e simples</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- Card 1 - Código de Rastreamento -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Rastrear usando código de rastreamento</h5>

                        <form action="{{ route('frete.rastreamento') }}" method="GET">

                            <div class="input-group">
                                <input type="text" name="codigo_rastreio" class="form-control"
                                    placeholder="Código de rastreamento" required>
                                <button class="btn btn-primary" type="submit">Consultar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Card 2 - Histórico de Encomendas -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Histórico de encomendas do Cliente</h5>

                        <form method="GET" action=""">
                            <div class="input-group">
                                <input type="text" name="telefone" class="form-control"
                                    placeholder="Número de telefone" required>
                                <button class="btn btn-primary" type="submit">Consultar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

</x-layout>
