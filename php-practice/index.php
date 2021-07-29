<?php 
	$userName = $_GET['age'];

	echo $userName;


 ?>







<?php include 'head.php'?>


<h4>Create 3 normal arrays</h4>

<?php

$groceryList = ['apples', 'oranges', 'bananas', 'diet coke'];

$toDoToday = ['daily standup', 'associative arrays lesson', 'php practice', 'url querying'];

$disneyRides = ['space mountain', 'haunted mansion', 'expedition everest', 'rocking rollercoaster'];

var_dump($groceryList);
echo '<br><br>';
var_dump($toDoToday);
echo '<br><br>';
var_dump($disneyRides);

?>

<h4>echo 2 different items from the normal array</h4>

<div><?=$groceryList[0]?></div>
<div><?=$disneyRides[2]?></div>


<h4>Change 2 items in the normal array</h4>

<p>Before with 'apple' at 0</p>
<?php var_dump($groceryList); ?>
<p>After with 'kiwi' as 0</p>
<?php $groceryList[0] = 'kiwis'; 
var_dump($groceryList);
?>

<p>Before with 'rockin rollercoaster' at 3</p>
<?php var_dump($disneyRides); ?>
<p>After with 'pirates of the carribean' at 3</p>
<?php $disneyRides[3] = 'Pirates of the Carribean'; 
var_dump($disneyRides);
?>


<h4>Add some items to normal array</h4>

<p>Adding 'Cheese' to end of array</p>
<?php 
array_push($groceryList, 'cheese'); 
var_dump($groceryList);
?>


<p>Adding 'Big Thunder Railroad' to end of array</p>
<?php 
array_push($groceryList, 'Big Thunder Railroad'); 
var_dump($groceryList);
?>



<h4>Create 3 associative arrays</h4>

<?php 

$toyStory = [
	'filmName' => 'Toy Story',
	'year' => 1995,
	'director' => 'John Lasseter',
	'genre' => 'kids',
	'gross' => 3630071400
]; 

$dieHard = [
	'filmName' => 'Die Hard with a Vengeance',
	'year' => 1995,
	'director' => 'John McTiernan',
	'genre' => 'action-thriller',
	'gross' => 366101666
]; 

$apollo13 = [
	'filmName' => 'Apollo 13',
	'year' => 1995,
	'director' => 'Ron Howard',
	'genre' => 'action',
	'gross' => 355237933
];


$filmsOf1995 = [$toyStory, $dieHard, $apollo13];





$filmsIn1995 = [

	$toyStory = [
	'filmName' => 'Toy Story',
	'year' => 1995,
	'director' => 'John Lasseter',
	'genre' => 'kids',
	'gross' => 3630071400
	],

$dieHard = [
	'filmName' => 'Die Hard with a Vengeance',
	'year' => 1995,
	'director' => 'John McTiernan',
	'genre' => 'action-thriller',
	'gross' => 366101666
	],

$apollo13 = [
	'filmName' => 'Apollo 13',
	'year' => 1995,
	'director' => 'Ron Howard',
	'genre' => 'action',
	'gross' => 355237933
	]

];
// var_dump($filmsIn1995[0]);
$filmsIn1995[0]['studio'] = 'pixar';
var_dump($filmsIn1995[0]);




// var_dump($toyStory);
// echo '<br><br>';
// var_dump($dieHard);
// echo '<br><br>';
// var_dump($apollo13);

 ?>





<!-- 
<h4>Loop throught associative array</h4>


<ul>List all film titles
 <?php 
 foreach ($filmsIn1995 as $film) { ?>
 	
 	<li><?=$film['filmName']?></li>
 
 <?php } ?>

 </ul>



 <h4>Echo 2 different items from associative array</h4>

<div><?=$toyStory['filmName']?></div>
<div><?=$apollo13['director']?></div>



<h4>Remove 3 keys from associaitive Array</h4>

<p>Remove 'gross' from Apollo 13</p>
<?php unset($apollo13['gross']);
var_dump($apollo13)?>


<p>Remove 'director' from Die Hard</p>
<?php unset($dieHard['director']);
var_dump($dieHard)?>

<h4>Add 2 keys to associative array:</h4>

<p>Add 'studio' to Toy Story</p>
<?php $toyStory['studio'] = 'Pixar';
var_dump($toyStory)?>

<p>Add 'Starring' to Die Hard</p>
<?php $dieHard['starring'] = 'Bruce Willis';
var_dump($dieHard)?>
















 -->