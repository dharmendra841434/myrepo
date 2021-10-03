<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students </title>
    <link rel="stylesheet"  type="text/css"  href="css/regst.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <div id="menu">       
        <ul>
            <h3>Online Voting System</h3>
             <li id="f" ><a href="dashboard.php">Dashboard</a></li>
             <li id="d"><a href="Add_Candidates.php">Add Candidates</a></li>
            <li id="t"class="active"> <a href="allregst.php" >All Registered Students</a></li>
             <li id="h"><a href="#" >Count Votes</a></li>
            </ul>
    <div id="border">

                <table id="mytable">
                    <tr id="row1">
                        <th>Person 1</th>
                        <th>Person 2</th>
                        <th>Person 3</th>
                    </tr>
                    <tr id="row2">
                        <td>Emil</td>
                        <td>Tobias</td>
                        <td>Linus</td>
                    </tr>
                    <tr id="row3">
                        <td>16</td>
                        <td>14</td>
                        <td>10</td>
                    </tr>
                </table>          
    </div>
    </div>  
    <script>

    $(document).click('ul li',function(){

        $(this).addClass('active').siblings().removeClass('active');
    })


</script>
</body>
</html>