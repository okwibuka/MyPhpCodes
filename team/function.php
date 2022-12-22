<?php

require "connect.php";



//delete team

if(isset($_POST["delete_team"]))
{
    $team_id = mysqli_real_escape_string($con , $_POST['delete_team']);
    $query = "DELETE FROM teams WHERE id = $team_id";
    $query_run = mysqli_query($con , $query);
    if($query_run)
    {
        echo "team successfully deleted";
        header("Location: index.php");
        die;
    }
    else
    {
        echo "team not successfully deleted";
        header("Location: index.php");
        die;
    }
}

//update or edit team


if(isset($_POST["update_team"]))
{
     
    $team_id = mysqli_real_escape_string($con , $_POST['team_id']);
    $id =  mysqli_real_escape_string($con ,$_POST['id']);
    $team = mysqli_real_escape_string($con ,$_POST['team']);
    $pts = mysqli_real_escape_string($con ,$_POST['pts']);
    $gd = mysqli_real_escape_string($con ,$_POST['gd']);

    $query = "UPDATE teams SET id = '$id', team ='$team' , pts='$pts' , gd='$gd'
    WHERE id='$team_id ' ";

    $query_run = mysqli_query($con , $query);
    if($query_run)
    {
       echo"student updated successfully";
    header("Location: index.php");
    exit(0); 
    }
    else
    {
       echo "student not updated successfully";
        header("Location: index.php");
        exit(0);
    }

}

// create team

if(isset($_POST["create_team"]))
{
    $id = mysqli_real_escape_string($con ,$_POST['id']);
    $team = mysqli_real_escape_string($con ,$_POST['team']);
    $pts = mysqli_real_escape_string($con ,$_POST['pts']);
    $gd = mysqli_real_escape_string($con ,$_POST['gd']);

    $query = "INSERT INTO teams(id,team,pts,gd) VALUES ('$id','$team','$pts','$gd')";
    $query_run = mysqli_query($con , $query);
    if($query_run)
    {

        header("Location: create.php");
        echo"team created successful";
        die;
    }
    else
    {
        header("Location: create.php");
        echo"team not created successful";
        die;
    }
}








?>