<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
       <?php
         class Food {                        
             private $name;
             private $price;
             
             public function show_price($price) {
                  $this->price = 250;
                  echo $this->price;
             }  
 
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
         }
         $food = new Food('potato',250);
         print_r($food);

         ?>
    </p>
     <p>
         <?php
         class Animal {                        
             private $name;
             private $height;
             private $weight;

             public function show_height($height){
              $this->height = 60;
              echo $this->height;
             }
 
             public function __construct(string $name, int $height, string $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
         } 
         $animal = new Animal('dog', 60, 5000);
         print_r($animal);
         echo '<br>';

         $food->show_price(250);
         echo '<br>';

         $animal->show_height(60);
         echo '<br>';
         ?>
     </p>
</body>
   
</html>