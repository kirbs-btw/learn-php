<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // today i looked at switch cases ! :)
      //
      //

      function example(){
        $num = 1;
        for ($i=0; $i < 10; $i++) {
          switch ($num) {
            case 1:
              $num = 2;
              break;
            case 2:
              $num = 3;
              break;

            default:
              $num = 1;
              break;
          }
          echo "Num is $num </br>";
        }



      }

      example();

    ?>
  </body>
</html>
