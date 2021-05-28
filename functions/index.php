
<style type="text/css">

	p {
		font-size: 20px;
		line-height: 1.5;
	}
	
	span {
		font-weight: 900;
		text-transform: uppercase;
		color: green;
	}

	li {
		list-style: none;
	}
</style>


<h1>MadLib Generator</h1>
<?php

function madlib($noun1, $noun2, $adjective, $noun3) { 

	echo "<p>" . "On the first day of Christmas, my true love gave to me, a/an " . "<span>" . $noun1 . "</span>" . " in a/an " ."<span>" .  $noun2 ."</span>" .  " tree. On the second day of Christmas, my true love gave to me, two " . "<span>" .  $adjective . "</span>" .  " doves and a/an " . "<span>" .  $noun3 . "</span>" .  " in a pear tree." . "</p>";

 };
	
madlib("dog", "hurricane", "adolescent", "factorye");
madlib("car", "spagetti", "scraggily", "candle");
madlib("slinky", "Obama", "Finnish", "donut");

 ?>



 
<h1>Monster Inc. Factory</h1>
<?php
	function monsterFactory($id, $name, $color, $age, $likes, $occupation) { 
		
		echo "<h2>" . $name . "</h2>";
		echo "<ul>";
			echo "<li> Id: " . $id . "</li>";
			echo "<li> Color: " . $color . "</li>";
			echo "<li> Age: " . $age . " monsters year old. </li>";
			echo "<li> Likes: " . $likes . "</li>";
			echo "<li> Occupation: " . $occupation . "</li>";
		echo "</ul>";
	}
	
	monsterFactory(1, "James P. Sullivan", "Blue with Purple Dots", 500, "Hanging with Boo", "Former Scarer");
	monsterFactory(2, "Mike Wozowski", "Green", 498, "Telling Jokes", "Former Scarer Assistant Turned Comedian");
	monsterFactory(666, "Randal Boggs", "Purple", 550, "Being the Best Scarer", "Former Scarer now Criminal");
	monsterFactory(2319, "George Sanderson", "Orange", 530, "Not Being Contaminated by Human Belongings", "Former Scarer Now Laugh Conductor");
	monsterFactory(0, "Roz", "Hemlock Green", "Unknown" , "Always Watching", "Manager/ Head of Child Detection Agency");

?>


