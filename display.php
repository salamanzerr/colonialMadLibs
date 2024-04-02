<?php
// pull words from user forms
// Check if form is submitted
// Initialize variables
$noun1 = $noun2 = $noun3 = $noun4 = $noun5 = $noun6 = $person = $object = $adjective = $pet = $battlecry = $weapon = $verb = $emotion = '';

// Function to validate input
function validateInput($input, $default) {
    // Trim whitespace from the input
    $input = trim($input);
    // Check if the input is not empty
    if (!empty($input)) {
        // If input is valid, return the sanitized value
        return htmlspecialchars($input);
    } else {
        // If input is empty, return the default value
        return $default;
    }
}

// Set default values for each input field
$defaults = array(
    'noun1' => 'musket',
    'noun2' => 'powdered wig',
    'noun3' => 'rifle',
    'noun4' => 'pistol',
    'noun5' => 'cannon',
    'noun6' => 'triangular bayonet',
    'person' => 'devil',
    'object' => 'golf ball',
    'adjective' => 'dead',
    'pet' => 'dog',
    'battleCry' => 'Tally ho lads',
    'weapon' => 'bayonet',
    'verb' => 'Bleeds',
    'emotion' => 'terrified'
);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    foreach ($_POST as $key => $value) {
        // Validate input and set default value based on $defaults array
        $$key = validateInput($value, $defaults[$key]);
    }
} else {
    // Set default values if form is not submitted
    foreach ($defaults as $key => $value) {
        $$key = $value;
    }
}

?>

<!-- start of html -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Resources/style.css">
   <title>Colonial Mad Libs</title>

   <style>

   p{
      color: black;
      font-size: 1.5em;
   }

   </style>

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

   <div class="main">

      <!-- start of PHP -->
      <?php
         // variable to hold the full story including variables; could make more if we want more options 
         $story = "Own a <strong>$noun1</strong> for home defense, since that's what the 
               founding fathers intended. Four ruffians break into my 
               house. \"What the <strong>$person</strong>?\" As I grab my <strong>$noun2</strong> and Kentucky 
               <strong>$noun3</strong>. Blow a <strong>$object</strong> sized hole through the first man, 
               he's <strong>$adjective</strong> on the spot. Draw my <strong>$noun4</strong> on the second 
               man, miss him entirely because it's smoothbore and nails the 
               neighbors <strong>$pet</strong>. I have to resort to the <strong>$noun5</strong> mounted at the 
               top of the stairs loaded with grape shot, \"<strong>$battleCry</strong>\"! 
               The grape shot shreds two men in the blast, the sound and 
               extra shrapnel set off car alarms. Fix <strong>$weapon</strong> and charge the 
               last <strong>$emotion</strong> rapscallion. He <strong>$verb</strong> waiting on the police 
               to arrive since <strong>$noun6</strong> wounds are impossible to stitch up. 
               Just as the founding fathers intended.";

         // display story on page
         echo "<p>$story</p>";
   
      ?>
   </div>

   <footer>
      &copy; Copyright 2024 Alec Manzer, Sam Zito, 
      Fernando Moran, Janine Beall, Kennedy Greene
   </footer>
</body>
</html>
