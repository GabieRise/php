<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <form action="signin.php" method="POST" id="formDiv">
        <section id="personalInfo">
            <h2>Personal Info</h2>
            <input required id="email" name="email" type="email" placeholder="Email">
            <input required id="password" name="password" type="password" placeholder="Password">
        
            <div>
                <button name="btn">Submit</button>
            </div>
        </section>
    </form>

    <?php 

        $users =[
            ["email"=>"hafsahchukwuma@yahoo.com", "password" => "4t8924tyi4ejhguighuihgui"],
            ["email" => "jamesdoe@gmail.com", "password" => "uj34yui34u2yfugy78y43jgi43jh"]
        ];

        define("dbEmail","hafsahchukwuma@yahoo.com", true);
        define("dbPassword", "4uirwhy784yu487yt5ug3uht894y", true);

        if(isset($_POST['btn'])){
            if($_POST["email"] === dbEmail && $_POST["password"] === dbpassword){
                echo"Hi";
            }
            else{
                echo"Go Away";
            }
        };

        function userExists( $email, $password){
            
            for($i=0; i<count($users); $i++){
                if($users[$i]["email"] === $email && $users[$i]["password"]===$password){
                    echo "found";
                    break;
                }
            }
        }
    ?>
    
</body>
</html>