<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?=ROOT?>/assets/img/php3d.png" type="image/x-icon" />
    <title>Sobre</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/reset.css" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/sobre.css" />
</head>

<body>
    <?=menu()?>
    <main class="main">
        <section class="hero">
            <div class="hero-title">
                <h1 class="h1-title">
                    Sobre <br />
                    o projeto
                </h1>
                <a class="blur" href="https://github.com/HenriqueAlgauer/projetoPHP">Repositório GitHub</a>
            </div>
            <div class="hero-img">
                <img src="<?=ROOT?>/assets/img/github.png" alt="" />
            </div>
        </section>
        <hr />

        <section class="func">
            <div>
                <h2 class="h2-title">FUNCIONALIDADES DO SISTEMA</h2>
            </div>
            <?php 
            $t1 =
            "Registro completo das vendas realizadas, com funcionalidades para adicionar novas vendas, consultar registros existentes, editar detalhes e excluir registros quando necessário";
            $t2 =
            "Permite a inserção, visualização, atualização e exclusão de produtos no sistema. É possível gerenciar informações detalhadas como nome, descrição, preço e quantidade em estoque.";
            $t3 =
            "Monitoramento das finanças do negócio, incluindo entradas e saídas. As operações de CRUD garantem que todas as transações financeiras sejam devidamente registradas e acessíveis para consultas futuras.";
            contentBox("CADASTRO DE PRODUTOS", "func3", $t1);
            contentBox("CADASTRO DE PRODUTOS", "func1", $t2);
            contentBox("CADASTRO DE PRODUTOS", "func2", $t3);
            ?>
        </section>
    </main>
    <?=footer()?>
</body>

</html>