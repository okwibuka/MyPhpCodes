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
<section>
<form action="form.php" method="get">

first name:<input type="text" name="name">
email:<input type="email" name="email">
password: <input type="password" name="password">

<select name="option">
    <option>math</option>
    <option>eng</option>
    <option>kiny</option>
    <option>bio</option>
</select>
<input type="submit" value="submit" class="btn btn-primary">

</form>
</section>

<!-- PHP TAGS -->

your name is <?php echo $_GET["name"] ?>
<?php echo "<br/>" ?>
you email is <?php echo $_GET["email"] ?>
<?php echo "<br/>" ?>
you password is <?php echo $_GET["password"] ?>
<?php echo "<br/>" ?>
your option is <?php echo $_GET["option"] ?>

</body>
</html>