<!DOCTYPE html>
<html>
  <body>

<?php
//fiss bass
  function main(){
    for ($i = 0; $i <= 100; $i++) {
      if (($i % 3 == 0) && ($i % 5 == 0)) {
        echo "$i fissbass </br>";
      }elseif ($i % 3 == 0){
        echo "$i bass </br>";

      } elseif ($i % 5 == 0){
        echo "$i fiss </br>";
      } else {
        echo "$i </br>";
      }
    }

  }
  main();
?>

  </body>
</html>
