<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

                <h3 class="mb-0">Lista de Produtores</h3>

                <a href="<?= site_url('produtor/novo') ?>" class="btn btn-light">
                    Novo Produtor
                </a>

            </div>

            <div class="card-body">

                <table class="table table-striped table-hover align-middle">

                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th width="250">Ações</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php if (!empty($produtores)) : ?>

                        <?php foreach ($produtores as $produtor) : ?>

                            <tr>

                                <td><?= $produtor['id'] ?></td>

                                <td><?= esc($produtor['nome']) ?></td>

                                <td>

                                    <a href="<?= site_url('produtor/visualizar/' . $produtor['id']) ?>"
                                       class="btn btn-info btn-sm">
                                        Visualizar
                                    </a>

                                    <a href="<?= site_url('produtor/editar/' . $produtor['id']) ?>"
                                       class="btn btn-warning btn-sm">
                                        Editar
                                    </a>

                                    <a href="<?= site_url('produtor/excluir/' . $produtor['id']) ?>"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Deseja excluir este produtor?')">
                                        Excluir
                                    </a>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else : ?>

                        <tr>
                            <td colspan="3" class="text-center text-muted">
                                Nenhum produtor encontrado.
                            </td>
                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

        <div class="mt-3">
            <a href="<?= site_url('/') ?>" class="btn btn-secondary">
                Voltar ao Menu Principal
            </a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>