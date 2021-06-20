<?php

  require_once __DIR__ .'/User.php';

  class User_premium extends User{

    public function setDiscount($_age)
    {
         if ($this->age > 65) {

            $this->discount = 25;

        }elseif($this->age > 30){

          $this->discount = 15;

        }elseif($this->age <= 18){

          $this->discount = 10;
        }


    }
   }
