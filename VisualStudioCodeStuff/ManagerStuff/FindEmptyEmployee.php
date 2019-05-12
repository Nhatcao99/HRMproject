<?php 
    session_start();
    $conn = new mysqli("localhost" , "root","","HRM") ;
        if ($conn ->connect_error){
            die("Connection error");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table id = "tab" width = "600" border = "1" cellspacing = "1" cellpadding = "1" >
<?php
        $answer = "Result Found";
        $sql = "SELECT `EmployeeCode`, `LastName`, `FirstName`, `PhoneNumber`,`email`, `JobPosition`, `Department` ,`Gender`,`Degree`, `University/College` FROM `employee_information` INNer JOIn `Login` ON `Login`.`EmployeeNumber` = `employee_information`.`EmployeeCode` where `IsManager` NOT LIKE 1 AND `ManagerCode` = 0";
        $result = mysqli_query($conn,$sql); 
        if (mysqli_num_rows($result) > 0){
            echo "<tr>";
            echo "<th>EmployeeCode</th>";
            echo "<th>LastName</th>";
            echo"<th>FirstName</th>";
            echo"<th>PhoneNumber</th>";
            echo"<th>Profession</th>";
            echo"<th>Department</th>";
            echo"<th>Gender</th>";
            echo"<th>Email</th>";
            echo"<th>Degree</th>";
            echo"<th>University<th>";
            echo "</tr>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo"<tr>";
        echo"<td>".$row["EmployeeCode"]."</td>";
        echo"<td>".$row["LastName"]."</td>";
        echo"<td>".$row["FirstName"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"<td>".$row["PhoneNumber"]."</td>";
        echo"<td>".$row["JobPosition"]."</td>";
        echo"<td>".$row["Department"]."</td>";
        echo"<td>".$row["Gender"]."</td>";
        echo"<td>".$row["Email"]."</td>";
        echo"<td>".$row["Degree"]."</td>";
        echo"<td>".$row["University/College"]."</td>";
        echo"<tr>";
        }
    } else{
        $answer = "No Result Found!!!";
    }
?>
    <h1 id = "title"><?php echo $answer ?></h1>
</table>
<style>
    body{
        background-image: URL("paper.jpg");
        background-size: cover; 
        background-repeat: no-repeat;
    }
    #title {
    text-align: center;
    border: 3px solid green;
    padding: 70px 0;
    background-color: rgba(50, 115, 220, 0.3);
    }   
    #tab{
        background-color: rgba(50, 115, 220, 0.3);
    }
    </style>
</body>
</html>


