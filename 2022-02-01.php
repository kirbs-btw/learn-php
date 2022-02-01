<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>is odd ?</title>
  </head>
  <body>
    <form class="form-group" action="isodd()" method="post">
      <input type="text" name="num" value="">
      <button type="submit" name="button">Submit</button>
    </form>


    <?php
      $numer = 0;

      function isodd(){
        $number = $_POST['num'];

        if ($number % 2 == 0) {
          echo "number is even! </br>";
        }else {
          echo "number is odd </br>";
        }
      }
     ?>

  </body>
</html>
