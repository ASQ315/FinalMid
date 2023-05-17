// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit(celsius) {
  return (celsius * 9/5) + 32;
}

// Function to convert Fahrenheit to Celsius
function fahrenheitToCelsius(fahrenheit) {
  return (fahrenheit - 32) * 5/9;
}

// Function to handle the temperature conversion and display the result
function convertTemperature() {
  // Prompt the user to enter a temperature
  var temperature = parseFloat(document.getElementById('temperature').value);
  var unit = document.getElementById('unit').value;


  var resultElement = document.getElementById("result");
  var result;

  // Check the unit and perform the conversion

  if (unit.toLowerCase() === "c") {
    // Convert Celsius to Fahrenheit
    result = celsiusToFahrenheit(temperature);

    resultElement.textContent = temperature + "C is equal to " + result + "F.";

  } else if (unit.toLowerCase() === "f") {
    // Convert Fahrenheit to Celsius
    result = fahrenheitToCelsius(temperature);

    resultElement.textContent = temperature + "F is equal to " + result + "C.";

  } else {
    
    resultElement.textContent = "Invalid unit entered. Please enter 'C' for Celsius or 'F' for Fahrenheit.";
  }
}
