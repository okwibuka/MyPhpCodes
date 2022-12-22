<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sayHi($name , $age) {
        echo "hello $name you are $age";
    }
    sayHi("kwibuka" , 20);
    echo "<br/>";
    sayHi("olivier" , 23);

    echo "<hr/>"
    ?>

<?php
function cube($num){
    return $num*$num*$num ;
}
$result = cube(2);
echo $result

?>

</body>
</html>