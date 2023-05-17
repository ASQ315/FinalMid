// Function to calculate the factorial of a number
function factorial(num) {
  // Base case: if the number is 0 or 1, return 1
  if (num === 0 || num === 1) {
    return 1;
  }

  // Recursive case: calculate the factorial by multiplying the number with the factorial of (num - 1)
  return num * factorial(num - 1);
}

// Function to display the result in the HTML page
function displayResult() {
  // Prompt the user to enter a number
  var number = parseInt(document.getElementById('number').value);

  // Call the factorial function and store the result
  var result = factorial(number);

  // Get the result element
  var resultElement = document.getElementById("result");

  // Set the text content of the element to display the result
  resultElement.textContent = "The factorial of " + number + " is " + result + ".";
}
