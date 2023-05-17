<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Angel Santiago Web </title>

    <link rel="../images/shortcut icon" type="image/x-icon" href="../images/pokeball.png">

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="stylesheetExample1.css">
</head>

<body>  
<form method="post">  
Number:  
<input type="number" name="number" /><br><br>


<button name="submit" >
    <span>Example PHP</span>
    <div class="top"></div>
    <div class="left"></div>
    <div class="bottom"></div>
    <div class="right"></div>
</button>
  
</form>  
<?php
// Function to calculate the factorial of a number
function factorial($num) {
  // Base case: if the number is 0 or 1, return 1
  if ($num === 0 || $num === 1) {
    return 1;
  }

  // Recursive case: calculate the factorial by multiplying the number with the factorial of (num - 1)
  return $num * factorial($num - 1);
}

// Function to display the result in the HTML page
function displayResult() {
  // Prompt the user to enter a number
  $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

  // Call the factorial function and store the result
  $result = factorial($number);

  // Set the content type to HTML
  header('Content-Type: text/html');

  // Display the result
  echo "The factorial of " . $number . " is " . $result . ".";
}

// Call the displayResult function
displayResult();
?>

</body>  
</html>  
