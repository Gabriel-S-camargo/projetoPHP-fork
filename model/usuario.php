<?php 

// Criacao Estrutura de usuarios do sistema

$QueryUsuario = "CREATE TABLE IF NOT EXISTS usuarios(
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    nomeLogin VARCHAR(20) NOT NULL,
    #60 caracteres pq e o que retornar a funcao password_hash()
    userPassword VARCHAR(60) NOT NULL, 
    dataCricao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ultimoLogin TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);";

$QueryUsuarioCreation = $pdo->prepare($QueryUsuario);

$QueryUsuarioCreation ->execute();




?>