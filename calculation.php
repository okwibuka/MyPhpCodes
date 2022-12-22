<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculation.php" method="get">

   num_1:<input type="number" name="num_one" id="">
   <br/><br/><br/>
   num_2:<input type="number" name="num_two" id="">
   <br/><br/><br/>
   <input type="submit" value="op">

    </form>

    Answer of <?php echo $_GET["num_one"] ?>
    <?php echo "+" ?>
    <?php echo $_GET["num_two"] ?>
    <?php echo "is" ?>
    <?php
     echo $_GET["num_one"] + $_GET["num_two"];
    ?>
</body>
</html>