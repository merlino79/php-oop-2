<?php

  require_once __DIR__ .'/User.php';

  class User_premium extends User{

  private $additional_discount  = 10;
  // private $senior = 0;
  // private $points = 0;

  // di default eredito il costruttore del padre
  // se voglio aggiungere elementi al costruttore padre devo 
  // 1. creare un nuovo costruttore
  // 2. passare i paramentri al costruttore padre
  // 3. gestire i miei
  public function __construct($_additional_discount ){

    parent::__construct($_name, $_lastname, $_age);
    $this->level = $_level;
  }

  // public function addPoints($_points){
  //   // controllo con try se c'è una eccezione
  //   try{
  //     // provo a fare quello che serve
  //     $this->points = $this->calcPoints($_points);
  //   }catch(Exception $e){
  //     // se non ci riesco per un errore
  //     // eseguo la mia logica della gestione dell'errore
  //     echo $e->getMessage();
  //   }
    
  // }

  // private function calcPoints($_points){
  //   if(!is_int($_points))
  //   {
  //     // genero un'eccezione
  //     throw new Exception("I punti devono essere un numero");
  //   }else{
  //     // logica calcol punti
  //     $newPoints = $this->points + $_points*3;
  //     return $newPoints;
  //   }
    
  // }

  // public function setSeniority($_seniority){
  //   $this->seniority = $_seniority;
  //   $this->setDiscount();
  // }

  // private function setDiscount()
  // {
  //   if ($this->age > 65) {
  //       $this->discount = 40;
  //   }elseif($this->seniority > 20){
  //       $this->discount = 30;
  //   }elseif($this->seniority > 15){
  //       $this->discount = 20;
  //   }elseif($this->seniority > 5){
  //       $this->discount = 10;
  //   }
   }
 



?>