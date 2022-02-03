<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function printSome(){
		// just trying around 
		// don´t understand to use buttons in one script soooo...
        $buttonStart = "<button>";
        $buttonEnd = "<button/>";
        $text = "hello sir!";
        echo $buttonStart . $text . $buttonEnd;
        for ($x = 0; $x <= 10; $x++) {
          echo "HELLO </br>";
        }
      }


      printSome();

    ?>

  </body>
</html>
