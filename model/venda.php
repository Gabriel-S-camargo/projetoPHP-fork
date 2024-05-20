<?php 
$QueryVendas = "CREATE TABLE IF NOT EXISTS vendas (
    idVenda INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT NOT NULL,
    formaPagamento VARCHAR(50) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (produto_id) REFERENCES produtos(idProduto)
);";

$QueryVendasCreation = $pdo->prepare($QueryVendas);

$QueryVendasCreation->execute();

//Criacao do vendasItens Abaixo

$QueryVendasItens = "CREATE TABLE IF NOT EXISTS vendas_itens (
    idVendaItem INT AUTO_INCREMENT PRIMARY KEY,
    idVenda INT NOT NULL,
    idProduto INT NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (idVenda) REFERENCES vendas(idVenda),
    FOREIGN KEY (idProduto) REFERENCES produtos(idProduto)
);";

$QueryVendasItensCreation = $pdo->prepare($QueryVendasItens);

$QueryVendasItensCreation -> execute();

?>