<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


        function printMultiArr(){
          $multiArr = array(
            array("hallo 1", "hallo 2"),
            array("hallo 3", "hallo 4")
          );
          //echo count($multiArr);

          for ($i=0; $i < count($multiArr); $i++) {
            //echo "hi";
            for ($j=0; $j < count($multiArr[$i]); $j++) {
                echo $multiArr[$i][$j] . " ";
            }
            echo "</br>";
          }
        }
        printMultiArr();
     ?>
  </body>
</html>
