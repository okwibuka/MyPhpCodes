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
    <form action="radio.php" method="post" class="m-4">
        orange: <input type="radio" name="fruits[]" id="" value="orange">
        <br>
        tomatos: <input type="radio" name="fruits[]" id="" value="tomatos">
        <br>
        pineapple: <input type="radio" name="fruits[]" id="" value="pineapple">
        <br>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
<?php
$fruits = $_POST["fruits"];
echo $fruits[0];
?>
</body>
</html>