<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmployeeSalary</title>
</head>
<body>
<div class = "group">
<h1 class = "title">YOUR EMPLOYEE SALARY</h1>
<table align = center id = "tab" width = "600" border = "1" cellspacing = "1" cellpadding = "1" >
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "HRM";
        $conn = new mysqli($servername , $username , $password , $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $user = $_SESSION["userCode"];
        $result = mysqli_query($conn, "SELECT `employee_information`.`EmployeeCode`, `LastName`, `FirstName` , `basic`,`bonus`,`Insurance` FROM `employee_information` Left JOIN `salary` ON `employee_information`.`EmployeeCode` = `salary`.`EmployeeCode`
        Where `ManagerCode` = '$user';");
        if (mysqli_num_rows($result) > 0)
        {
            echo "<tr>";
            echo "<th>EmployeeCode</th>";
            echo "<th>LastName</th>";
            echo"<th>FirstName</th>";
            echo"<th>basic</th>";
            echo"<th>bonus</th>";
            echo"<th>Insurance</th>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo"<td>".$row["EmployeeCode"]."</td>";
            echo"<td>".$row["LastName"]."</td>";
            echo"<td>".$row["FirstName"]."</td>";
            echo"<td>".$row["basic"]."</td>";
            echo"<td>".$row["bonus"]."</td>";
            echo"<td>".$row["Insurance"]."</td>";
            echo"<tr>";
        }
        }
        
     ?>
    </table>
    </div>
    <div class = "group">
    <h1 class = "title">PAY EMPLOYEE</h1>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/Pay.php" method = "POST">
                <input class = "input" type = "text" id = "emCode" name = "emCode" placeholder = "EmployeeNumber">
                <input type = "submit" name = "submit" class = "submit" value = "Pay"> 
            </form>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/PayInsurance.php" method = "POST">
                <input class = "input" type = "text" id = "emCode" name = "emCode" placeholder = "EmployeeNumber">
                <input type = "submit" name = "submit" class = "submit" value = "PayInsurance"> 
            </form>
    </div>
    <style>
    #tab{
        align : center;
        background-color: white;
    }
    .group{
        align : left;
    }
    .title{
        color: red;
        background-color: rgba(50, 115, 220, 0.3);
    }
    body{
    background-image: url(money.jpg);
    background-size: cover;
    background-repeat: no-repeat;
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
</body>
</html>