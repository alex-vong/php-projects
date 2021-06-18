<?php
include('head.php');
?>

<body>
  <div class="inner-column">
<header>
      <h1>The <span>__________ </span> (superlative) Madlibs&nbsp;Ever!</h1>
    </header> 

<?php

     echo "<h2 class='scary'>Home Alone</h2>";

     $pluralNounOne = 'milk';
     $verb = 'rampaging';
     $nounOne = 'banshee';
     $nounTwo = 'refrigerator door';
     $pluralNounTwo = 'sheets';
     $bodyPartOne = 'face';
     $verbTwo = 'galloping';
     $bodyPartTwo = 'legs';
     $verbThree = 'melting';
     $nounThree = 'behemoth';
     $nounFour = 'abomination';
     $bodyPartThree = 'chest';
     $adverb = 'menacingly';
     $bodyPartFour = 'soiled underwear';


     echo "<p>" . "I was home alone and scared out of my " . "<span class='madlib1'>" . $pluralNounOne . "</span>" . ". I could hear the wind " . "<span class='madlib1'>" . $verb . "</span>" . ", and off in the distance a " . "<span class='madlib1'>" . $nounOne . "</span>" . " was howling. I crossed the room, locked the " . "<span class='madlib1'>" . $nounTwo . "</span>" . ", and climbed into bed pulling the " . "<span class='madlib1'>" . $pluralNounTwo . "</span>" . " over my " . "<span class='madlib1'>" . $bodyPartOne . "</span> " . ".";

?> 

  <p>
   Then it happened. I could hear a <span class='madlib2'> <?php echo $verbTwo ?></span> up the stairs. My <span class='madlib2'> <?php echo $bodyPartTwo ?></span> started to chatter and my knees began <span class='madlib2'> <?php echo $verbThree ?></span>. The <span class='madlib2'> <?php echo $nounTwo ?></span>
   was thrust open and there was a huge <span class='madlib2'> <?php echo $nounFour ?></span> with hair all over his <span class='madlib2'> <?php echo $bodyPartThree ?></span>. 
  </p>


   <p>It was my father. 'Hi, we're home', he said <span class='madlib3'> <?= $adverb ?></span>. 'Hope you weren't
   afraid of staying home alone.' 'No', I said, lying through my <span class='madlib3'><?= $bodyPartFour ?></span>."
   </p> 
 
<?php
 include('survey.php');
 include('facts.php');
?> 