<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= ROOT ?>/assets/img/php3d.png" type="image/x-icon" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/reset.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style.css" />
</head>

<body>
    <?=menu()?>
    <main>

        <div class="blur">
            <h1>Produtos Editar</h1>
        </div>
        <br><br>
        <div class="internalNav">
            <form method="post" action="<?= ROOT ?>/produto">
                <input type="search" placeholder="digite produto" id="buscarProduto" name="buscarProduto">
                <button type="submit">Buscar</button>
            </form>
            <button type="submit">Adicionar Produto</button>
            <a href="<?=ROOT?>/produto">Voltar pagina</a>
        </div>

        <form method="post">
            <label for="nomeProduto">Nome</label><br>
            <input type="text" name="nome" id="nome" value="<?= $produto->nome ?>">
            <br><br>
            <label for="nomeProduto">Preco</label> <br>
            <input type="number" step="0.01" min="0" name="preco" id="preco" value="<?= $produto->preco ?>">
            <br><br>
            <label for="nomeProduto">Estoque</label><br>
            <input type="number" name="estoque" id="estoque" value="<?= $produto->estoque ?>">

            <button type="submit">Enviar Alterações</button>
        </form>
    </main>

    <?=footer()?>

</body>

</html>