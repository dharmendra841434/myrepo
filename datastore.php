<?php 
session_start();
include("connection.php");

 if(isset($_POST['inputfield']))
 {

    $myuser = $_POST['cname'];
    $myparty = $_POST['cp'];
    $myid = $_POST['cid'];
    $myemail = $_POST['ce'];

    $data = [

        'name' => $myuser,
        'party' => $myparty,
        'id' => $myid,
        'email' => $myemail

    ];

    $postdata = $database->getReference("candidates/")->push($data);


   

    




 }
 ?>