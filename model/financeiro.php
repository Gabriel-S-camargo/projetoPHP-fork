<?php 

// Criacao da estrutura do Financeiro 

$QueryFinanceiro = "CREATE TABLE IF NOT EXISTS financeiro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    data DATE NOT NULL
);";

$QueryFinanceiroCreation = $pdo->prepare($QueryFinanceiro);

$QueryFinanceiroCreation ->execute();

?>