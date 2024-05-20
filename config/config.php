<?php 
// Configs do DB 
// Configs do Site

//site name
define('SITE_NAME', 'Logus');

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');

//DB Params

// professor ensinou assim
try {
    $pdo = new PDO('mysql:host=localhost;dbaname=LogusDB', 'root', '1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "ERRO => " . $erro->getMessage();
}


// tem que ver como que faz aqui certo 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '1234');
define('DB_NAME', 'LogusDB');
