<?php
 require_once __DIR__. '/Extension.php';
  class User {

    use Extension;

    public function __construct($_name, $_surname, $_age, $_email, $_addres ){
      $this->name = $_name;
      $this->surname = $_surname;
      $this->age = $_age;
      $this->setEmail($_email);
      $this->addres = $_addres;
       $this->setDiscount($_age);
    }
    public function getInfo()
    {
      return "nome: ".$this->name. "<br> cognome: ".$this->surname."<br> age: ".$this->age. "<br> email: ".$this->email . "<br>addres: ".$this->addres  ;
    }
      public function getDiscount()
    {
        return $this->discount;
    }
      public function controlEmail($_email){
        if(!strpos($_email, "@") || !strpos($_email, ".")){
           throw new Exception('Email non valida! in questo caso di Andrea');
        }else{
          $this->email = $_email;
        }
      }
      public function setEmail($_email){
        try{//funziona di controllo
          $this->controlEmail($_email);
        }catch(Exception $e){//per far stampare solo il mass
          //prassi 
          echo $e->getMessage();
        }


      }



    







    public function setAge($_age)
    {
        $this->age = $_age;
         $this->setDiscount();

    }
    public function setDiscount($_age)
    {
         if ($this->age > 65) {

            $this->discount = 20;

        }elseif($this->age > 30){

          $this->discount = 10;

        }elseif($this->age <= 18){

          $this->discount = 5;
        }


    }


}

?>