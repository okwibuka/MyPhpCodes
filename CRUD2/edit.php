<?php
session_start();
 include("connection.php");

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
    <div class="container mt-4">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit
                        <a href="index.php" class="btn btn-danger float-right">
                            BACK
                        </a></h4>
                    </div>
                    <div class="card-body">
                        <?php

                        if(isset($_GET['id']))
                        {
                             $student_id = mysqli_real_escape_string($con, $_GET['id']);
                             $query = "SELECT * FROM student WHERE id =' $student_id ' ";
                             $query_run = mysqli_query($con , $query);

                             if(mysqli_num_rows($query_run) > 0)
                             {

                                $student = mysqli_fetch_array($query_run)

                                ?>

                                
                        <form action="code.php" method="post">

                            <input type="hidden" name="student_id" value="<?= $student["id"]; ?>">
                            <div class="mb-3">
                            <label for="">Student Name</label>
                            <input type="text" value="<?= $student['name']; ?>" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="">Student Email</label>
                            <input type="email" value="<?= $student['email']; ?>" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="">Student Phone</label>
                            <input type="text" value="<?= $student['phone']; ?>" name="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="">Student Course</label>
                            <input type="text" value="<?= $student['course']; ?>" name="course" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="update_student" class="btn btn-primary">
                                    Update Student
                                </button>
                            </div>

                        </form>

                                <?php
                             }
                             else
                             {
                                echo "no such record found";
                             }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>