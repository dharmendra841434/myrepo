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
    <title>Add_Candidates</title>
    <link rel="stylesheet"  type="text/css"  href="css/addcan.css">
</head>
<body>
    <div id="menu">       
        <ul>
            <h3>Online Voting System</h3>
             <li id="f"><a href="dashboard.php">Dashboard</a></li>
             <li id="d" class="active"><a href="Add_Candidates.php">Add Candidates</a></li>
            <li id="t" > <a href="#">All Registered Students</a></li>
             <li id="h" ><a href="#" >Count Votes</a></li>
            </ul>
    <div id="border">

        <div id="inputfield">

            <form id="add" action="datastore.php" method="POST">
                <h2>ADD CANDIDATES</h2>
                <input type="text" id="name" name="cname" placeholder="Candidate Name"><br><br>
                <input type="text" id="pname" name="cp" placeholder="Party Name" ><br><br>
                <input type="text" id="canid" name="cid" placeholder="Candidate ID"><br><br>
                <input type="text" id="canemail" name="ce" placeholder="Candidate Email"><br><br>
                <input type="submit" id="submit" value="Add Details">


            </form>


        </div>
        
    </div>

    
</body>
</html>