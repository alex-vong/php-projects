
<?php

echo "<h2 class='php-facts'>PH-Phacts</h2>";

$string = "Hi, I am a string of letters forming a sentence";
$string2 = "and I am concatenating with another string";
$number = 526600;
$stringNumber = "526,600";
?>

<p>This is a string: <span>"<?php echo $string ?>"</span>. </p>
<p>This is a number: <span><?php echo $number ?></span>. </p>
<p>This is a number inside quotations which make it a string and not a number: <span>"<?php echo $stringNumber ?>"</span>. </p>
<p>This is what happens when you concatenate two strings together: <span>"<?=$string . $string2 ?>"</span>.</p>
<p>You can also concatenate numbers together like this: (54345 + 982736 - 76263) x 5 = <span><?php echo ((54345 + 982736 - 76263)*5)?></span> </p>
<p>If you try and concatenate a string and a number you get: <span>"<?php echo $string . $number?>"</span>, which I think forms a string? </p>


</div>

</body>

</html>