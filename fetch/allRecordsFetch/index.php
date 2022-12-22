
<?php
include("connection.php");
$query = "select * from data order by date desc";
$result = mysqli_query($con,$query);

if(isset($_POST['delete']))
{
$comment_id = mysqli_real_escape_string($con , $_POST['delete']);
$query = "DELETE FROM data WHERE id='$comment_id' ";
$query_run= mysqli_query($con , $query);

if($query_run)
    {
        echo "comment deleted successfully";
        header("Location: index.php");
        exit(0); 
    }
    else
    {
       echo "comment not deleted successfully";
        header("Location: index.php");
        exit(0); 
    }


}

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

    <title>comments_dashboard</title>

</head>
<body>
    <div class="container mt-5">

    <form action="" method="post">
    <table class=" table table-striped table-dark">
        <tr >
            <td scope="col" class=" text-center" colspan="4">DATA RECORDS</td>
        </tr>
        <tr>
            <th scope="col">id</th>
            <th scope="col">comment</th>
            <th scope="col">date</th>
        </tr>

        <?php
        

        if(mysqli_num_rows($result)>0)
        {
            $no = 1;
            while($rows = mysqli_fetch_assoc($result))
            {
                
                ?>

                <tr>
                    <td scope="row"> <?php echo $no; ?> </td>
                    <td> <?php echo $rows['comment']; ?> </td>
                    <td> <?php echo $rows['date']; ?> </td>
                    <td>
                        <button
                         name="delete" type="submit" class="btn btn-danger" 
                        value="<?= $rows['id']; ?>"> DELETE </button>
                    </td>

                </tr>
                
               
        <?php
        $no++;
        
            }
            
            }
           
            else
            {
                echo "no comment found"."</br>" ."</br>";
                // echo "</br>";
            }
            
            
            ?>
            
            </form>
           
    </table>
    </div>
</body>
</html>