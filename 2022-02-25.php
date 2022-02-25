<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        // trying regex
        // replaceing stuff preg_replace() does not change the string
        // it self.
        //
        // regular expressions are intersting to use
        // /[something]/ can´t be used to replace things (as far as i know please correct :) )
        //
        // if your string contains / like in the regex  you have to use # or ~ instead of /

        $coolString = "hello my freind, would u like to see something cool";

        function changeString($str){
          countThings($str);

          $pattern = "/s/i";
          echo preg_replace($pattern, "u", $str);
          echo "</br>";
          echo $str;
          echo "</br>";

          $str = "hello // here is something different //-/";
          $pattern = "#/-/#i";
          echo preg_replace($pattern, "hi", $str);

        }

        function countThings($str){
          $pattern = "/cool/i";
          echo preg_match_all($pattern, $str);
          echo "</br>";

          $pattern = "/[elo]/";
          echo preg_match_all($pattern, $str);
          echo "</br>";
        }


        changeString($coolString);

      ?>
  </body>
</html>
