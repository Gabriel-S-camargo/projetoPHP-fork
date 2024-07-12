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
            <h1>Produtos Excluir</h1>
        </div>
        <br><br>
        <div class="internalNav">
            <form method="post" action="<?= ROOT ?>/produto">
                <input type="search" placeholder="digite produto" id="buscarProduto" name="buscarProduto">
                <button type="submit">Buscar</button>
            </form>
            <br>
            <a href="<?=ROOT?>/produto">Voltar pagina</a>

            <br><br>
        </div>

        <form method="POST">
            <label for="opcao">Deseja Realmente Exluir esse Registro?</label><br><br>
            <label for="opcao0">Sim</label>
            <input type="radio" name="opcao" id="opcao" value="0"><br><br>
            <label for="opcao0">Não</label>
            <input type="radio" name="opcao" id="opcao" value="1">
            <br><br>
            <button type="submit">Confirmar Opcao</button>
        </form>


    </main>

    <?=footer()?>
</body>

</html>