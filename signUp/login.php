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
        //read from database
        
        $query = "select * from users where user_name = '$user_name' limit 1";
        
        $result = mysqli_query($con , $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                 
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: signup.php");
                    die;
                }
            }
        }

        echo "please enter valid informations";
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
    <title>login</title>
</head>
<body>

<div id="box">
    <form action="" method="post" class="m-5 ">
       <div>LOGIN:</div>
<input type="text" name="user_name" id="" placeholder="username" class="mb-2"><br>
<input  type="password" name="password" id="" placeholder="password" class="mb-2"><br>
<input  type="submit" value="login" id="">
<br><br>
<a href="signup.php"> signup</a>
    </form>
</div>
    
</body>
</html>