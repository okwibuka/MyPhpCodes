<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$friends = array("kwibuka" , "kagabo" , "elyse" , 23 , true);
$friends[0] = "olivier";
echo $friends[0];
echo '<br/>';
echo count($friends);
echo '<br/>';
if (count($friends) >= 5)
{
    echo "you have many friends";
}
else{
    echo "you have few friends";
}
    ?>
</body>
</html>