<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6fa;
        }

        .card-metric {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,.1);
        }

        .metric-value {
            font-size: 2rem;
            font-weight: bold;
        }

        .chart-container {
            height: 350px;
        }
    </style>
</head>
<body>
<div class="bg-white text-center py-4 shadow-sm">

        <img
            src="<?= base_url('img/logo.png') ?>"
            alt="Logo"
            class="img-fluid mx-auto d-block"
            style="max-width: 250px; height: auto;"
        >
        <h2 class="mb-4">Dashboard Gerencial</h2>
    </div>
<div class="container-fluid p-4">
    
    <!-- Indicadores -->
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card card-metric bg-primary text-white">
                <div class="card-body">
                    <h6>Colaborador</h6>
                    <div class="metric-value">30</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-metric bg-success text-white">
                <div class="card-body">
                    <h6>Expositor</h6>
                    <div class="metric-value">10</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-metric bg-warning text-dark">
                <div class="card-body">
                    <h6>Prestador</h6>
                    <div class="metric-value">350</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-metric bg-danger text-white">
                <div class="card-body">
                    <h6>Produtor</h6>
                    <div class="metric-value">100</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Gráficos -->
    <div class="row g-3">

        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    Visitante
                </div>
                <div class="card-body">
                    <canvas id="graficoVendas"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    Total
                </div>
                <div class="card-body">
                    <canvas id="graficoCategoria"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    Total
                </div>
                <div class="card-body">
                    <canvas id="graficoCategoria"></canvas>
                </div>
            </div>
        </div>

    </div>

    <!-- Tabela -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    Últimos Pedidos
                </div>
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Pedido</th>
                                <th>Cliente</th>
                                <th>Data</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>João Silva</td>
                                <td>24/06/2026</td>
                                <td>R$ 500,00</td>
                            </tr>
                            <tr>
                                <td>1002</td>
                                <td>Maria Souza</td>
                                <td>24/06/2026</td>
                                <td>R$ 750,00</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Gráfico de barras
new Chart(document.getElementById('graficoVendas'), {
    type: 'bar',
    data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
            label: 'Faturamento',
            data: [12000, 19000, 15000, 25000, 22000, 32000],
            backgroundColor: '#0d6efd'
        }]
    }
});

// Gráfico de pizza
new Chart(document.getElementById('graficoCategoria'), {
    type: 'pie',
    data: {
        labels: ['Eletrônicos', 'Roupas', 'Serviços'],
        datasets: [{
            data: [45, 30, 25],
            backgroundColor: [
                '#0d6efd',
                '#198754',
                '#ffc107'
            ]
        }]
    }
});
</script>

</body>
</html>