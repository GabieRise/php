<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabie Rise's | Login |page</title>
    <link rel="icon" type="image/x-icon" href="favicon_io (3)/favicon.ico">
    <link rel="stylesheet" href="styles/newLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<?php 

        
        require("connect.php");

        function addUser($conn, $userName, $userPass, $userEmail, $userAge, $userGender = 0, $userMS = NULL){
            $check = "SELECT name from users where email='$userEmail'";
            $checkResult =  mysqli_query($conn,$check);
            if(mysqli_num_rows($checkResult) > 0){
                echo "User Already Exists";
            }
            else{
                $sql = "INSERT INTO users(
                    email,
                    name,
                    password,
                    age, 
                    gender,
                    marital_status
                ) VALUES(
                    '$userEmail',
                    '$userName',
                    '$userPass',
                     $userAge,
                     $userGender,
                    '$userMS'
                )";
                $smt = mysqli_query($conn, $sql);
                if($smt){
                    echo "Success";
                }
                else{
                    echo "Failure" .  mysqli_error($conn);
                }
            }  
        }




        
        if(isset($_POST["btn"])){
            $name = $_POST["userName"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $age = $_POST["age"];
        
            addUser($con, $name, $password, $email, $age, 1, "Married");
            
        }
        

    ?>
    <div class="main">
        <div>
            <h2>Create Account</h2>
        </div>
        <div class="login">
            <form action="newLogin.php" method="POST">
                <div class="first-row">
                    <i class="fa-solid fa-user"></i>
                    <input name="userName" required type="Name" placeholder="Name">
                </div>
                <div class="second-row">
                    <i class="fa-solid fa-envelope"></i>
                    <input name="email" required type="email" placeholder="E-mail">
                </div>
                <div class="third-row">
                    <i class="fa-solid fa-lock"></i>
                    <input name="password" required type="password" placeholder="password">
                </div>
                <div class="third-row">
                    <i class="fa-solid fa-user"></i>
                    <input name="age" required type="Number" placeholder="Age" >
                </div>
                <div class="btn">
                    <button name="btn" >Sign Up</button>
                </div>
            </form>
        </div>
        
    </div>


    <script src="js/newLogin.js"></script>
</body>
</html>