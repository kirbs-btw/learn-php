<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // exeptions !
      // exeptions should be paired with try and catch statements
      // exeptions have many information to it like
      // getCode()
      // getMessage()
      // getFile()
      // getLine()

      function divide($dividend, $divisor){
        if ($divisor == 0) {
          // exeption is trown bc you can´t divide by zero -> error is detected by the try:catch
          throw new \Exception("Error Processing Request", 1);

        }
        return $dividend / $divisor;
      }

      function executeStuff(){
        echo divide(12, 6);
        echo "</br>";

        try {
          echo divide(12, 0);
        } catch (Exception $e) {
          // $code = $e->getCode(); -> just here as note 
          $message = $e->getMessage();
          $file = $e->getFile();
          $line = $e->getLine();

          echo "exception on line $line in $file thrown error is: $message";
        }
      }
      executeStuff();

    ?>
  </body>
</html>
