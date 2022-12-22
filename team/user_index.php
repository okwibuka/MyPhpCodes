<?php
include("connect.php");
include("function.php");

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <!-- <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous"> -->

    <title>Document</title>
</head>
<body>

<h3>Spanish league list</h3>

<div class="container">
    
<table border="0" style="text-align:center; margin-top:5em;">
    <thead>
    <tr class="tableHead">
<th>ID</th>
<th>Teams</th>
<th>Pts</th>
<th>Gd</th>
    </tr>
    </thead>

    <tbody>

    <?php
    $query = "SELECT * FROM teams order by pts desc";
    $query_run = mysqli_query($con , $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        $no = 1;
        foreach($query_run as $teams)
        {
            ?>
            <tr>
                <td class="tbody"><?php echo $no ?></td>
                <td class="tbody"> <?= $teams['team']; ?></td>
                <td class="tbody"> <?= $teams['pts']; ?></td>
                <td class="tbody"> <?= $teams['gd']; ?></td>
                
            </tr>
            
            <?php
            $no++;
        }
        
    }else{
        echo "no record found";
    }


?>
    
    </tbody>
</table>
</div>
    
</body>
</html>


