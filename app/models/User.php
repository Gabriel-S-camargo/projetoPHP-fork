<?php

class User {

    use Model;
    protected $table = 'usuario';

    protected $allowedColumns = [
        'login',
        'senha'
    ];

    public function validate($data){
        $this->errors = [];

        if(empty($data['login'])){
            $this->errors['login'] = "Insira o nome de usuário";
        }

        if(empty($data['senha'])){
            $this->errors['senha'] = "Insira a senha válida";
        }

        if(empty($this->errors)){
            return true;
        }

        return false;
    }
}