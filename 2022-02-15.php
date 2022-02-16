<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // object in object try
      // object quarry works like
      // $this->thing->here
      // classes in classes get easy messy


      class hobby{
        public $name;
        public $cost;

        function set_values($name, $cost){
          $this->name = $name;
          $this->cost = $cost;
        }
        function print_values(){
          echo "$this->name </br>";
          echo "$this->cost </br>";
        }
      }

      class person{
        public $name;
        public $hobby;

        function set_values($name, $hobby){
          $this->name = $name;
          $this->hobby = $hobby;
        }
        function print_values(){
          echo "$this->name </br>";

          $hobbyname = $this->hobby->name;
          echo "$hobbyname </br>";
        }
      }

      $tennis = new hobby();
      $tennis->set_values("tennis", 50);
      $tennis->print_values();

      echo "</br>";

      $tom = new person();
      $tom->set_values("tom", $tennis);
      $tom->print_values();


    ?>
  </body>
</html>
