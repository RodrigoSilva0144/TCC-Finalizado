<?php

include_once 'Controller/LoginController.php';


 class LoginController{
    public static function index(){
        include_once 'Model/LoginModel.php';
        include 'View/Modules/Produto/Login.html';
    }

    public static function check(){
    include_once 'Model/LoginModel.php';

    try{$usuario = new LoginModel();
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha($_POST['senha']);
        $usuario->ValidarLogin();

        header("Location: /produto");
    }catch(\Exception $e){
        header("Location: /login");
    }
     

    }

}
 