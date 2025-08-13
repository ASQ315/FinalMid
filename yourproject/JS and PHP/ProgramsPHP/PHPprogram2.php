<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Angel Santiago Web</title>
    <link rel="shortcut icon" href="../images/pokeball.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Ubuntu:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../stylesheetExample2.css" />
</head>
<body>
    <h1>
    Pokemon
  </h1>
  <section>
         <div class="img-wrapper">
          <img src="../../images/minun.webp">
          <strong>Electric</strong>
          </div>

    <article>

      <h2>Angel Santiago Quiñones <br> JS and PHP Programs</h2>
  
  
      <h3>Second Example that calculate the factorial of a number using PHP.</h3>
      
      <h3>Enter the number that you want to calculate <br> the factorial number you like to search!</h3>
  
  
  
    </div>
</article>
</section>
  
<div id="ExampleJS">
<form method="post">
    <label for="number">Number:</label>
    <input type="number" name="number" min="0" required /><br />
    <button name="submit" type="submit">
        <span>Example PHP</span>
        <div class="top"></div>
        <div class="left"></div>
        <div class="bottom"></div>
        <div class="right"></div>
    </button>
</form>

<?php
function factorial($num) {
    if ($num === 0 || $num === 1) {
        return 1;
    }
    return $num * factorial($num - 1);
}

if (isset($_POST['submit'])) {
    $number = intval($_POST['number']);
    if ($number < 0) {
        echo "<p>Please enter a non-negative number.</p>";
    } else {
        $result = factorial($number);
        echo "<p>The factorial of $number is $result.</p>";
    }
}
?>
</div>
</body>
</html>
