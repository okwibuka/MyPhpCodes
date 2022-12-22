<?php

include("connect.php");
include("function.php");
?>

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
    <a class="btn btn-light m-5" href="index.php">BACK</a> <br><br>
    
<form action="" method="post" 
style="text-align:center; margin-top:-7em; margin-left:25em ;"
class="w-50">

<label class="form-label" for="id">ID</label><br>
<input class="form-control" type="number" required name="id" id="">
<br><br>
<label class="form-label" for="team">team</label><br>
<input class="form-control" type="text" required name="team" id="">
<br><br>
<label class="form-label" for="pts">points</label> <br>
<input class="form-control" type="number" required name="pts" id="">
<br><br>
<label class="form-label" for="gd">goal defended</label> <br>
<input class="form-control" type="number" required name="gd" id="">
<br><br>
<button type="submit" name="create_team" class="btn btn-primary">
    create_teams</button>
</form>
</body>
</html>