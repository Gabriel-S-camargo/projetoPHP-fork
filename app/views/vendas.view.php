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
            <h1>Vendas</h1>
        </div>
        <br><br>
        <div class="internalNav">
            <form method="post" action="<?= ROOT ?>/venda">
                <input type="search" placeholder="digite id da Venda" id="buscarVenda" name="buscarVenda">
                <button type="submit">Buscar</button>
            </form>
            <a href="<?= ROOT ?>/venda_adicionar" id="botao" class="botao">Adicionar Nova Venda</a>
            <a href="<?= ROOT ?>/dashboard" id="botao" class="botao">Voltar Pagina</a>
        </div>

        <br><br>

        <table>
            <thead>
                <tr>
                    <th>ID Venda</th>
                    <th>Forma de Pagamento</th>
                    <th>Valor Total</th>
                    <th>Data Venda</th>
                    <th>Funcao</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($vendas) ) {
                    foreach ($vendas as $venda) { ?>
                        <tr>
                            <td><strong><?php echo $venda->id; ?></strong></td>
                            <td><?php echo $venda->formaPagamento; ?></td>
                            <td><?php echo $venda->valorTotal; ?></td>
                            <td><?php echo $venda->dataVenda; ?></td>
                            <td>
                                <div class="funcoes">
                                    <a href="<?= ROOT ?>/venda_editar?id=<?php echo $venda->id; ?>" id="botao" class="botao botaoEditar">Editar</a>
                                    <a href="<?= ROOT ?>/venda_excluir?id=<?php echo $venda->id; ?>" id="botao" class="botao botaoExcluir">Excluir</a>
                                </div>
                            </td>
                        </tr>
                <?php }
                } else {
                    echo 'Venda não encontrada';
                }
                ?>
            </tbody>
        </table>
    </main>

    <?= footer() ?>
</body>

</html>