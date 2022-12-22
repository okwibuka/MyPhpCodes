<?php

include("connect.php");

if(isset($_POST['admin_signup']))
{
    $name = mysqli_real_escape_string($con , $_POST["name"]);
    $password = mysqli_real_escape_string($con , $_POST["password"]);
    

    $query = "INSERT INTO admin(user_name,password) VALUES ('$name' , '$password')";
    $query_run = mysqli_query($con , $query);
    if($query_run)
    {
        echo "record submitted successful";
        die;
    }
    else
    {
        echo "no such record found";
        die;
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" style="text-align:center; margin-top:4em">

<label for="username">user_name</label>
<br>
<input type="text" required name="name" id="">
<br><br>
<label for="password">password</label><br>
<input type="password" required name="password" id="">
<br><br>
<input type="submit" value="sign_up" name="admin_signup">
<br><br>
<a href="admin_login.php">login</a>

</form>
</body>
</html>