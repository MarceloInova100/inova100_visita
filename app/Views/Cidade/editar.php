<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            color: white;
        }

        .editar {
            background-color: #007bff;
        }

        .excluir {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <h1>Editar Produtor</h1>

        <?php if (!isset($produtor) || empty($produtor)): ?>

            <p>Produtor não encontrado.</p>

        <?php else: ?>

        <form action="<?= site_url('produtor/atualizar/'.$produtor['id']) ?>" method="post">

            <p>
                <label>Nome</label><br>
                <input
                    type="text"
                    name="nome"
                    value="<?= esc($produtor['nome']) ?>"
                    required
                >
            </p>

            <p>
                <label>CPF</label><br>
                <input
                    type="text"
                    name="cpf"
                    value="<?= esc($produtor['cpf'] ?? '') ?>"
                >
            </p>

            <p>
                <label>Telefone</label><br>
                <input
                    type="text"
                    name="telefone"
                    value="<?= esc($produtor['telefone'] ?? '') ?>"
                >
            </p>

            <button type="submit">Atualizar</button>

        </form>

        <?php endif; ?>

        <p>
            <a href="<?= site_url('produtor') ?>">Voltar</a>
        </p>
    </body>
</html>