<?php
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


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details
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

                                
                            <div class="mb-3">
                                <label for="">Student Name</label>
                                <p class="form-control">

                                <?= $student["name"]; ?>
                                </p>
                            
                            </div>

                            <div class="mb-3">
                            <label for="">Student Email</label>
                            <p class="form-control">

                                <?= $student["email"]; ?>
                                </p>
                            </div>

                            <div class="mb-3">
                            <label for="">Student Phone</label>
                            <p class="form-control">

                                <?= $student["phone"]; ?>
                                </p>
                            </div>

                            <div class="mb-3">
                            <label for="">Student Course</label>
                            <p class="form-control">

                                <?= $student["course"]; ?>
                                </p>
                            </div>


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