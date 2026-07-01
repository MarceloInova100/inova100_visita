<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vendedor</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card shadow">

                    <div class="card-header bg-warning">
                        <h3 class="mb-0">Editar Vendedor</h3>
                    </div>

                    <div class="card-body">

                        <?php if (!empty($vendedor)) : ?>

                            <form action="<?= site_url('vendedor/atualizar/' . $vendedor['id']) ?>" method="post">

                                <div class="mb-3">
                                    <label for="nome" class="form-label">
                                        Nome
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nome"
                                        name="nome"
                                        value="<?= esc($vendedor['nome']) ?>"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="cpf" class="form-label">
                                        CPF
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="cpf"
                                        name="cpf"
                                        value="<?= esc($vendedor['cpf'] ?? '') ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="telefone" class="form-label">
                                        Telefone
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="telefone"
                                        name="telefone"
                                        value="<?= esc($vendedor['telefone'] ?? '') ?>">
                                </div>

                                <div class="d-flex gap-2">

                                    <button
                                        type="submit"
                                        class="btn btn-warning">
                                        Atualizar
                                    </button>

                                    <a
                                        href="<?= site_url('vendedor') ?>"
                                        class="btn btn-secondary">
                                        Voltar
                                    </a>

                                </div>

                            </form>

                        <?php else : ?>

                            <div class="alert alert-danger">
                                Vendedor não encontrado.
                            </div>

                            <a
                                href="<?= site_url('vendedor') ?>"
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