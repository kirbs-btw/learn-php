<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // today i sorted an array of numbers in a primitiv way
      // i´m searching for the smallest ellement and then append it to an other
      // array and del it from the first array
      //
      // learned:
      // -for loops check the condition every time new so the quote
      // for ($i=0; $i < count($arr); $i++) {}
      // does bring some problems when deliting items of $arr in the process
      // -array_splice($arr, $index, 1); deletes the whole item and the positions change
      // -unset($arr[1]) just deletes the value of [1] but not the place
      // so the index of the other values does not change 

      $numbers = array(1, 6, 2, 8, 13 ,4, 53, 341, 23, 312, 311, 34, 45);

      function outArray($arr){
        for ($i=0; $i < count($arr); $i++) {
          echo "$arr[$i] </br>";
        }
        echo "</br>";
      }

      function sortArray($arr){
        $newArr = array();
        $len = count($arr);
        for ($i=0; $i < $len; $i++) {
          $smallest = $arr[0];
          $index = 0;
          for ($j=0; $j < count($arr); $j++) {
            if ($smallest > $arr[$j]) {
              $smallest = $arr[$j];
              $index = $j;
            }
          }
          array_push($newArr, $smallest);
          array_splice($arr, $index, 1);
        }
        outArray($newArr);
      }
      sortArray($numbers);
    ?>
  </body>
</html>
