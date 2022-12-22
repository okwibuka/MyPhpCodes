<?php

session_start();

include("connection.php");
include("functions.php");

// $user_data = check_login($con) ;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted

    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
    {
        //save to database
        
        $user_id = random_num(20);
        $query = "insert into users (user_id , user_name , password) values ('$user_id' , '$user_name' , '$password')"; 
        mysqli_query($con , $query);

        header("Location: login.php");
        die;
    }
    else
    {
        echo "please enter valid informations";
    }
}

?>


<html lang="en">
<head>

<link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp</title>
</head>
<body>

<div id="box">
    <form action="" method="post" class="m-5 ">
       <div>SignUp:</div>
<input id="text" type="text" name="user_name" id="" placeholder="username" class="mb-2"><br>
<input id="text" type="password" name="password" id="" placeholder="password" class="mb-2"><br>
<input id="button" type="submit" value="signup" id="">
<br><br>
<a href="login.php"> login</a>
    </form>
</div>
    
</body>
</html>