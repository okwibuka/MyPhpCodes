<?php
session_start();

require("connection.php")

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
      <?php include("message.php") ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Details
                        <a href="create.php" class="btn btn-primary float-right">
                            Add Student
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query =" SELECT * FROM student";
                            $query_run = mysqli_query($con , $query);
                            if(mysqli_num_rows($query_run) > 0)
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

                                    <a href="view.php?id=<?= $student['id']; ?>" class="btn btn-info  btn-sm">
                                            View
                                        </a>
                                        <a href="edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">
                                            Edit
                                        </a>
                                        <form action="code.php" method="post" class="d-inline ">
                                        <button type="submit" name="delete_student" value="<?= $student["id"]; ?>" class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                        </form>
                                    </td>

                                </tr>
                                    <?php
                                }

                            }
                            else
                            {
                                echo "no record found";
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