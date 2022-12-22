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

<form action="associativeArray.php" method="post" class="m-4">
    enter name: <input type="text" name="name" id="">
    <br>
    <input type="submit" value="submit">
</form>
    <?php
    $grades = array("peter" => "A+" , "kwibuka"=> "B-" ,"edwin" => "C+");

    // $grades["peter"] = "B-";
    // echo $grades["peter"];
    // echo '<br/>';
    // echo count($grades);
    // echo "<hr/>";
//     if(count($grades) === $_POST["name"])
// {
//     echo $grades[$_POST["name"]];
// }
// else{
//     echo "no person found";
// }

echo $grades[$_POST["name"]]

    ?>
</body>
</html>