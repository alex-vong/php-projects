
<?php include('head.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>

<body>


  <?php

   include('nav-bar.php');
   include('monster-data.php');
  

      
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
                "<p class='status'>" . "Status: " . $availability . "</p>" .
                "<picture>" . "<img class='portrait' src='$portrait'>" . "</picture>" .
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
