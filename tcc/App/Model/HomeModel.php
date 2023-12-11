<?php

use APP\DAO\HomeDAODAO;

class HomeModel{

    public $id, $nome, $descricao, $preco;

    public $rows;

    public function getAllRows(){
        require_once 'DAO/ApresentaVDAO.php';
        $dao = new ProdutoDAO();
        
        $this->rows = $dao->select();
    }

    public function getById(int $id){
        require_once 'DAO/ApresentaVDAO.php';
        $dao = new ProdutoDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new ProdutoModel();
    
    }
}