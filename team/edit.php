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
    <a class="btn btn-light m-5" href="index.php">BACK</a>
    <br><br>

<?php

if(isset($_GET['id']))
{
     $team_id = mysqli_real_escape_string($con, $_GET['id']);
     $query = "SELECT * FROM teams WHERE id =' $team_id ' ";
     $query_run = mysqli_query($con , $query);

     if(mysqli_num_rows($query_run) > 0)
     {

        $team = mysqli_fetch_array($query_run) //same as "mysqli_fetch_assoc($query_run)"

        ?>

        
    
<form action="" 
method="post"
style="text-align:center; margin-top:-5em; margin-left:25em"
class="w-50 justifyContent-center">

<input type="hidden" name="team_id" value="<?= $team["id"]; ?>">

         <label class="form-label" for="id">ID</label> <br> 
            <input class="form-control" type="number" name="id" id="" value="<?= $team["id"]; ?>"> 
            <br><br>            
    <label class="form-label" for="team">team</label><br>
    <input class="form-control" type="text" name="team" value ="<?= $team['team']; ?>" id="">
    <br><br>
    <label class="form-label" for="pts">points</label> <br>
    <input class="form-control" type="number" name="pts" id="" value ="<?= $team['pts']; ?>">
    <br><br>
    <label class="form-label" for="gd">goal defended</label> <br>
    <input class="form-control" type="number" name="gd" id="" value ="<?= $team['gd']; ?>">
    <br><br>
    <button class="btn btn-primary" type="submit" name="update_team">
    update_team</button>
</form>

<?php
                             }
                             else
                             {
                                echo "no such record found";
                             }
                        }
                        ?>

</body>
</html>