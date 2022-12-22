
<?php
include("connect.php");
include("function.php");


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
    <a class="btn btn-light m-5" href="create.php">create</a>
    <br><br>

<center><table style="margin-top:-8em;" class=" table table-striped table-dark w-50"></center>
    <thead>
    <tr>
<th scope="col">ID</th>
<Th scope="col">Team</th>
<th scope="col">Pts</th>
<th scope="col">Gd</th>
<th scope="col">Action</th>
    </tr>
    </thead>

    <tbody>

    <?php
    $query = "SELECT * FROM teams";
    $query_run = mysqli_query($con , $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $teams)
        {
            ?>
            <tr>
                <td scope="row"> <?= $teams['id']; ?></td>
                <td> <?= $teams['team']; ?></td>
                <td> <?= $teams['pts']; ?></td>
                <td> <?= $teams['gd']; ?></td>
                <td>
                    <a class="btn btn-info" href="">view</a>
                    <a class="btn btn-success" href="edit.php?id=<?= $teams['id']; ?>">edit</a>

                    <form action="index.php" method="post" style="display:inline;">
                    <button class="btn btn-danger" type="submit" name="delete_team" value="<?= $teams['id']; ?>">
                    delete</button>
                    </form>
                </td>
            </tr>
            
            <?php
        }
        
    }else{
        echo "no record found";
    }


?>
    
    </tbody>
</table>
    
</body>
</html>


