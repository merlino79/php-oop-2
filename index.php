<?php

  

  require_once __DIR__ .'/classes/User.php';
  require_once __DIR__ .'/classes/Product.php';
  require_once __DIR__ .'/classes/User_premium.php';

  $title = 'esercizio Ale, Isa, Andrea';//header



  //user
  $user1 = new User ('Alessandro', 'Ciancio', '41' , 'alessandro@gmail.com','via dei tulipani');
  $user2 = new User ('Isabella', 'Nita', 17, 'isabella@gmail.com','via dei fiori');
  $user3 = new User ('Andrea', 'Trento', 75, 'andreagmail.com','via dei gelsomini');

  //product

  $product1 = new Product ('notebook', 300, 'text', 'elettonica');
  $product2 = new Product ('stampo per torta', 10, 'text', 'cucina'); 
  $product3 = new Product ('carbone', 800, 'text', 'alimentari');
// var_dump($user1)
 



  



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./classes/styles/style.css">

  <title>Esercizio prova per domani</title>
</head>
<body>
  <header>

    <div class="container">

      <div class="row">
      
        <div class="col my-1 text-center">

            <h1><?php echo $title?></h1>
           
        </div>
      </div>
    </div>

  </header>
    <main>
      <div class="container">
      <div class="row">
        <div class="col">
           
          <h3><?php echo $user1->getInfo()?></h3>
                 
        </div>
        <div class="col">
          <h3><?php echo $user2->getInfo()?></h3>
           
        </div>
        <div class="col">
          <h3><?php echo $user3->getInfo()?></h3>
           
        </div>

      </div>

      <div class="container">
        <div class="row">
          <div class="col">
            <?php echo $product1->getProduct_info()?>
          </div>
          <div class="col">
            <?php echo $product2->getProduct_info()?>
          </div>
          <div class="col">
            <?php echo $product3->getProduct_info()?>
          </div>
        
        </div>
      </div>
  </main>

  
</body>
</html>