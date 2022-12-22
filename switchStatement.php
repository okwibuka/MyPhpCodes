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
    <form action="switchStatement.php" method="post" class="m-3">
        <label for="grade">grade</label> <br>
        <input type="text" name="grade" id=""> <br>
        <input type="submit" value="submit" class="btn btn-primary mt-2" >
    </form>
    <?php
$grade = $_POST["grade"];

switch($grade){
    case 'A':
        echo "excellent";
        break;

        case 'B':
            echo "very good";
            break;

            case 'C':
                echo "good";
                break;

                case 'F':
                    echo "fail";
                    break;

                    default:
                    echo "wrong grade";
                    break;
}
    ?>
</body>
</html>