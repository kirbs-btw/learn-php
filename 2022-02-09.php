<!DOCTYPE html>
<html>
<body>

<?php
	// Today i looked at: 
    // date()
    //	learned: 
   	// Y = 2022
    // y = 22
    // m = 02
    // d = 09
    // l = Wednesday
    
	//date is case sentitive !

define("today", date("Y-m-d"));

function outDates(){
	echo date("l");
    echo "</br>";
    echo date("y");
    echo "</br>";
    echo today;
    echo "</br>";
	echo date("Y-d-m");
	
}

outDates();

?>

</body>
</html>
