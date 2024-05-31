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
    }
}
