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
    
 
    <!-- here post method is used for hidding informations on the URL -->
    <form action="url.php" method="post" class="m-2">
    password<input type="password" name="password" id="">
    <br>
    <input type="submit" value="submit" class="btn btn-primary m-2">
</form>

<?php
echo $_POST["password"]
?>
</body>
</html>