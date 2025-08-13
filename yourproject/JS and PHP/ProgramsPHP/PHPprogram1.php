<!DOCTYPE html>
<html lang="en">
<head>
    <title>Angel Santiago Web</title>
    <link rel="shortcut icon" href="../images/pokeball.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../stylesheetExample1.css">
</head>
<body>
      <h1>
    Pokemon
  </h1>
  <section>
         <div class="img-wrapper">
          <img src="../../images/plusle.webp">
          <strong> Electric </strong>
          </div>

    <article>

      <h2>Angel Santiago Quiñones <br> JS and PHP Programs</h2>
  
  
      <h3>Here you can find the simple math equation using only code of PHP.</h3>

  
  
    </div>
</article>
</section>
<div id="ExampleJS">
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="number1" required />

        <label for="num2">Number 2:</label>
        <input type="number" name="number2" required /><br>
        
        <button name="submit" type="submit">
            <span>Example PHP</span>
            <div class="top"></div>
            <div class="left"></div>
            <div class="bottom"></div>
            <div class="right"></div>
        </button>
    </form>

    <?php  
    if(isset($_POST['submit'])) {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  

        $sum =  $number1 + $number2;
        $rest = $number1 - $number2;
        $mult = $number1 * $number2;
        
        // Handle division by zero safely
        if ($number2 != 0) {
            $div = $number1 / $number2;
        } else {
            $div = "undefined (division by zero)";
        }
    
        echo "<p>The addition of $number1 and $number2 is: $sum<br></p>";
        echo "<p>The subtraction of $number1 and $number2 is: $rest<br></p>";
        echo "<p>The multiplication of $number1 and $number2 is: $mult<br></p>";
        echo "<p>The division of $number1 and $number2 is: $div<br></p>"; 
    
    }  
    ?>
</div>
</body>
</html>
