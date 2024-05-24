<?php
$host = 'localhost';
$db = 'loja';
$user = 'root';
$pass = '1234';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Criar banco de dados
    $pdo->exec("CREATE DATABASE IF NOT EXISTS loja");
    $pdo->exec("USE loja");

    // Criar tabela de produtos
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS produtos (
            idProduto INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            preco DECIMAL(10, 2) NOT NULL,
            estoque INT NOT NULL DEFAULT 0
        )
    ");

    // Criar tabela de vendas
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS vendas (
            idVenda INT AUTO_INCREMENT PRIMARY KEY,
            formaPagamento VARCHAR(50) NOT NULL,
            valorTotal DECIMAL(10, 2) NOT NULL,
            dataVenda TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    // Criar tabela de vendasItens
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS vendasItens (
            id INT AUTO_INCREMENT PRIMARY KEY,
            codVenda INT NOT NULL,
            codProduto INT NOT NULL,
            quantidade INT NOT NULL,
            valorItem DECIMAL(10, 2) NOT NULL,
            valorTotal DECIMAL(10, 2) AS (quantidade * valorItem) STORED,
            FOREIGN KEY (codVenda) REFERENCES vendas(idVenda),
            FOREIGN KEY (codProduto) REFERENCES produtos(idProduto)
        )
    ");

    // Criar tabela de financeiro
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS financeiro (
            id INT AUTO_INCREMENT PRIMARY KEY,
            tipo VARCHAR(50) NOT NULL,
            nome VARCHAR(100) NOT NULL,
            valor DECIMAL(10, 2) NOT NULL,
            data DATE NOT NULL
        )
    ");

    // Criar trigger para atualizar o estoque e registrar a venda no financeiro após uma venda
    $pdo->exec("
        DELIMITER //
        CREATE TRIGGER atualizar_estoque_venda
        AFTER INSERT ON vendasItens
        FOR EACH ROW
        BEGIN
            -- Atualizar estoque
            UPDATE produtos
            SET estoque = estoque - NEW.quantidade
            WHERE idProduto = NEW.codProduto;

            -- Inserir registro no financeiro
            INSERT INTO financeiro (tipo, nome, valor, data)
            VALUES ('credito', NEW.codVenda, NEW.valorTotal, (SELECT dataVenda FROM vendas WHERE idVenda = NEW.codVenda));
        END//
        DELIMITER ;
    ");

    echo "Migração realizada com sucesso!";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>