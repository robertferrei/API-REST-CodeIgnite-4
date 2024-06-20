<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ProdutosController extends ResourceController
{
    private $produtoModel;
    public function __construct()
    {
     $this->produtoModel = new \App\Models\ProdutosModel();
    } 
    
    //retorno de todos os produtos cadastrados(GET)
        
    public function list(){
        $data = $this->produtoModel->findAll(); //buscando todos os produtos da tabela produtos

        return $this->response->setJSON($data); //formatando o resultado para json
    }
    
}
