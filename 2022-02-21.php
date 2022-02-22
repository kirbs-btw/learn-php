<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // bubble sort
      // look at two items in an array and compare them
      // if the one is bigger swap them
      // nested for loops
      // array_swap(); did not work unsure why
      // learned:
      // -count() is often a bit awkward to use
      //      --> substitute by something like $arrLen = count($arr);
      // -still forgetting the ;

      $numbers = array(4, 5, 3, 2, 7, 9, 2, 3, 12, 4);

      function swapValues($arr, $a, $b){
        $valueA = $arr[$a];
        $valueB = $arr[$b];
        $arr[$a] = $valueB;
        $arr[$b] = $valueA;
        return $arr;
      }

      function bubbleSort($arr){
        $arrLen = count($arr);
        for ($i=0; $i < $arrLen; $i++) {
          for ($j=0; $j < $arrLen - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]){
              $arr = swapValues($arr, $j, ($j + 1));
            }
          }
        }
        var_dump($arr);
      }
      bubbleSort($numbers);
    ?>
  </body>
</html>
