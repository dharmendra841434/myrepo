<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet"  type="text/css"  href="css/pannel.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <div id="menu">       
        <ul>
            <h3>Online Voting System</h3>
             <li id="f"class="active" ><a href="dashboard.php">Dashboard</a></li>
             <li id="d"><a href="Add_Candidates.php">Add Candidates</a></li>
            <li id="t"> <a href="#" >All Registered Students</a></li>
             <li id="h"><a href="#" >Count Votes</a></li>
            </ul>
    <div id="border">

        <div id="top"> 
            <div id="totalst">

                <img src="img/st.png">

                <h4>Total Registred Students</h4>

            </div>
            <div id="totalcan">
                <img src="img/man2.png">
                <h4>Total Candidates</h4>

                
            </div>
        </div>
        <div id="buttom">
            

            <div id="totaldonevotes">
                <img src="img/vote.png">
                <h4>Total Votes Done </h4>


            </div>
            

            <div id="remainvotes">
                <img src="img/remain2.png">
                <h4>Remaining Votes </h4>

                
            </div>
        </div>      
    </div>
    </div>  
    <script>

    $(document).click('ul li',function(){

        $(this).addClass('active').siblings().removeClass('active');
    })


</script>
</body>
</html>