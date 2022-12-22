<?php

include("connect.php");

if(isset($_POST['admin_login']))
{
    $name = mysqli_real_escape_string($con , $_POST["name"]);
    $password = mysqli_real_escape_string($con , $_POST["password"]);

    $query = "SELECT * FROM admin where user_name = '$name' limit 1";
    $query_run = mysqli_query($con , $query);

    if($query_run && mysqli_num_rows($query_run) > 0)
    {
        $result  = mysqli_fetch_assoc($query_run);
        if($result['password'] === $password)
        {
            echo "successfully logged in";

            header("Location: index.php");
            die;
        }
        else{
            echo "wrong user name or password";
        }

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
<input type="submit" value="login" name="admin_login">
<br><br>
not have an account  <a href="admin_signup.php">sign_up</a>


</form>
</body>
</html>