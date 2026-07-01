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
                        <h3 class="mb-0">Dados do Vendedor</h3>
                    </div>

                    <div class="card-body">

                        <?php if (!empty($vendedor)) : ?>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    ID
                                </label>

                                <div class="form-control bg-light">
                                    <?= esc($vendedor['id']) ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Nome
                                </label>

                                <div class="form-control bg-light">
                                    <?= esc($vendedor['nome']) ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    CPF
                                </label>

                                <div class="form-control bg-light">
                                    <?= esc($vendedor['cpf'] ?? '') ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Telefone
                                </label>

                                <div class="form-control bg-light">
                                    <?= esc($vendedor['telefone'] ?? '') ?>
                                </div>
                            </div>

                            <div class="d-flex gap-2">

                                <a href="<?= site_url('vendedor/editar/' . $vendedor['id']) ?>"
                                   class="btn btn-warning">
                                    Editar
                                </a>

                                <a href="<?= site_url('vendedor') ?>"
                                   class="btn btn-secondary">
                                    Voltar
                                </a>

                            </div>

                        <?php else : ?>

                            <div class="alert alert-danger">
                                Vendedor não encontrado.
                            </div>

                            <a href="<?= site_url('vendedor') ?>"
                               class="btn btn-secondary">
                                Voltar
                            </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>