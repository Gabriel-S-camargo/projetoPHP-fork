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
            <h1>Produtos</h1>
        </div>
        <br><br>
        <div class="internalNav">
            <form method="post" action="<?= ROOT ?>/produto">
                <input type="search" placeholder="digite produto" id="buscarProduto" name="buscarProduto">
                <button type="submit">Buscar</button>
            </form>
            <a href="<?= ROOT ?>/produto_adicionar" id="botao" class="botao">Adicionar Produto</a>
            <a href="<?= ROOT ?>/dashboard">Voltar Pagina</a>
        </div>

        <br><br>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Funcao</th>
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
                            <td>
                                <div class="funcoes">
                                    <a href="<?= ROOT ?>/produto_editar?id=<?php echo $produto->id; ?>" id="botao" class="botao botaoEditar">Editar</a>
                                    <a href="<?= ROOT ?>/produto_excluir?id=<?php echo $produto->id; ?>" id="botao" class="botao botaoExcluir">Excluir</a>
                                </div>
                            </td>
                        </tr>
                <?php }
                } else {
                    echo "Nenhum produto encontrado.";
                }
                ?>
            </tbody>
        </table>
    </main>

    <?= footer() ?>
</body>

</html>