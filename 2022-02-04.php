<!DOCTYPE html>
<html>
<body>

<?php

function printArray($arr){
	// print array any len     
	for ($x = 0; $x < count($arr); $x++){
    	
    	echo "$arr[$x] ";
    
    }

}

function arraysTry($arr){
	// some funny bit to understand how 
    // arrays work
	
    printArray($arr);
    

}

function arraysTry2($arr){
	$arr[4] = "not python";
	printArray($arr);
}



function execute(){
	$arr = array("hello", "friends", "me", "learning", "php");
    arraysTry($arr);
    echo "</br>";
	arraysTry2($arr);
}

execute();


?> 

</body>
</html>
