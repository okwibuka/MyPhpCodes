<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="post" class="m-3">
        <label for="num1">num1:</label> <br>
<input type="number" name="num1" id=""> <br>
<label for="operation">op</label> <br>
<input type="text" name="op" id=""> <br>
<label for="num1">num2:</label> <br>
<input type="number" name="num2" id=""> <br>
<input type="submit" value="submit" class="btn btn-primary mt-2">
    </form>
    <?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op= $_POST["op"];

if($op === "+"){
    $result = $num1 + $num2;
    echo $result;
}
elseif($op === "-"){
    $result = $num1 - $num2;
    echo $result;
}
elseif($op === "*"){
    $result = $num1 * $num2;
    echo $result;
}
elseif($op === "/"){
    $result = $num1 / $num2;
    echo $result;
}else{
    echo "wrong operation";
}
    ?>
</body>
</html>