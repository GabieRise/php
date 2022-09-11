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
        $username = "root";
        $password = "";
        $servername = "localhost:8080";
        $dbname = "leemao";
        $con = mysqli_connect($servername, $username, $password, $dbname);
        if(!$con){
            die("Connect failed :" . mysqli_connect_error());
        }
        else{
            echo "Success";
        }
        // $conn =  mysqli_connect($servername, $username, $password);
        // if(!$conn){
        //     die("Connection failed: " . mysqli_connect_error());
        // }
        // $createDB = "CREATE DATABASE leemao";
        // $smt = mysqli_query($conn,$createDB);
        // if($smt){
        //     echo "Success";
        // }
        // else{
        //     echo "Error creating database: " . mysqli_error($conn);;
        // }
    ?>
</body>
</html>