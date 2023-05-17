
function basicEqua() {

    var num1 = parseInt(document.getElementById('num1').value);
    var num2 = parseInt(document.getElementById('num2').value);

//Addition
      var add = num1 + num2;
        document.getElementById('add').innerHTML = "The result of the addition of " + num1 +" and " + num2 + " is: " + add;
  
  //Subtraction 
        var sub = num1 - num2;
         document.getElementById('sub').innerHTML = "The result of the subtraction of " + num1 +" and " + num2 + " is: " + sub;

//Multiplication
      var mult = num1 * num2;
        document.getElementById('mult').innerHTML = "The result of the multiplication of " + num1 +" and " + num2 + " is: " + mult;

//Division
      var div = num1 / num2;
        document.getElementById('div').innerHTML = "The result of the division of " + num1 +" and " + num2 + " is: " + div;
}

