<?php

require("connection.php");

if(isset($_POST["submit"]))
{
    $comment = mysqli_real_escape_string($con, $_POST['comment']);
    $query = "insert into data (comment) values ('$comment')";
    $result = mysqli_query($con , $query);

    if($result && !empty($result ))
    {

        header("Location: form.php");
        echo "comment created successful";
        exit(0);
    }
    else{
        echo "no comment found";
        exit(0);
    }
}



?>