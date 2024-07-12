<?php

class Venda_adicionar
{

    use Controller;

    public function index()
    {

        $produtos = new Produtos;

        if (isset($_POST['buscarProduto'])) {
            $pesquisa = $_POST['buscarProduto'];
            $result = $produtos->searchByDescription($pesquisa);

            if ($result !== false && is_array($result) && count($result) > 0) {
                $this->view('venda_adicionar', ['produtos' => $result]);
            } else {

                $this->view('venda_adicionar', ['produtos' => []]);
            }
        } else {
            $result = $produtos->findAll();

            if ($result !== false && is_array($result) && count($result) > 0) {
                $this->view('venda_adicionar', ['produtos' => $result]);
            } else {
                $this->view('venda_adicionar', ['produtos' => []]);
            }
        }

        if (isset($_POST['formaPagamento'])) {
            $formaPagamento = $_POST['formaPagamento'];

            // Inserir venda
            $vendas = new Vendas;
            $idVenda = $vendas->insert(['formaPagamento' => $formaPagamento]);

            // Inserir itens da venda
            $vendasItens = new VendasItens;
            foreach ($_POST['produtos'] as $produto) {
                $vendasItens->insert([
                    'codVenda' => $idVenda,
                    'codProduto' => $produto['id'],
                    'quantidade' => $produto['quantidade'],
                    'valorItem' => $produto['preco'],
                    'valorTotal' => $produto['preco'] * $produto['quantidade']
                ]);
            }

            header('Location: ' . ROOT . '/venda');
            exit;
        }
    }
}
