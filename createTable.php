<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require("connect.php");
        $createTable  = "CREATE TABLE users(
            email varchar(255) NOT NULL PRIMARY KEY,
            name varchar(255) NOT NULL,
            age int NOT NULL,
            password varchar(255) NOT NULL,
            gender boolean NOT NULL,
            marital_status varchar(255)
        )";

        $smt = mysqli_query($con, $createTable);
        if($smt){
            echo("Success");
        }
        else{
            echo "Failure" . mysqli_error($con);
        }
?>
</body>
</html>