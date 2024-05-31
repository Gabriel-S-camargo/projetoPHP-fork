<?php 

class Produto_adicionar{

    use Controller;
    
    public function index(){
        $produto_adicionar = new Produtos;

        $this->view('produto_adicionar');

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $values = array(
                'nome' => $_POST['nome'],
                'preco' => floatval($_POST['preco']),
                'estoque' => intval($_POST['estoque'])
            );

            $produto_adicionar->insert($values);

            header("Location: " . ROOT . "/produto");
        }
    }
}