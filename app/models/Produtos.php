

<?php

class Produtos{

    use Model;

    protected $table = 'produtos';

    protected $allowedColumns = [
        'id',
        'nome',
        'preco',
        'estoque'
    ];

    public function validateRow($data){
        $this->errors = [];

        if(empty($data['id'])){
            $this->errors   ['id'] = "Nenhum produto encontrado";
        }

        if(empty($this->errors)){
            return true;
        }

        return false;
    }



}