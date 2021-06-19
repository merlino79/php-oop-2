<?php

  require_once __DIR__ .'/User.php';

  class Product {
    public $name;
    public $price;
    public $description;
    public $category ;

     public function __construct($_name, $_price,$_description, $_category){
      $this->name = $_name;
      $this->price = $_price;
      $this->description = $_description;
      $this->category = $_category;
     }  
      
       public function getProduct_info()
    {
      return "nome prodotto: ".$this->name . "<br>prezzo :".$this->price . "<br>descrizione:".$this->description . "<br>categoria:".$this->category;
      
    }
      
  


    
  }

  

   


  

?>