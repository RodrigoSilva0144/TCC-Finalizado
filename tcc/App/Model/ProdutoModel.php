<?php

// namespace App\Model;
// use App\DAO\ProdutoDAO;

class ProdutoModel{
    public $id, $cidade, $estado, $valor, $quantdias, $quartos, $images;

    public $rows;

    public function save(){
        include_once 'DAO/ProdutoDAO.php';
        //instanciando a classe
        $dao = new ProdutoDAO();
        /*(empty($this->id)) ?*/ $dao->insert($this) /*: $dao->update($this)*/;
        //inseriu
        
    }

    public function atualizar(){
        include_once 'DAO/ProdutoDAO.php';
        //instanciando a classe
        $dao = new ProdutoDAO();
        $dao->update($this);
    }

//metodo para pegar todas as linhas e apresentar na tela de listagem
    public function getAllRows(){
        include_once 'DAO/ProdutoDAO.php';
        
        $dao = new ProdutoDAO();
        
        return $this->rows = $dao->select();
        
    }

    public function getById(int $id){
        include_once 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new ProdutoModel();
    
    }

    public function delete(int $id){
        include_once 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();
        $dao->delete($id);
    }


    public function deleteimg(int $id){
        include_once 'DAO/ProdutoDAO.php';
        $dao = new ProdutoDAO();
        $dao->deleteimg($id);
    }

    public function getImagesByProdutoId(int $produtoid) {
       include_once 'DAO/ProdutoDAO.php';

       $dao = new ProdutoDAO();
       $obj = $dao->selectImgByID($produtoid);

       return ($obj);
    }


}

