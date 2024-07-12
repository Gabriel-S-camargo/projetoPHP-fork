<?php 
function show($f){
    echo "<pre>";
    print_r($f);
    echo "</pre>";
}

function esc($str){
    return htmlspecialchars($str);
}

function redirect($path){
    header("Location: ".ROOT."/".$path);
    die;
}

function menu(){
    echo "
    <header>
        <nav>
        <ul>
        <li><img class='logo' src='http://localhost/projetoPHP/public/assets/img/php3d.png' alt='' /></li>
            <li><a href='http://localhost/projetoPHP/public/'>Home</a></li>
            <li><a href='#'>naosei</a></li>
            <li><a href='http://localhost/projetoPHP/public/sobre'>Sobre</a></li>
        </ul>";
    if(empty($_SESSION['LOGIN'])){
        echo "
        <div>
            <a href='http://localhost/projetoPHP/public/login'>
              <button type='button' class='nav-button' id='login'>Login</button>
            </a>
            <a href='http://localhost/projetoPHP/public/register'>
              <button type='button' class='nav-button' id='register'>Registrar</button>
            </a>
        ";
    }else{
        $nome = $_SESSION['LOGIN']->login;
        echo "
        <div class='header-button'>
        <h2>Olá, $nome</h2>
        <a href='http://localhost/projetoPHP/public/logout'>
        <button type='button' class='nav-button' id='logout'>Logout</button>
        </a>
        ";
    }
    echo "
        </div>
      </nav>
      </header>
    ";
}

function contentBox($title, $img, $text){
    echo "
    <div class='content-box'>
    <div class='content-image'>
    <img src='http://localhost/projetoPHP/public/assets/img/$img.png' alt='' />
    </div>
    <div class='content-box-text blur'>
    <h3>$title</h3>
    <p>
    $text
    </p>
    </div>
    </div>
    ";
}

function footer(){
    echo "
    <footer id='footer'>
        <p>&copy; PROJETO PHP</p>
    </footer>
    ";
}