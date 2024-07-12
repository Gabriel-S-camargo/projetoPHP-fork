<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?=ROOT?>/assets/img/php3d.png" type="image/x-icon" />
    <title>Home</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/reset.css" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/home.css" />
</head>

<body>
    <?=menu()?>
    <main>
        <section class="hero">
            <div class="hero-title">
                <h1 class="h1-title">
                    Sistema <br />
                    interno de loja
                </h1>
                <h4>desenvolvimento de sistemas</h4>
            </div>
            <div class="hero-img">
                <img src="<?=ROOT?>/assets/img/card.png" alt="" />
            </div>
        </section>
        <hr />

        <section class="tecnology">
            <div class="tec-text">
                <h2 class="h2-title">TECNOLOGIAS</h2>
                <p>
                    Neste projeto, foram utilizadas exclusivamente as tecnologias
                    previamente especificadas. Não foi permitida a utilização de
                    bibliotecas adicionais, frameworks ou ORM (Object-Relational
                    Mapping). Essa restrição visou garantir um maior entendimento e
                    domínio dos fundamentos da linguagem e das tecnologias empregadas,
                </p>
            </div>
            <div class="tec-container">
                <div class="tec=box">
                    <img class="tec-img" src="<?=ROOT?>/assets/img/html.png" alt="" />
                    <img class="tec-img" src="<?=ROOT?>/assets/img/css.png" alt="" />
                </div>
                <div class="tec=box">
                    <img class="tec-img" src="<?=ROOT?>/assets/img/mysql3d.png" alt="" />
                    <img class="tec-img" src="<?=ROOT?>/assets/img/php.png" alt="" />
                </div>
            </div>
        </section>

        <section>
            <h2 class="h2-title">Desenvolvedores</h2>
            <div class="dev-container">
                <div class="dev-box blur">
                    <h3 class="dev-name">Henrique Machado Algauer</h3>
                    <img class="dev-img" src="<?=ROOT?>/assets/img/dev2.jpg" alt="" />
                    <div class="dev-git">
                        <img src="<?=ROOT?>/assets/img/git.png" alt="" />
                        <a href="https://github.com/henriquealgauer">GitHub</a>
                    </div>
                </div>
                <div class="dev-box blur">
                    <h3 class="dev-name">Gabriel Santos Camargo</h3>
                    <img class="dev-img" src="<?=ROOT?>/assets/img/dev1.jpeg" alt="" />
                    <div class="dev-git">
                        <img src="<?=ROOT?>/assets/git.png" alt="" />
                        <a href="https://github.com/Gabriel-S-camargo">GitHub</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?=footer()?>
</body>

</html>

<?php 

    