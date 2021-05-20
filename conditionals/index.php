<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="PHP-ractice" />
    <meta name="og:description" content="PHP Conditional and Boolean and Stuff" />
    <meta property="og:image" content="[[ Meta-Image Goes Here]]" />
    <meta property="og:title" content="PH-Practice!" />
    <title>Conditional Practice </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section class="inner-column">

    <?php

        echo "<h1>PHPractice</h1>";

        echo "<h2> Age Requirement</h2>";
        echo "<p>Set a variable to a certain age and made a 'if' conditional that will see if variable is equal to or greater than 21, if it is then it will output 'Have a beer because you are AGE or over! If the condition is not met then it will output 'Have some chocolate milk because you are AGE years old!' </p>";

        $age = 21;
        $weather = 'sunny';

        if ($age >= 21) {
            echo "<span class='conditional'>" . "Output 1:" . "</span>" . "Have a beer because you are " . "<span class='conditional'>" . $age . "</span>" . " or over!";
        } else {
            echo "<span class='conditional'>" . "Output 2:" . "</span>" . "Have some chocolate milk because you are " . "<span class='conditional'>" . $age . "</span>" . " years old!";
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
        }
        if ($day === 'Saturday') {
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

    ?>

        <h2>About Alex</h2>

        <p>Hello, my name is <span class='conditional'><?= $name ?> </span> and my last name is <span class='conditional'><?= $lastName ?></span>.

        My full name is <span class='conditional'><?= $fullName ?> </span>.

        I am an aspiring <span class='conditional'> <?= $occupation ?> </span> who currently lives in <span class='conditional'> <?= $city?></span>, <span class='conditional'> <?= $state ?> </span>.

        I have <span class='conditional'><?= $amountOfSiblings ?> </span> siblings and a dog named <span class='conditional'> <?= $dogName ?> </span>.

        Today is <span class='conditional'> <?= $day ?> </span> which means <span class='conditional'><?= $dayMeaning ?></span>!</p>

        <h2>My Shopping List</h2>
        <h3>Array:</h3>
        <p>shoppingList = ['eggs', 'milk', 'cheese', 'butter', 'chicken']</p>

        <?php
            $shoppingList = ['eggs', 'milk', 'cheese', 'butter', 'chicken'];

        ?>
        <ol>
            <li>Item 0: <?=$shoppingList[0]?></li>
            <li>Item 1: <?=$shoppingList[1]?></li>
            <li>Item 2: <?=$shoppingList[2]?></li>
            <li>Item 3: <?=$shoppingList[3]?></li>
            <li>Item 4: <?=$shoppingList[4]?></li>
        </ol>


        <h2 class="lakers"> 2009 Los Angeles Lakers</h2>
        <h3>Object/Associative Array</h3>
        <p class="line-up">lineUp = ["pg" => "Derek Fisher", "sg" => "Kobe Bryant", "sf" => "Trevor Ariza", "pf" => "Lamar Odom", "c" => "Pau Gasol"]
        </p>

        <?php
            $lineUp = [
                "pg" => "Derek Fisher",
                "sg" => "Kobe Bryant",
                "sf" => "Trevor Ariza",
                "pf" => "Lamar Odom",
                "c" => "Pau Gasol"
            ];
        ?>

        <div>
            <ul>
                <li>Point Guard: <span class="starting5"><?=$lineUp['pg']?></span></li>
                <li>Shooting Guard: <span class="starting5"><?=$lineUp['sg']?></span></li>
                <li>Small Forward: <span class="starting5"><?=$lineUp['sf']?></span></li>
                <li>Power Forward: <span class="starting5"><?=$lineUp['pf']?></span></li>
                <li>Center: <span class="starting5"><?=$lineUp['c']?></span></li>
            </ul>
        </div>


    <h2>Pokedex</h2>


    <?php
    $pokedex = [
        "01" => "Bulbasaur",
        "02" => "Ivysaur",
        "03" => "Venusaur",
        "04" => "Charmander",
        "05" => "Charmeleon",
        "06" => "Charizard",
        "07" => "Squirtle",
        "08" => "Wortortle",
        "09" => "Blastoise"
    ];

    echo $pokedex['Bulbasaur'];

    foreach ($pokedex as $pokemon) {
        echo "<li>" . $pokemon . "</li>";
    }
    ?>

    <?php foreach($pokedex as $pokemon) { ?>
        <li><?=$pokemon?> </li>
    <?php
    }
    ?>

    <h2>Currency Convertor</h2>
    <p>Planning on taking a trip overseas? Well use this nifty currency conversion chart to help convert your USD to British Pounds, Chinese Yuan, Japanese Yen, and Euros!</p>

    <?php
        $usd = 100;
        $usdToBritishPound = $usd * 0.71;
        $usdToJapYen = $usd * 109;
        $usdToChineseYuan = $usd * 6.44;
        $usdToEuro = $usd * 1.22;
    ?>

    <p><span class='currency'> $<?=$usd?></span> is equal to:</p>
    <p><span class='currency'> &#163;<?= $usdToBritishPound?></span> British Pounds. Bloody aye!</p>
    <p><span class='currency'> &#165;<?=$usdToJapYen?></span> Japanese Yen. Sugoi!</p>
    <p><span class='currency'> &#165;<?=$usdToChineseYuan?></span> Chinese Yuan. Wahhhh!</p>
    <p>	<span class='currency'> &euro;<?=$usdToEuro?></span> Euros. Sacre Bleu!</p>

    <h2>Athlete Income Calculator 2020</h2>
    <p>Ever wonder how much Californian Athletes get taxed annual and what their net annual salary is? </p>

    <?php
        $salary = 37500000;
        $fedIncomeTax = $salary * (37/100);
        $stateTaxBill = 5000000;
        $jockBill = 945000;

        $salaryAfterTax = $salary - $fedIncomeTax - $stateTaxBill - $jockBill;


    ?>

    <p class="salary">
        If a player makes <span class='income'>$<?php echo $english_format_number = number_format($salary)?></span> annually they will pay:
    </p>

    <p class="salary">
        Federal Income Tax: <span class='tax'>$<?php echo $english_format_number = number_format($fedIncomeTax)?></span>
    </p>

    <p class="salary">
        State Bill Tax: <span class='tax'>$<?php echo $english_format_number = number_format($stateTaxBill)?></span>
    </p>

    <p class="salary">
        Jock Tax: <span class='tax'>$<?php echo $english_format_number = number_format($jockBill)?></span>
    </p>

    <p class="salary">
        Annual Net Salary: <span class='income'>$<?php echo $english_format_number = number_format($salaryAfterTax)?></span>
    </p>



    </section>
</body>

</html>