<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // looked at oop today
      //
      // learned:
      // -quite similar to oop in python
      //      --> use -> instead of a .
      // -somewhat awkward to type inner class stuff without a $
      // -the self from python = $this
      // --> quite complicated not as intuitiv as python 

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
