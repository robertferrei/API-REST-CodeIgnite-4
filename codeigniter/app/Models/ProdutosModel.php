<?php

namespace App\Models;
use CodeIgniter\Model;

class ProdutosModel extends Model{
    protected $table = 'produtos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['produto','valor']; //colunas das tabelas que serão pegas
    protected $validationRules = [
        'produto' => 'required|min_length[3]|is_unique[produtos.produto]',        
    ];
}
