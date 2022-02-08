<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // 2022-02-08 - php-log:
      // Today i tried string edits and global var
      //
      // Learned:
      // -editing text is pretty straight forward
      // -global var´s are a bit awkward to use because they miss a $ and the name
      // is defined as a str
      // -define() is only used for constants the value can´t be changed!
      // -still missing semicolons :/


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

      reverseStuff();
      replaceText();

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
