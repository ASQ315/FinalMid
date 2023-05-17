
<html>

<head>
    <title>Angel Santiago Web </title>

    <link rel="../images/shortcut icon" type="image/x-icon" href="../images/pokeball.png">

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../stylesheetExample1.css">
</head>

<body>
    <form method="post">
        Enter the Tempeture:
        <input type="number" name="temperaturePHP" /><br><br>

        Enter the unit (C o F):
        <input type="number" name="unitPHP" /><br><br>

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

              echo "" .$celsius. " is equal to " .$tempFar. " F";
            }

            // Function to convert Fahrenheit to Celsius
            function fahrenheitToCelsius($fahrenheit) {
              $tempCel = ($fahrenheit - 32) * 5/9;


              echo "" .$fahrenheit. " is equal to " .$tempCel. " C";
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
                $resultPHP = "Invalid unit entered. Please enter 'C' for Celsius or 'F' for Fahrenheit.";
              }

              // Output the result
              echo $resultPHP;
            }
?>
?>
</body>

</html>