<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="bg-white text-center py-4 shadow-sm">

        <img
            src="<?= base_url('img/logo.png') ?>"
            alt="Logo"
            class="img-fluid mx-auto d-block"
            style="max-width: 250px; height: auto;"
        >

    </div>
    <div class="container mx-auto py-10">

        <h2 class="text-4xl font-bold text-center text-blue-700 mb-10">
            INOVA SHOW - Cadastro
        </h2>
    <div class="container mx-auto px-4 py-10">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Produtores -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-semibold mb-4">
                Produtores
            </h2>

            <p class="text-gray-600 mb-6">
                Cadastro e gerenciamento de produtores.
            </p>

            <a
                href="<?= site_url('produtor') ?>"
                class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700"
            >
                Acessar
            </a>
        </div>

        <!-- Vendedores -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-semibold mb-4">
                Vendedores
            </h2>

            <p class="text-gray-600 mb-6">
                Cadastro e gerenciamento de vendedores.
            </p>

            <a
                href="<?= site_url('vendedor') ?>"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
            >
                Acessar
            </a>
        </div>

        <!-- Estandes -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-semibold mb-4">
                Estandes
            </h2>

            <p class="text-gray-600 mb-6">
                Cadastro e gerenciamento de estandes.
            </p>

            <a
                href="#"
                class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700"
            >
                Acessar
            </a>
        </div>

        <!-- Visitantes -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-semibold mb-4">
                Visitantes
            </h2>

            <p class="text-gray-600 mb-6">
                Cadastro e gerenciamento de visitantes.
            </p>

            <a
                href="#"
                class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700"
            >
                Acessar
            </a>
        </div>

    </div>

</div>


        </div>

    </div>

</body>

</html>