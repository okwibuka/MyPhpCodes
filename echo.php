<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $name="john";

    $character = 'hello we are one';
    $age=36;
    echo("<h1>hello $name you are $age</h1>");
    echo"<hr/>" ; 
    echo("hello world <br/>");
    echo(strtoupper($name));
    echo "<br/>";

    echo substr($character , 6, 2);
    echo "<br/>";
    $num = 10;
    $num++;
    echo "$num";

    echo "<br/>";
    echo abs(-100);
    echo "<br/>";
    echo pow(2,3)
    
    ?>
</body>
</html>