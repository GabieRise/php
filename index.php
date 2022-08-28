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
    <form action="index.php" method="POST" id="formDiv">
        <section id="personalInfo">
            <h2>Personal Info</h2>
            <input required id="fName" name="firstName" type="text" placeholder="First Name">
            <input required id="lName" name="lastName" type="text" placeholder="Last Name">
            <input required id="email" name="email" type="email" placeholder="Email">
            <input required id="password" name="password" type="password" placeholder="Password">
         
            <div>
                <input required id="age" name="age" type="number" placeholder="Age">
                <span><input required id=""type="radio" name="gender" value="female"> Female</span>
                <span><input required id=""type="radio" name="gender" value="male"> Male</span>
            </div>
            <div>
                <button name="btn">Submit</button>
            </div>
        </section>
    </form>

    <?php 

    if(isset($_POST["btn"])){
        echo($_POST["firstName"]);
        echo($_POST["email"]);
    }
    ?>
</body>
</html>