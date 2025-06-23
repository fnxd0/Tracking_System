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

                        <form action="{{ route('frete.historico') }}" method="GET">
                            <div class="input-group">
                                <input type="text" name="cpf" class="form-control" oninput="formatarCPF(this)"
                                    placeholder="Insira o CPF cadastrado" required>
                                <button class="btn btn-primary" type="submit">Consultar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script>
        function formatarCPF(campo) {
            let value = campo.value.replace(/\D/g, ''); // Remove tudo que não é número

            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

            campo.value = value;
        }
    </script>

</x-layout>
