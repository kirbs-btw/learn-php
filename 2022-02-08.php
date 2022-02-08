<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //text edits
      function replaceText(){
        $text = "Hello sir this is cool!";
        $replaceWord = "this";
        $newWord = "chris";

        echo str_replace($replaceWord, $newWord, $text);
      }

      function reverseStuff(){
        $text = "some cool stuff";
        echo strrev($text);
      }

      //reverseStuff();
      //replaceText();

      //constants

      define("coolNum", 25);
      define("coolNum2", 5);

      function globalThings(){
        echo coolNum * coolNum2;
      }

      globalThings();
    ?>
  </body>
</html>
