
<html>

<head>
    <title>Angel Santiago Web </title>

    <link rel="../images/shortcut icon" type="image/x-icon" href="../images/pokeball.png">

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../stylesheetExample3.css">
</head>

<body>
    <h1>
    Pokemon
  </h1>
  <section>
         <div class="img-wrapper">
          <img src="../../images/Cinderace.webp">
          <strong>Fire</strong>
          </div>

    <article>

      <h2>Angel Santiago Quiñones <br> JS and PHP Programs</h2>
  
  
      <h3>Third Example calculate the temperature in <br> 
      Celsius to Farenheight or Fahrenheit to Celsius <br> 
      using PHP.</h3>

  
  
    </div>
</article>
</section>
<div id="ExampleJS">
    <form method="post">
        <label for="temperature">Enter the temperature:</label>
        <input type="text" name="temperaturePHP" /><br>

        <label for="unit">Enter the unit (C or F):</label>
        <input type="text" name="unitPHP" />
        <br>

  <button name="submit" >
    <span>Example PHP</span>
    <div class="top"></div>
    <div class="left"></div>
    <div class="bottom"></div>
    <div class="right"></div>
  </button>
        
    </form>
            <?php
            // Function to convert Celsius to Fahrenheit
            function celsiusToFahrenheit($celsius) {
              $tempFar = ($celsius * 9/5) + 32;

              echo "<p>" .$celsius. "C is equal to " .$tempFar. "F</p>";
            }

            // Function to convert Fahrenheit to Celsius
            function fahrenheitToCelsius($fahrenheit) {
              $tempCel = ($fahrenheit - 32) * 5/9;


              echo "<p>" .$fahrenheit. "F is equal to " .$tempCel. "C</p>";
            }

            // Handle the temperature conversion
            if(isset($_POST['submit'])) {
              // Get the temperature and unit from the form
              $temperaturePHP = floatval($_POST["temperaturePHP"]);
              $unitPHP = $_POST["unitPHP"];

              $resultPHP = "";

              // Check the unit and perform the conversion
              if ($unitPHP === "C") {
                // Convert Celsius to Fahrenheit
                $resultPHP = celsiusToFahrenheit($temperaturePHP);
              } elseif ($unitPHP === "F") {
                // Convert Fahrenheit to Celsius
                $resultPHP = fahrenheitToCelsius($temperaturePHP);
              } else {
                $resultPHP = "<p>Invalid unit entered. Please enter 'C' for Celsius or 'F' for Fahrenheit.</p>";
              }

              // Output the result
              echo $resultPHP;
            }
?>
</div>
</body>

</html>