<?php
session_start();
require "connection.php";


if(isset($_POST["delete_student"]))
{
    $student_id = mysqli_real_escape_string($con , $_POST['delete_student']);
    $query = "DELETE FROM student WHERE id='$student_id'"; 

    $query_run= mysqli_query($con , $query);
    if($query_run)
    {
        $_SESSION['message'] = "student deleted successfully";
        header("Location: index.php");
        exit(0); 
    }
    else
    {
        $_SESSION['message'] = "student not deleted successfully";
        header("Location: index.php");
        exit(0); 
    }

}

if(isset($_POST["update_student"]))
{
     
    $student_id = mysqli_real_escape_string($con , $_POST['student_id']);
    $name = mysqli_real_escape_string($con , $_POST['name']);
    $email = mysqli_real_escape_string($con , $_POST['email']);
    $phone = mysqli_real_escape_string($con , $_POST['phone']);
    $course = mysqli_real_escape_string($con , $_POST['course']);

    $query = "UPDATE student SET  name='$name' , email='$email' , phone='$phone' , course='$course' 
    WHERE id='$student_id ' ";

    $query_run = mysqli_query($con , $query);
    if($query_run)
    {
        $_SESSION['message'] = "student updated successfully";
    header("Location: index.php");
    exit(0); 
    }
    else
    {
        $_SESSION['message'] = "student not updated successfully";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST["save_student"]))
{
    $name = mysqli_real_escape_string($con , $_POST['name']);
    $email = mysqli_real_escape_string($con , $_POST['email']);
    $phone = mysqli_real_escape_string($con , $_POST['phone']);
    $course = mysqli_real_escape_string($con , $_POST['course']);


$query = "INSERT INTO student(name,email,phone,course) 
VALUES('$name','$email','$phone','$course')";

$query_run = mysqli_query($con , $query);

if($query_run)
{
    $_SESSION['message'] = "student created successfully";
    header("Location: create.php");
    exit(0);
}
else{

    $_SESSION['message'] = "student not created successfully";
    header("Location: create.php");
    exit(0);
}
}

?>