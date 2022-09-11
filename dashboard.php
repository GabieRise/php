<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's | Table</title>
    <link rel="stylesheet" href="styles/dashboard.css">
</head>
<body>
    <?php
        require("connect.php");
        $sql = "SELECT name,email,gender,marital_status,age FROM users";
        $rawResult = mysqli_query($con, $sql);
        
    ?>
    <div class="container">
        <div class="cont">
            <h2>User's</h2>
            <button>Add User</button>
        </div>
        <table>
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Marital Status</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($rawResult)){
                ?>
            <tr>
                
                <td><?php echo($row['email'])?></td>
                <td><?php echo($row['name'])?></td>
                <td><?php echo($row['age'])?></td>
                <td><?php echo($row['gender'])?></td>
                <td><?php echo($row['marital_status'])?></td>
                
            </tr>
            <?php } ?>
        </table>

    </div>
</body>
</html>