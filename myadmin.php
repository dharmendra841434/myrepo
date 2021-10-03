<?php
session_start();
include('connection.php');



 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet"  type="text/css"  href="css/admin_login.css">
</head>
<body>

    <div id = "login">
        <form id="admin" action="code.php" method="POST" >
        <?php

            if(isset($_SESSION['Status']))
            {
                echo '<script type ="text/JavaScript">';  
                echo 'alert("incorrect Username or Password ")';  
                echo '</script>'; 
                unset($_SESSION['Status']);


            }
        ?>
            <h2>Admin Login</h2>
            <input type="text" id="username" name="uname" placeholder="Enter Email"><br><br>
            <input type="password" id="password" name="pass"  placeholder="Password" ><br><br>
            <input type="checkbox" id="checkbox" >
            <label for="checkbox"> Show Password</label><br><br>
            <button  id="submit" name="login">Login</button>
        </form>
    </div>   
</body>
</html>