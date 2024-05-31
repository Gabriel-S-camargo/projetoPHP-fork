<?php

class Produto_editar
{

    use Controller;

    public function index()
    {

        $produto_editar = new Produtos;

        $data['id'] = $_GET['id'];

        $produtoEncontrado = $produto_editar->first($data);


        $this->view('produto_editar', ['produto' => $produtoEncontrado]);

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $data['id'] = $_GET['id'];

            $values = array(
                'nome' => $_POST['nome'],
                'preco' => floatval($_POST['preco']),
                'estoque' => intval($_POST['estoque'])
            );
            
            $result = $produto_editar->update($data['id'], $values);

            if ($result !== false && is_array($result) && count($result) > 0) {
                
                header("Location: " . ROOT . "/produto");
                exit; 
            } else {
                header("Location: " . ROOT . "/produto");
            }


            
        }
    }
}
