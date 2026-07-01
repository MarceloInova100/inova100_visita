<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Vendedor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card shadow">

                    <div class="card-header bg-info text-white">
                        <h3 class="mb-0">Dados da Cidade</h3>
                    </div>

                    <div class="card-body">

                        <h1>Dados da Cidade</h1>

                        <?php if (!isset($cidade) || empty($cidade)): ?>

                            <p>Cidade não encontrada.</p>

                        <?php else: ?>

                            <p>
                                <strong>ID:</strong>
                                <?= esc($cidade['id']) ?>
                            </p>

                            <p>
                                <strong>Nome:</strong>
                                <?= esc($cidade['nome']) ?>
                            </p>

                            <p>
                                <strong>CPF:</strong>
                                <?= esc($cidade['cpf'] ?? '') ?>
                            </p>

                            <p>
                                <strong>Telefone:</strong>
                                <?= esc($cidade['telefone'] ?? '') ?>
                            </p>

                        <?php endif; ?>

                        <p>
                            <a href="<?= site_url('cidade') ?>">Voltar</a>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>