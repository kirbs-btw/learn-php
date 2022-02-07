<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // messing around with math in php

    function printArray($arr){
      for ($i=0; $i < count($arr); $i++) {
        echo $arr[$i]. "</br>";
      }
    }

    function randList(){
      $arr = array();

      for ($i=0; $i < 10; $i++) {
        array_push($arr, rand(1, 100));
      }
      printArray($arr);
      return $arr;
    }

    function randPIstuff(){
      $arr = array();

      for ($i=0; $i < 10; $i++) {
        $num = round(rand(0, 10) * pi(), 5);
        // echo $num;
        array_push($arr, $num);
      }
      printArray($arr);
      return $arr;
    }

    randList();
    echo "</br>";
    randPIstuff();

    ?>
  </body>
</html>
