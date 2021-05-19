<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0" />
  <meta name="description"
        content="PHP-ractice" />
  <meta name="og:description"
        content="PHP Conditional and Boolean and Stuff" />
  <meta property="og:image"
        content="[[ Meta-Image Goes Here]]" />
  <meta property="og:title"
        content="PH-Practice!" />
  <title>Conditional Practice </title>
  <link rel="stylesheet"
        href="styles.css">
</head>

<body>
  <section class="inner-column"> <?php

echo "<h1>PHPractice</h1>";

echo "<h2> Age Requirement</h2>";
echo "<p>Set a variable to a certain age and made a 'if' conditional that will see if variable is equal to or greater than 21, if it is then it will output 'Have a beer because you are AGE or over! If the condition is not met then it will output 'Have some chocolate milk because you are AGE years old!' </p>";


$age = 21;
$weather = 'sunny';


if ($age >= 21) {
  echo "<span class='conditional'>" . "Output 1:" . "</span>" . "Have a beer because you are " ."<span class='conditional'>" . $age . "</span>" . " or over!";
} else {
  echo "<span class='conditional'>" . "Output 2:" . "</span>" . "Have some chocolate milk because you are " ."<span class='conditional'>" . $age . "</span>" . " years old!";
}

echo "<h2> Weather</h2>";
echo "<p>Checks to see if variable is 'raining', if so will output 'Bring and umbrella because it is RAINING' or else 'You do not need an umbrella because it is NOT raining, in fact, it is VARIABLE! </p>";

if ($weather === 'raining') {
  echo "<span class='conditional'>" . "Output 1:" . "</span>" . "Bring an umbrella because it is " . "<span class='conditional'>" . $weather . "</span>" . "!";
} else {
  echo "<span class='conditional'>" . "Output 2:" . "</span>" . "You don't need an umbrella because it is NOT raining, in fact, it is " . "<span class='conditional'>" . $weather . "</span>" . "!";
}

echo "<h2> Day of the Week</h2>";
echo "<p>Checks to see what day the variable is set to and depending on the day will output a statement about that variable day</p>";
$day = 'Tuesday';

if ($day === 'Monday') {
  echo "Boo it is " . "<span class='conditional'>" . $day . "</span>" . "!";
} else if ($day === 'Tuesday') {
  echo "It is " . "<span class='conditional'>" . $day . "</span>" . ", time for tacos!";
} else if ($day === 'Wednesday') {
  echo "It is " . "<span class='conditional'>" . $day . "</span>" . ", HUMP DAY!";
} else if ($day === 'Thursday') {
  echo "Today is " . "<span class='conditional'>" . $day . "</span>" . " / Friday jr!";
} else if ($day === 'Friday') {
  echo "It is finally " . "<span class='conditional'>" . $day . "</span>" . "! Time to party!";
} if ($day === 'Saturday') {
  echo "Today is " . "<span class='conditional'>" . $day . "</span>" . "! I love the weekend!";
} else {
  echo " " . "<span class='conditional'>" . $day . "</span>" . "'s are meant for relaxing!";
};

echo "<h2> Hungers </h2>";
echo "<p>Checks to see if HUNGRY and haveMoney is true or false and will output a statement depending on those booleans</p>";

$hungry = true;
$money = false;

if ($hungry && $money) {
  echo "<span class='conditional'>" . "Output 1:" . "</span>" . "Go buy In-N-Out!";
} else if ($hungry && !$money) {
  echo "<span class='conditional'>" . "Output 2:" . "</span>" . " You're broke so make a sandwhich at home";
} else if (!$hungry && $money) {
  echo "<span class='conditional'>" . "Output 3:" . "</span>" . "You're not even hungry, go away!";
} else {
  echo "<span class='conditional'>" . "Output 4:" . "</span>" . "Who do I look like, your Mom?";
}


$name = 'Alex';
$lastName = 'Vong';
$fullName = $name . " " . $lastName;
$occupation = 'web developer';
$city = 'Pasadena';
$state = 'CA';
$amountOfSiblings = 5;
$dogName = 'Mika';
$day = 'Wednesday';
$dayMeaning = 'Hump Day';

  ?> <h2>About Alex</h2>
    <p>Hello, my name is <span class='conditional'> <?=$name?> </span> and my last name is <span class='conditional'>
        <?=$lastName?> </span>. My full name is <span class='conditional'> <?=$fullName?> </span>. I am an aspiring
      <span class='conditional'> <?=$occupation?> </span> who currently lives in <span class='conditional'> <?=$city?>
      </span> , <span class='conditional'> <?=$state?> </span>. I have <span class='conditional'> <?=$amountOfSiblings?>
      </span> siblings and a dog named <span class='conditional'> <?=$dogName?> </span>. Today is <span
            class='conditional'> <?=$day?> </span> which means <span class='conditional'><?=$dayMeaning?></span>!</p>
  </section>
</body>

</html>