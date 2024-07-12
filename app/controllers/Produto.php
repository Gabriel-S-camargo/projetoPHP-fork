
<?php

class Produto
{
    use Controller;

    public function index()
    {
        $produtos = new Produtos;

        if (isset($_POST['buscarProduto'])) {
            $pesquisa = $_POST['buscarProduto'];
            $result = $produtos->searchByDescription($pesquisa);

            if ($result !== false && is_array($result) && count($result) > 0) {
                $this->view('produtos', ['produtos' => $result]);
            } else {

                $this->view('produtos', ['produtos' => []]);
            }
        } else {
            $result = $produtos->findAll();

            if ($result !== false && is_array($result) && count($result) > 0) {
                $this->view('produtos', ['produtos' => $result]);
            } else {
                $this->view('produtos', ['produtos' => []]);
            }
        }
    }
}
