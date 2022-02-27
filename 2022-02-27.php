<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // json encoding and decoding


      $items = array("Apple" =>12, "Handy"=>500, "Wood"=>2.5);
      $itemsJ = json_encode($items);

      echo $itemsJ;
      echo "</br>";
      echo var_dump(json_decode($itemsJ, true));
      echo "</br>";
      echo json_decode($itemsJ)->Apple;

    ?>
  </body>
</html>
