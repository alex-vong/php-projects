<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<?php

  $array = ['monster', 'creature', 12, 'behemoth', 24];

  $george =[
     "id" => 2319,
     "name" => "George Sanderson",
     "age" => 340,
     "favoriteFood" => "Watermelons",
     "adoptionStatus" => false
  ];

  echo $array[0] . "-" . $array[1];

  echo "<p>" . "I have " . $array[2] . " " . $array[0] . "s" . "</p>";
?>



  <p id="<?=$george["id"]?>" >
   This lovable monster is name <?=$george['name']?> and he is <?=$george['age']?> years young!
   <?=$george["name"]?> absolutely loves to eat <?=$george["favoriteFood"]?>!
  </p>


</body>
</html>
