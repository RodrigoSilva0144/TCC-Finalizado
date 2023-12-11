<?php

include_once 'Controller/DestinoController.php';


class DestinoController{
   public static function destino(){
      include_once 'Model/DestinoModel.php';
      include_once 'Model/ProdutoModel.php';
        
      $images = new ProdutoModel();
       $model = new DestinoModel();

       $model->getAllRows();

       
      $arrayimg = [];
      foreach($model->rows as $key => $values){
      
         $img =  $images->getImagesByProdutoId($values->produto_id);
         $arrayimg [$values->produto_id]['imagens'] = (count($img) > 0) ? $img : [] ;
         $arrayimg [$values->id]['produto'] = $model->rows[$key];
         }
            // print_r($arrayimg);
            // exit;
      
        require_once 'View/Modules/Produto/destination.php';
   }
  
}