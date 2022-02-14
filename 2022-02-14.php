<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    

      class person{
        public $name;
        public $age;
        public $hobby;

        function values($name, $age, $hobby){
          $this->name = $name;
          $this->age = $age;
          $this->hobby = $hobby;
        }
        function printAll(){
          echo "$this->name </br>";
          echo "$this->age </br>";
          echo "$this->hobby </br>";
        }
      }

      $tim = new person();
      $tim->values("Tim", 27, "Ping Pong");
      $tim->printAll();
    ?>
  </body>
</html>
