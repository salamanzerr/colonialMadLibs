<!-- not sure if this block will be needed or not anymore -->
<?php
// pull words from user forms
   $noun1 = $_POST['noun1'];
?>

<!-- start of html -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Colonial Mad Libs</title>
  </head>

  <body>
    <h1>The Story</h1>
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

  
