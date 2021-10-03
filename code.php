<?php 
session_start();
include("connection.php");

 if(isset($_POST['login']))
 {

    $myuser = $_POST['uname'];
    $mypass = $_POST['pass'];


    $reference1 = $database->getReference('admin/username');
    $uname = $reference1->getValue();

    $reference2 = $database->getReference('admin/password');
    $pass = $reference2->getValue();

    

    if($myuser==$uname && $mypass==$pass)
    {

    
        header('Location: dashboard.php');

        
    }
    else{

        $_SESSION['Status'] = "Incorrect username or Password ";
        header('Location: myadmin.php');


    }



 }
?>