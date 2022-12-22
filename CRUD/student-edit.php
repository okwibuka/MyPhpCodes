<?php

session_start(); //because we are using the session
require "dbcon.php";

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
    <title>edit</title>
</head>
<body>

<div class="container mt-5">

<?php include('message.php') ; ?>
    <div class="row">
        <div class="col md-12">
           <div class="card">
            <div class="card-header">
                <h4>student Edit
                    <a href="index.php" class="btn btn-danger float-right">
                        BACK
                    </a>
                </h4>
            </div>
            <div class="card-body">

                <?php

                if(isset($_GET['id']))
                {
                 $student_id =mysqli_real_escape_string($con ,$_GET['id']);
                 $query = "SELECT * FROM student WHERE id='$student_id'";
                 $query_run =mysqli_query($con , $query);

                 if(mysqli_num_rows($query_run) > 0)
                 {

                    $student = mysqli_fetch_array($query_run);
                    ?>
                    
                    <form action="create.php" method="post">
                    <div class="mb-3">
                        <label for="">Student Name</label>
                        <input type="text" name="name" class="form-control" value="<?=$student['name'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Student Email</label>
                        <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Student Phone</label>
                        <input type="number" name="phone" value="<?=$student['phone'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Student Course</label>
                        <input type="text" name="course" value="<?=$student['course'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                    <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
                    </div>
                </form>

                    <?php

                 }
                 else
                 {
                    echo '<h4>no such id found</h4>';
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