
<?php

echo "<h2 class='student-survey'>Student Survey</h2>";

$name = 'Alex';
$ageInHumanYears = 31;
$cityResiding = 'Pasadena';
$stateResiding = 'CA';
$favoriteColor = 'blue';
$favoriteFood = 'lobster tacos';
$dogName = 'Mika';
$dogBreed = 'pitbull';
$ageInDogYears = $ageInHumanYears * 7;


echo "<p class='student'>" . "Hello, my name is " . $name . " and I am " . $ageInHumanYears . " years old. I live in " . $cityResiding . ", " . $stateResiding . ". My favorite color is " . $favoriteColor . " and I love to eat " . $favoriteFood . ". My dog's name is " . $dogName . " and she is a " . $dogBreed . ". My age in dog years is " . $ageInDogYears . " years old. Woof!" . "</p>";

?>