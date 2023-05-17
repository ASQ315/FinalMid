<?php
// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
  return ($celsius * 9/5) + 32;
}

// Function to convert Fahrenheit to Celsius
function fahrenheitToCelsius($fahrenheit) {
  return ($fahrenheit - 32) * 5/9;
}

// Handle the temperature conversion
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get the temperature and unit from the form
  $temperaturePHP = floatval($_POST["temperaturePHP"]);
  $unitPHP = $_POST["unitPHP"];

  $resultPHP = "";

  // Check the unit and perform the conversion
  if ($unitPHP === "C") {
    // Convert Celsius to Fahrenheit
    $resultPHP = celsiusToFahrenheit($temperaturePHP) . "°F";
  } elseif ($unitPHP === "F") {
    // Convert Fahrenheit to Celsius
    $resultPHP = fahrenheitToCelsius($temperaturePHP) . "°C";
  } else {
    $resultPHP = "Invalid unit entered. Please enter 'C' for Celsius or 'F' for Fahrenheit.";
  }

  // Output the result
  echo $resultPHP;
}
?>
