<!-- <?php

$donut = 7;

function cafe(){
	$coffee = 5;
	$bagel = 6;

	echo "<p>" . "The price of a coffe is $" . $coffee . " and the price of a bagel is $" . $bagel . "for a total of: $" . ($coffe + $bagel) . "!" . "</p>";

	echo $donut;

	}
	
	cafe();

	echo $bagel;
	echo $donut;

?>


 -->
<?php


$scope = "global";


function local1(){
	$scope = "only local to local1";
	echo $scope;
}

function local2(){
	$scope = "only local to local2";
	echo $scope;
}

echo $scope;

local1();

local2();


?>