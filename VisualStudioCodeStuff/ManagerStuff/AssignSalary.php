<?php
    session_start();
 ?>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "HRM";
    $conn = new mysqli($servername , $username , $password , $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AssignSalary</title>
</head>
<body>
<style>
    body{
    background-image: url(money.jpg);
    background-size: cover;
    }
    form{
        width: 1000px;
        margin: auto;
        margin-top:50px;
    }
    .input{
        width: 60%;
        padding: 10px;
        font-size: 20px;
    }

    .submit{
        width:15%;
        padding:10px;
        font-size:20px;
        background-color:#1E90FF;
    }

    </style>
    <div>
    <form method = "post" , action="http://localhost/VisualStudioCodeStuff/ManagerStuff/AssignSalaryProcess.php">
        <h1 style="color:RED;" >AssignSalary</h1>
        <div><input type = "text" id = "EmCode" name = "EmCode" class = "input" placeholder = "EmployeeCode"></div>
        <div><input type = "number" id = "basic" name = "basic" class = "input" placeholder = "BasicSalary"></div>
        <div><input type = "number" id = "bonus" name = "bonus" class = "input" placeholder = "Bonus"></div>
        <div><input type = "number" id = "Insurance" name = "Insurance" class = "input" placeholder = "Insurance"></div>
        <div><input type = "submit" name = "submit" class = "submit">
    </form></div>
    <div>
        <form id = "addF" method = "post" action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/Fund.php">
            <h1 style="color:RED;" >ADD TO FUND</h1>
            <input type = "number" id = "addM" name = "addM" class = "input" placeholder = "AddToFund">
            <div><input type = "submit" name = "submit" class = "submit">
        </form>
    </div>
</body>
</html>