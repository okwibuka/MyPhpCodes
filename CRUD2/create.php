<?php
session_start();
// include("connection.php");

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
                        <h4>Student Add
                        <a href="index.php" class="btn btn-danger float-right">
                            BACK
                        </a></h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="">Student Email</label>
                            <input type="email" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="">Student Phone</label>
                            <input type="text" name="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="course" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">
                                    Save Student
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>