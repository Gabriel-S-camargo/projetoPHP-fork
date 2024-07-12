

<?php

class Vendas{

    use Model;

    protected $table = 'vendas';

    protected $allowedColumns = [
        'idVenda',
        'formaPagamento',
        'valorTotal',
        'dataVenda'
    ];


}