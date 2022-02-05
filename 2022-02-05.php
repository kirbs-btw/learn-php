<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        function printMultiArr(){
          //learning to use nested for loops
          //and multidimensional arrays

          //learned:
          //alway forgot the $ befor a variable
          //variables arrent global by default
          //arrays with index can´t be put in strings

          $multiArr = array(
            array("hello 1", "hello 2"),
            array("hello 3", "hello 4")
          );

          for ($i=0; $i < count($multiArr); $i++) {
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
