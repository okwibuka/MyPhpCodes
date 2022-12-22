
<?php
require('dbcon.php');
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
    <title>index</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Detail
                        <a href="create.php" class="btn btn-primary float-right">
                            Add Student
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    $query = "SELECT * FROM student";
                    $query_run = mysqli_query($con , $query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        foreach($query_run as $student)
                        {
                            ?>

                            <tr>
                                <td> <?= $student['id']; ?> </td>
                                <td> <?= $student['name']; ?> </td>
                                <td> <?= $student['email']; ?> </td>
                                <td> <?= $student['phone']; ?> </td>
                                <td> <?= $student['course']; ?> </td>
                                <td>
                                <a href="" class="btn btn-info btn-sm">View</a>
                                <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>

                            <?php
                        }
                    }
                    else{
                        echo "<h5> no record found </h5>";
                    }
                    ?>
                       
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>  