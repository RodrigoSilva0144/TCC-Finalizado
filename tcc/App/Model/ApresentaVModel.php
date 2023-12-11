<?php

// namespace App\Model;
// use App\DAO\ProdutoDAO;

class ApresentaVModel
{
    public $id, $cidade, $estado, $valor, $quantdias, $quartos, $images;

    public $rows;

    //metodo para pegar todas as linhas e apresentar na tela de listagem
    public function getAllRows()
    {
        include_once 'DAO/ApresentaVDAO.php';
        $dao = new ApresentaVDAO();

        $this->rows = $dao->select();
    }

    public function getMenorValor(){
        include_once 'DAO/ApresentaVDAO.php';
        $dao = new ApresentaVDAO();

        $this->rows = $dao->selectValor();
    }
}

//A palavra chave THIS é a instancia de todo o objeto no caso da utilizacao aqui,
//ele se refere a intancia do save logo assim, passando todo o save no insert