<!-- not sure if this block will be needed or not anymore -->
<?php
// pull words from user forms
   $noun1 = $_POST['noun1'];
   $noun2 = $_POST['noun2'];
   $noun3 = $_POST['noun3'];
   $noun4 = $_POST['noun4'];
   $noun5 = $_POST['noun5'];
   $noun6 = $_POST['noun6'];
   $person = $_POST['person'];
   $object = $_POST['object'];
   $adjectivee = $_POST['adjective'];
   $pet = $_POST['pet'];
   $battlecry = $_POST['battlecry'];
   $weapon = $_POST['weapon'];
   $verb = $_POST['verb'];
   $emotion = $_POST['emotion'];





?>

<!-- start of html -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Resources/style.css">
   <title>Colonial Mad Libs</title>
</head>

<body>
   <audio autoplay>
      <source src="./Resources/YankeeDoodle.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
   </audio>

   <div id="flag">
      <img src="./Resources/americanFlag.gif" alt="flag">
   </div>

   <h2>The Story</h2>
   
    <!-- start of PHP -->
    <?php

      // pulling words from HTML forms
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $noun = $_POST['noun1'];

      // variable to hold the full story including variables; could make more if we want more options 
      $story = "Own a $noun1 for home defense, since that's what the founding fathers intended...";

      // display story on page
      echo "<p>Story: $story</p>";
      } 
   
      // make sure the page won't try to process form data until it is submitted
      else {
        echo "<p>No data submitted</p>";
      }
      ?>

      <footer>&copy; Copyright 2024 Alec Manzer, Sam Zito, Fernando Moran, Janine Beall, Kennedy Greene</footer>
</body>
</html>

  
