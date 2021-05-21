<?php
  include ('head.php');
?>

<body>
  <?php
    include ('nav-bar.php');
  ?>

  <?php

      $codey = [
        "id" => 8,
        "name" => "Codey",
        "favoriteFood" => "Mountain Dew Code Red",
        "age" => 7,
        "adopted" => true,
        "portrait" => "https://peprojects.dev/alpha-1/alexvong/portraits/codey.jpg",
      ];

      $lima = [
        "id" => 24,
        "name" => "Lima Bean",
        "favoriteFood" => "Pistachio Ice Cream",
        "age" => 4,
        "adopted" => false,
         "portrait" => "https://peprojects.dev/alpha-1/alexvong/portraits/limabean.jpg",
      ];

      $reads = [
        "id" => 9,
        "name" => "Miss Reads-A-Lot",
        "favoriteFood" => "Alphabet Soup",
        "age" => 9,
        "adopted" => true,
         "portrait" => "https://peprojects.dev/alpha-1/alexvong/portraits/miss-reads-a-lot.jpg",
      ];

      $fragoo = [
        "id" => 87,
        "name" => "Fragoo",
        "favoriteFood" => "Fish tacos",
        "age" => 8,
        "adopted" => false,
         "portrait" => "https://peprojects.dev/alpha-1/alexvong/portraits/fragoo.jpg",
      ];

      $bananas = [
        "id" => 34,
        "name" => "Mr. Bananas",
        "favoriteFood" => "Watermelons",
        "age" => 10,
        "adopted" => false,
         "portrait" => "https://peprojects.dev/alpha-1/alexvong/portraits/mr-banana.jpg",
      ];

      $origina = [
        "id" => 30,
        "name" => "Origina",
        "favoriteFood" => "Chili Cheese Fries",
        "age" => 6,
        "adopted" => true,
         "portrait" => "https://peprojects.dev/alpha-1/alexvong/portraits/orangina.jpg",
      ];

      $shadow = [
        "id" => 12,
        "name" => "Shadow",
        "favoriteFood" => "Orange Soda",
        "age" => 5,
        "adopted" => false,
         "portrait" => "https://peprojects.dev/alpha-1/alexvong/portraits/shadow.jpg",
      ];

    $monsters = [$codey, $lima, $reads, $fragoo, $shadow, $bananas, $origina];

    echo "<div class='inner-column'>";
    echo "<ol class='monsters'>";

     foreach ($monsters as $monster) {
        $id = $monster["id"];
        $name = $monster["name"];
        $favoriteFood = $monster["favoriteFood"];
        $age = $monster["age"];
        $adopted = $monster["adopted"];
        $portrait = $monster["portrait"];
        $story = "Hi, my name is " . $name . "! I am " . $age . " years old and my favorite food is " . $favoriteFood . "!";

        if ($adopted) {
          $availability = "<span class='adopted'> Adopted!</span>";
          $status = " " . $name . " has found a loving home!";
        } else {
          $availability = "<span class='available'> Available!</span>";
          $status = " " . $name . " is still looking for loving parents like you!";
        };


        echo "<li class='monster'>";
          echo
            "<monster-card id='" . $id . "'>" .
                "<p class='status'>" . "Adoption Status: " . $availability . "</p>" .
                "<img class='portrait' src='$portrait'>" .
                "<h2 class='name'>" . $name . "</h2>" .
                "<p class='story'>" . $story . "</p>" .
                "<p>" . $status . "</p>" .
            "</monster-card>";
        echo "</li>";
     }

    echo "</ol>";
    echo "</div>";
  ?>

</body>
</html>
