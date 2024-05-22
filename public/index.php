<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Home</title>
    <link rel="stylesheet" href="./src/css/reset.css" />
    <link rel="stylesheet" href="./src/css/home.css" />
    <link rel="stylesheet" href="./src/css/style.css" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><img class="logo" src="./src/img/php3d.png" alt="" /></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="naosei.html">Nao sei</a></li>
                <li><a href="sobre.html">Sobre</a></li>
            </ul>
            <div>
                <button type="button" class="nav-button" id="login">Login</button>
                <button type="button" class="nav-button" id="register">
                    Registrar
                </button>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-title">
                <h1 class="h1-title">
                    Sistema <br />
                    interno de loja
                </h1>
                <h4>desenvolvimento de sistemas</h4>
                <div class="main-button">
                    <button type="button" class="nav-button" id="login">Login</button>
                    <button type="button" class="nav-button" id="register">
                        Registrar
                    </button>
                </div>
            </div>
            <div class="hero-img">
                <img src="./src/img/card.png" alt="" />
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
                <div>
                    <img class="tec-img" src="./src/img/html.png" alt="" />
                    <img class="tec-img" src="./src/img/css.png" alt="" />
                </div>
                <div>
                    <img class="tec-img" src="./src/img/mysql3d.png" alt="" />
                    <img class="tec-img" src="./src/img/php.png" alt="" />
                </div>
            </div>
        </section>

        <section>
            <h2 class="h2-title">Desenvolvedores</h2>
            <div class="dev-container">
                <div class="dev-box blur">
                    <h3 class="dev-name">Henrique Machado Algauer</h3>
                    <img class="dev-img" src="./src/img/dev2.jpg" alt="" />
                    <div class="dev-git">
                        <img src="./src/img/git.png" alt="" />
                        <a href="https://github.com/henriquealgauer">GitHub</a>
                    </div>
                </div>
                <div class="dev-box blur">
                    <h3 class="dev-name">Gabriel Santos Camargo</h3>
                    <img class="dev-img" src="./src/img/dev1.jpeg" alt="" />
                    <div class="dev-git">
                        <img src="./src/img/git.png" alt="" />
                        <a href="https://github.com/Gabriel-S-camargo">GitHub</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; PROJETO PHP</p>
    </footer>
    <?php 
      phpinfo();
    ?>

</body>

</html>