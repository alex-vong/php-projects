
<style type="text/css">

	body {
		font-family: aller;
	}

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
		font-size: 20px;
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



 
<h1>Monster Inc. Factory [Option 1]</h1>
<?php
	function monsterInc($id, $name, $color, $age, $likes, $occupation) { 
		
		echo "<h2>" . $name . "</h2>";
		echo "<ul>";
			echo "<li> Id: " . $id . "</li>";
			echo "<li> Color: " . $color . "</li>";
			echo "<li> Age: " . $age . " monsters year old. </li>";
			echo "<li> Likes: " . $likes . "</li>";
			echo "<li> Occupation: " . $occupation . "</li>";
		echo "</ul>";
	}
	
	monsterInc(1, "James P. Sullivan", "Blue with Purple Dots", 500, "Hanging with Boo", "Former Scarer");
	monsterInc(2, "Mike Wozowski", "Green", 498, "Telling Jokes", "Former Scarer Assistant Turned Comedian");
	monsterInc(666, "Randal Boggs", "Purple", 550, "Being the Best Scarer", "Former Scarer now Criminal");
	monsterInc(2319, "George Sanderson", "Orange", 530, "Not Being Contaminated by Human Belongings", "Former Scarer Now Laugh Conductor");
	monsterInc(0, "Roz", "Hemlock Green", "Unknown" , "Always Watching", "Manager/ Head of Child Detection Agency");

?>

<h1>Monster Factory [Option 2]</h1>

<?php
	function monsterFactory($id, $name, $faveFood, $color) {
		$monster = [
			"id" => $id,
			"name" => $name,
			"faveFood" => $faveFood,
			"color" => $color,
		];

		return $monster;
	}

	$crunchy = monsterFactory(1, "Crunchy", "Peanut Butter", "red, orange, yellow");
	$crusty = monsterFactory(2, "Crusty", "Salt and Vinegar Potato Chips", "green, purple, black");
	$crunky = monsterFactory(3, "Crunky", "Pineapple Pizza", "orange, teal, lavender");
	$crubby = monsterFactory(4, "Crubby", "Vodka RedBull", "blue, violet, white");

	$monsters = [$crunchy, $crusty, $crunky, $crubby];

?>

	<?php foreach($monsters as $monster) { ?>
		<h2> <?=$monster["name"]?> </h2>
		<ul>
			<li> Id: <?=$monster["id"]?> </li>
			<li> Color: <?=$monster["color"]?> </li>
			<li> faveFood: <?=$monster["faveFood"]?> </li>
			<li> color: <?=$monster["color"]?> </li>
		</ul>
	
	<?php } ?>


	<?php

	function add($num1, $num2){
		return $num1 + $num2;
	}

	echo add(3, 3);
	// echo $newNum;



	?>







