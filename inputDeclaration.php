<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="formInput.php" method="get">
    color: <input type="text" name="color" id="">
    person: <input type="text" name="person" id="">
    age: <input type="number" name="age" id="">

    <input type="submit" value="submit">
</form>

<?php

$person = $_GET["person"];
$color = $_GET["color"];
$age = $_GET["age"];

echo "my name is $person olivier";
echo "<br/>";
echo "my favorite color is $color";
echo "<br/>";
echo "i am $age years old";

?>
</body>
</html>