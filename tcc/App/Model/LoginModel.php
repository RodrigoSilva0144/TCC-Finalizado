<?php

use APP\DAO\LoginDAO;

class LoginModel{
    public $id;
    public $email;
    public $senha;

    public function ValidarLogin(){
        //conexao ao banco de dados
        include_once 'DAO/LoginDAO.php';
        $dao = new LoginDAO();

        $dao->Logar($this);
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    
    public function getSenha(){
        return $this->senha;
    }
} 