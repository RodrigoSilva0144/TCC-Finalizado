<?php

include_once 'Controller/HomeController.php';
include_once 'Model/ApresentaVModel.php';
include_once 'Model/ProdutoModel.php';

class HomeController{
   public static function home(){

       $model = new ApresentaVModel();
        $model->getAllRows();

        $mvalor = new ApresentaVModel();
        $mvalor->getMenorValor();

        $images = new ProdutoModel();
        $arrayimg = [];
      
        foreach($model->rows as $key => $values){
        
           $img =  $images->getImagesByProdutoId($values->produto_id);
  
           
           $arrayimg [$values->produto_id]['imagens'] = (count($img) > 0) ? $img : [] ;
           $arrayimg [$values->id]['produto'] = $model->rows[$key];
           }

        include 'View/Modules/Produto/Home.php';
    
   }

}