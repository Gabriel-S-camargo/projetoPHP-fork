<?php

class Venda
{

    use Controller;

    public function index()
    {
        $venda = new Vendas;

        if (isset($_POST['buscarVenda']) && !empty($_POST['buscarVenda'])) {
            $pesquisa['id'] = $_POST['buscarVenda'];
            $result = $venda->first($pesquisa);

            if ($result !== false) {
                $this->view('vendas', ['vendas' => [$result]]);
            } else {
                $this->view('vendas', ['vendas' => []]);
            }
        } else {
            $result = $venda->findAll();

            if ($result !== false ) {
                $this->view('vendas', ['vendas' => $result]);
            } else {
                $this->view('vendas', ['vendas' => []]);
            }
        }
    }
}
