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
    <?= menu() ?>
    <main>
        <div class="blur">
            <h1>Adiocionar Vendas</h1>
        </div>
        <br><br>
        <div class="internalNav">
            <form method="post" action="<?= ROOT ?>/venda">
                <input type="search" placeholder="digite id da Venda" id="buscarVenda" name="buscarVenda">
                <button type="submit">Buscar</button>
            </form>
            <a href="<?=ROOT?>/venda">Voltar Pagina</a>
        </div>

        <br><br>

        <form method="post">

            <br><br>

            <label for="formaPagamento">Forma De Pagamento</label><br>
            <input type="text" name="formaPagamento" id="formaPagamento">
            <br><br>

            <label for="vendaItens">Selecione os produtos da venda</label>
            <form method="post" action="<?= ROOT ?>/venda_adicionar">
                <input type="search" placeholder="digite produto" id="buscarProduto" name="buscarProduto">
                <button type="submit">Buscar</button>
            </form>

            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Estoque</th>
                        <th>Quantidade Venda</th>
                        <th>Adicionar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($produtos) && is_array($produtos) && count($produtos) > 0) {
                        foreach ($produtos as $produto) { ?>
                            <tr>
                                <td><strong><?php echo $produto->id; ?></strong></td>
                                <td><?php echo $produto->nome; ?></td>
                                <td><?php echo $produto->preco; ?></td>
                                <td><?php echo $produto->estoque; ?></td>
                                <td><input type="number"></td>
                                <td><button type="submit">Adicionar</button>
                            </tr>
                    <?php }
                    } else {
                        echo "Nenhum produto encontrado.";
                    }
                    ?>
                </tbody>
            </table>


            <br><br>

            <button type="submit">Adicionar Venda</button>
        </form>
    </main>

    <?= footer() ?>

</body>

</html>