<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // constructor and destructor
    //
    // costructor == __init__ in py
    // destruct -> to sure what a real use case is by now -> to be investigated

    class items{
      public $type;
      public $amount;
      public $cost;

      function __construct($type, $amount, $cost){
        $this->type = $type;
        $this->amount = $amount;
        $this->cost = $cost;
      }

      function dump(){
        echo "$this->type </br>";
        echo "$this->amount </br>";
        echo "$this->cost </br>";
      }

      function __destruct(){
        echo "i´m done :)";
      }
    }

    $apple = new items("apple", 50, 0.99);
    $apple->dump();

    ?>
  </body>
</html>
