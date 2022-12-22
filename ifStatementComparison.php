<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function maxNum($num1 , $num2){
        if($num1 > $num2){
            echo "$num1 is greater than $num2";
        }
        elseif($num1 < $num2){
            echo "$num1 is less than $num2";
        }else{
            echo "$num1 is equal to $num2";
        }
    }
    maxNum(3,5)
    ?>
</body>
</html>