<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$isMale = true;
$isTall = 0;
if($isMale && $isTall){
    echo "he is male and tall";
}
elseif(!$isMale && !$isTall){
    echo "he is neither male nor tall";
}
elseif(!$isMale && $isTall){
    echo "he is not male but he is tall";
}
elseif($isMale && !$isTall){
    echo "he is male but not tall";
}
    ?>
</body>
</html>