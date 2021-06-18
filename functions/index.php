
<style type="text/css">
	* {
		box-sizing: border-box;
		margin:  0;
		padding:  0;
	}
	body {
		font-family: aller;
		padding:  15px;
	}

	/*h1 {
		color: green;
	}*/

	
	span {
		font-weight: 900;
		/*text-transform: uppercase;*/
		/*color: green;*/
	}

	li {
		list-style: none;
	}

	p, li {
		font-size: 20px;
		line-height: 1.5;
		letter-spacing: 0.05rem;
	}

	h2 {
		margin-bottom: 5px;
	}

/*	li span {
		color: dodgerblue;
	}
*/
/*
 	h2 {
		color: purple;
	}*/

	.laker-wrapper {
		color:  #fff;
		display: flex;
		flex-wrap: wrap;
		/*width:  min(80%, 1200px);*/
	}

	.laker-card {
		padding:  15px;
		margin:  5px;
		border:  2px solid black;
		flex:  1;
		border-radius:  10px;


	}

	.laker-card:nth-child(odd) {
		background-color: #552583;
		text-shadow:  2.5px 2.5px 0 black;
	}

	.laker-card:nth-child(even) {
		background-color: #FDB927;
		text-shadow:  1.5px 1.5px 0 black;
	}

	.laker-card:nth-child(odd) span {
		color: #FDB927
	}

	.laker-card:nth-child(even) span {
		color: #552583;
		text-shadow:  1px 1px 0 black;
	}

</style>

<!-- 
<h1>MadLib Generator</h1>

<?php

function madlib($noun1, $noun2, $adjective, $noun3) { 
	echo "<p>" . "On the first day of Christmas, my true love gave to me, a/an " . "<span>" . $noun1 . "</span>" . " in a/an " ."<span>" .  $noun2 ."</span>" .  " tree. On the second day of Christmas, my true love gave to me, two " . "<span>" .  $adjective . "</span>" .  " doves and a/an " . "<span>" .  $noun3 . "</span>" .  " in a pear tree." . "</p>";

 };
	
madlib("dog", "hurricane", "adolescent", "factory");
madlib("car", "spagetti", "scraggily", "candle");
madlib("slinky", "Obama", "Finnish", "donut");
madlib("Costco Pizza", "Alligator", "Dead", "Drano");

?>




 
<h1>Monster Inc. Factory [Method 1]</h1>

<?php
	function monsterInc($id, $name, $color, $age, $likes, $occupation) { 
		
		echo "<h2>" . $name . "</h2>";
		echo "<ul>";
			echo "<li>" . "<span>Id</span>: " . $id . "</li>";
			echo "<li>" . "<span>Color</span>: " . $color . "</li>";
			echo "<li>" . "<span>Age</span>: " . $age . " monster years old. </li>";
			echo "<li>" . "<span>Likes</span>: " . $likes . "</li>";
			echo "<li>" . "<span>Occupation</span>: " . $occupation . "</li>";
		echo "</ul>";
	}
	
	monsterInc(1, "James P. Sullivan", "Blue with Purple Dots", 500, "Hanging with Boo", "Former Scarer");
	monsterInc(2, "Mike Wazowski", "Green", 498, "Telling Jokes", "Former Scarer Assistant Turned Comedian");
	monsterInc(666, "Randall Boggs", "Purple", 550, "Being the Best Scarer", "Former Scarer now Criminal");
	monsterInc(2319, "George Sanderson", "Orange", 530, "Not Being Contaminated by Human Belongings", "Former Scarer Now Laugh Conductor");
	monsterInc(0, "Roz", "Hemlock Green", "Unknown" , "Always Watching", "Manager/ Head of Child Detection Agency");

?>

<h1>Monster Factory [Method 2]</h1>

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

	$crunchy = monsterFactory(1, "Crunchy", "Peanut Butter", "Red fur with Orange zig-zag stripes");
	$crusty = monsterFactory(2, "Crusty", "Salt and Vinegar Potato Chips", "Green upper body and teal lower body");
	$crunky = monsterFactory(3, "Crunky", "Pineapple Pizza", "Orange chest, teal back and buttocks, violet legs");
	$crubby = monsterFactory(4, "Crubby", "Vodka RedBull", "Dodger Blue with rainbow polka dots");
	$mark = monsterFactory(24, "Mark", "Grilled Cheese Sandwhiches", "Caucasian with black hair, often wears a white tee and blue jeans. Starting to suspect he is not really a monster...");

	$monsters = [$crunchy, $crusty, $crunky, $crubby, $mark];
?>

<?php foreach($monsters as $monster) { ?>
	<h2> <?=$monster["name"]?></h2>
	<ul>
		<li>
			<span>Id:</span> <?=$monster["id"]?>
		</li>
		<li>
			<span>Name:</span> <?=$monster["name"]?>
		</li>
		<li>
			<span>Favorite Food:</span> <?=$monster["faveFood"]?>
		</li>
		<li>
			<span>Color:</span> <?=$monster["color"]?>
		</li>
	</ul>

<?php } ?>
 -->

<?php

	function lakers($start, $end, $wins, $losses, $sg, $pg, $sf, $pf, $center, $coach) {
		$starting5 =[
			'start' => $start,
			'end' => $end,
			'wins' => $wins,
			'losses' => $losses,
			'sg' => $sg,
			'pg' => $pg,
			'sf' => $sf,
			'pf' => $pf,
			'center' => $center,
			'coach' => $coach
		];

		return $starting5;
	}

	$lakers01 = lakers(2000, 2001, 56, 26, 'Derek Fisher', 'Kobe Bryant', 'Rick Fox', 'Horace Grant', 'Shaquille O\'Neal', 'Phil Jackson');
	$lakers09 = lakers(2008, 2009, 65, 17, 'Derek Fisher', 'Kobe Bryant', 'Travor Ariza', 'Lamar Odom', 'Pau Gasol', 'Phil Jackson');
	$lakers88 = lakers(1987, 1988, 62, 20, 'Magic Johnson', 'Byron Scott', 'A.C. Green', 'James Worthy', 'Kareem Abdul-Jabar', 'Pat Riley');
	$lakers20 = lakers(2019, 2020, 42, 30, 'LeBron James', 'Kentavious Caldwell-Pope', 'Danny Green', 'Anthony Davis', 'Dwight Howard', 'Frank Vogel');
	
	$lakersStarting5 =[$lakers88, $lakers01, $lakers09, $lakers20];

?>

<h2 class='lakers-header'>Lakers Championship Starting 5</h2>
<section class="laker-wrapper">
	<?php foreach ($lakersStarting5 as $lakers) { ?> 	
	 	<div class="laker-card">
			<ul>
				<li>
					<span>Season:</span> <?=$lakers['start']?> to <?=$lakers['end']?>
				</li>
					<li>
					<span>Overall Record:</span> <?=$lakers['wins']?>-<?=$lakers['losses']?> (W-L)
				</li>
				<li>
					<span>Point Guard:</span> <?=$lakers['pg']?>
				</li>
				<li>
					<span>Shooting Guard:</span> <?=$lakers['sg']?>
				</li>
				<li>
					<span>Small Forward:</span> <?=$lakers['sf']?>
				</li>
				<li>
					<span>Power Forward:</span> <?=$lakers['pf']?>
				</li>
				<li>
					<span>Center:</span> <?=$lakers['center']?>
				</li>
				<li>
					<span>Head Coach:</span> <?=$lakers['coach']?>
				</li>
			</ul>
	   </div>
	<?php } ?>
</section>










