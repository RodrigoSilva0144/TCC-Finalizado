<?php

namespace APP\DAO;

use LoginModel;

class LoginDAO{

   private $conexao;

   public function __construct()
   {
       $dsn = "mysql:host=localhost:3306;dbname=pdo";
       $this->conexao = new \PDO($dsn, 'root', '');
   }

   public function Logar(LoginModel $model){
    $sql = 'SELECT * FROM login WHERE email = :email';

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(':email', $model->email);
    $stmt->execute();

    if ($stmt->rowCount()){
        $result = $stmt->fetch();
        
        if($result['senha'] === $model->senha){
            $_SESSION['emai'] = $result['id'];

            return true;
        }
    }
    throw new \Exception('Login Invalido');
   }
}