

<?php

class VendasItens{

    use Model;

    protected $table = 'vendasitens';

    protected $allowedColumns = [
        'id',
        'codVenda',
        'codProduto',
        'quantidade',
        'valorItem',
        'valorTotal'
    ];


}