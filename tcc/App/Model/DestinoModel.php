<?php

use APP\DAO\DestinoDAO;

class DestinoModel{

    public $id, $nome, $descricao, $preco;

    public $rows;

    public function getAllRows(){
        include_once 'DAO/DestinoDAO.php';
        $dao = new DestinoDAO();     
        $this->rows = $dao->select();

    }
    
}