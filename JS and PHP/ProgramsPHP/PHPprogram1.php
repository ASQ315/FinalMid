<html>

<head>
    <title>Angel Santiago Web </title>

    <link rel="../images/shortcut icon" type="image/x-icon" href="../images/pokeball.png">

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="stylesheetExample1.css">
</head>

<body>
    <form method="post">
        Enter First Number:
        <input type="number" name="number1" /><br><br>
        Enter Second Number:
        <input type="number" name="number2" /><br><br>
        <input type="submit" name="submit" value="Add">
    </form>
    <?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
echo "The sum of " .$number1 ." and " .$number2 ."is: ".$sum;   
}  
?>
</body>

</html>
