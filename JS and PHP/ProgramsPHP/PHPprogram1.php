
<head>
    <title>Angel Santiago Web </title>

    <link rel="../images/shortcut icon" type="image/x-icon" href="../images/pokeball.png">

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../stylesheetExample1.css">
</head>

<body>
    <form method="post">
        Number 1:
        <input type="number" name="number1" /><br><br>
        Number 2:
        <input type="number" name="number2" /><br><br>
        
        <button name="submit" >
    <span>Example PHP</span>
    <div class="top"></div>
    <div class="left"></div>
    <div class="bottom"></div>
    <div class="right"></div>
</button>

    </form>
    <?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  

        $sum =  $number1+$number2;
        $rest = $number1-$number2;
        $mult = $number1*$number2;
        $div = $number1/$number2;

echo "The adition of " .$number1 ." and " .$number2 ." is: ".$sum;
echo "<br> The subtraction of " .$number1 ." and " .$number2 ." is: ".$rest;
echo "<br> The multiplicacion of " .$number1 ." and " .$number2 ." is: ".$mult;
echo "<br>The division of " .$number1 ." and " .$number2 ." is: ".$div; 

}  
?>
</body>

</html>
</body>

</html>
