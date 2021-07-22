<?php

include'head.php';

echo "<strong>adding 2 numbers ( 8 + 10 ):</strong>";
echo "<br>";
echo 8 + 10;
echo "<br>";
echo "<br>";

echo '<strong>adding 2 strings ( "8" + "10" ):</strong>';
echo "<br>";
echo "8" + "10";
echo "<br>";
echo "<br>";

echo '<strong>adding 1 string and 1 number ("eight" + 10 ):</strong>';
echo "<br>";
echo "eight" + 10;
echo "<br>";
echo "<br>";

echo '<strong>adding 1 string that is a number inside and 1 number ("8" + 10 ): </strong>';
echo "<br>";
echo "8" + 10;
echo "<br>";
echo "<br>";

echo "<strong>concat 2 numbers ( 8 . 10 ):</strong>";
echo "<br>";
echo 8 . 10;
echo "<br>";
echo "<br>";

echo '<strong>adding 1 string and 1 number ("8" . 10 ):</strong>';
echo "<br>";
echo "8" . 10;
echo "<br>";
echo "<br>";

echo "<strong>mult. 2 numbers ( 10 * 10 ):</strong>";
echo "<br>";
echo 10 * 10;
echo "<br>";
echo "<br>";

echo "<strong>sub. 2 numbers ( 8 - 19 ):</strong>";
echo "<br>";
echo 8 - 19;
echo "<br>";
echo "<br>";

echo "<strong>divide 2 numbers ( 100 /5 ):</strong>";
echo "<br>";
echo 100 /  5;
echo "<br>";
echo "<br>";


echo "<strong>concat 2 strings:</strong>";
echo "<br>";
echo "Alex" . " " . " Vong";
echo "<br>";
echo "<br>";

echo "<strong>concat number and string:</strong>";
echo "<br>";
echo "Alex" . " " . "32";
echo "<br>";
echo "<br>";

$first = 'Alex';
$last = 'Vong';

$guest = 5;
$people = $guest + 1;
$berriesPerBox = 30;
$pricePerBox = 10.99;
$totalPriceOfBerries = $people * $pricePerBox;

$total = $guest * $berries;


$holiday = 'Christmas';
$currentDay = date("m/d/Y");
$currentDayInNumber = 202;
$christmas = "12/25/2021";
$christmasDayInNumber = 359;
$countdown = $christmasDayInNumber - $currentDayInNumber;
$present = 'software developer job';




?>

<h3>Create a variable and assign a string to it and print it</h3>
<p>Hello my name is <?=$first?> <?=$last?></p>

<h3>Ivy's Guest wants Berries!</h3>
<p>Ivy is having <strong><?=$guest?></strong> guest over at her lovely home for brunch, which including herself will be a total <strong><?=$people?></strong> people. She decides to serve berries to her guest so shes goes to the local farmers market. Being the generous host that she is she buys each guest an entire box of berries. Each box has <strong><?=$berriesPerBox?></strong>lbs of berries at <strong>$<?=$pricePerBox?></strong> per box. In total she spent <strong>$<?=$totalPriceOfBerries?></strong> for <strong><?=$people?></strong> boxes of berries. How <strong>BERRY</strong> generous of her.</p>

<h3>Use at least 5 variables, one math equation, echo a message that combines the outcome</h3>

<p>My favorite holiday is <strong><?=$holiday?></strong>! Today's date is <strong><?=$currentDay?></strong> and <?=$holiday?> is on <strong><?=$christmas?></strong>. That means there are only <strong><?=$countdown?></strong> days until <?=$holiday?>. I hope that Santa will bring me a <strong><?=$present?></strong>!</p>





















