<?php 
//Criacao da estrutura da table produtos

$QueryProdutos = "CREATE TABLE IF NOT EXISTS produtos (
    idProduto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL DEFAULT 0
);";

$QueryProdutosCreation = $pdo -> prepare($QueryProdutos);

$QueryProdutosCreation ->execute();

?>