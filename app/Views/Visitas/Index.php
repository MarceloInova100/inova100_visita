
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visitas</title>
</head>
<body>

    <h1>Controle de Visitas</h1>

    <p>
        <a href="<?= base_url('visita/novo') ?>">
            Nova Visita
        </a>
    </p>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID Visita</th>
                <th>ID Pessoa</th>
                <th>Data da Visita</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php if (!empty($visitas)): ?>

            <?php foreach ($visitas as $visita): ?>

                <tr>
                    <td><?= esc($visita['Id_visita']) ?></td>
                    <td><?= esc($visita['Id_Pessoa']) ?></td>
                    <td><?= esc($visita['data_visita']) ?></td>
                    <td>
                        <a href="<?= base_url('visita/editar/' . $visita['Id_visita']) ?>">
                            Editar
                        </a>

                        |

                        <a href="<?= base_url('visita/excluir/' . $visita['Id_visita']) ?>"
                           onclick="return confirm('Deseja excluir esta visita?');">
                            Excluir
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>
                <td colspan="4">Nenhuma visita encontrada.</td>
            </tr>

        <?php endif; ?>

        </tbody>
    </table>

</body>
</html>
