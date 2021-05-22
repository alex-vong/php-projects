
<?php include('head.php');?>

<body>

<header class="nav-bar">
  <div class="inner-column">
    <picture>
      <?php include('svg.php');?>
    </picture>
    <h1 class="header big-text">Monster Adoption Agency</h1>
  </div>
</header>

  <?php

   // include('nav-bar.php');
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
