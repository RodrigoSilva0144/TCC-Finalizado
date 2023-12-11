<?php

include_once 'Controller/ProdutoController.php';

class ProdutoController {
    
    //responsável pela listagem dos prods
    public static function index(){
        include_once 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        $model->getAllRows();

        include 'View/Modules/Produto/ListaProduto.php';
    }
    //form responsável por devolver o form
    public static function form(){

        include_once 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))

        $model = $model->getById((int) $_GET['id']);

        include 'View/Modules/Produto/FormProduto.php';
    }
    //form responsável por salvar o cadastro
    public static function save(){
        include_once 'Model/ProdutoModel.php';
        //inclusao do arquivo que vai transportar os dados de uma lado ao outro

        //criacao do model que irá transportar os dados da view do form até a DAO
        $model = new ProdutoModel();

        //Pegando os dados para salvar
        $model->id = $_POST['id'];
        $model->cidade = $_POST['cidade'];
        $model->estado = $_POST['estado'];
        $model->valor = $_POST['valor'];
        $model->quantdias = $_POST['quantdias'];
        $model->quartos = $_POST['quartos'];
        $model->images = $_FILES['images'];

        //Salvando os dados da model
        $model->save();

        //Redireciona ao finalizar esse processo para a tela de produtos
        header("Location: /produto");

    }

    public static function formatt(){
        include_once 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
       
        
        if(isset($_GET['id']))

        $model = $model->getById((int) $_GET['id']);

        
        $images = new ProdutoModel();
        $arrayimg = [];
    
           $img =  $images->getImagesByProdutoId($model->produto_id);
          
           $arrayimg [$model->produto_id]['imagens'] = (count($img) > 0) ? $img : [] ;
           
        include 'View/Modules/Produto/Atualizar.php';
    }

    public static function atualizar(){
        //inclusao do arquivo que vai transportar os dados de uma lado ao outro
        include_once 'Model/ProdutoModel.php';

        //criacao do model que irá transportar os dados da view do form até a DAO
        $model = new ProdutoModel();

        //Pegando os dados para salvar
        $model->id = $_POST['id'];
        $model->cidade = $_POST['cidade'];
        $model->estado = $_POST['estado'];
        $model->valor = $_POST['valor'];
        $model->quantdias = $_POST['quantdias'];
        $model->quartos = $_POST['quartos'];
        $model->images = $_FILES['images'];
        
        //Salvando os dados da model
        $model->atualizar();
     
        //Redireciona ao finalizar esse processo para a tela de produtos
         header("Location: /produto");
    }

    public static function delete(){

        include_once 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model->delete((int) $_GET['id']);

        header("Location: /produto");
    }

    public static function deleteimg(){
        include_once 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->deleteimg((int) $_GET['id']);

        header("Location: /produto");
    }


}