<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //messing around with list sorting
      //first tried to do it with globals
      //but saw the array is now not variable so did it like this
      //the code isn´t efficient but i wanted to play around with functions and stuff

      //Learned:
      //globals arent always the best prev written python :)
      //array are a bit odd to echo with usable debug info

      $wordArr = array("Tom", "Sam", "Stinson");
      $numArr = array(18, 2, 7, 112);

      function sortArr($arr){
        sort($arr);
        printArray($arr);
      }

      function printArray($arr){
        for ($i=0; $i < count($arr); $i++) {
          echo $arr[$i];
          echo "</br>";
        }
      }
      sortArr($wordArr);
      echo "</br>";
      sortArr($numArr);

    ?>
  </body>
</html>
