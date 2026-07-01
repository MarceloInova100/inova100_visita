
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Visita</title>
</head>
<body>

<h1><?= isset($visita) ? 'Editar Visita' : 'Nova Visita' ?></h1>

<form method="post"
      action="<?= isset($visita)
        ? base_url('visita/atualizar/' . $visita['Id_visita'])
        : base_url('visita/salvar') ?>">

    <div>
        <label>ID Visita</label>
        <br>

        <input type="number"
               name="Id_visita"
               value="<?= $visita['Id_visita'] ?? '' ?>"
               <?= isset($visita) ? 'readonly' : '' ?>>
    </div>

    <br>

    <div>
        <label>ID Pessoa</label>
        <br>

        <input type="number"
               name="Id_Pessoa"
               value="<?= $visita['Id_Pessoa'] ?? '' ?>"
               required>
    </div>

    <br>

    <div>
        <label>Data da Visita</label>
        <br>

        <input type="date"
               name="data_visita"
               value="<?= $visita['data_visita'] ?? date('Y-m-d') ?>"
               required>
    </div>

    <br>

    <button type="submit  </a>

</form>

</body>
</html>
