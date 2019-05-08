<?php
    session_start();
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMPLOYEES UNDER YOUR SUPERVISION</title>
</head>
<body>
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
    $sql = "SELECT `EmployeeCode`, `Address`, `LastName`, `FirstName`, `PhoneNumber`, `email`,
     `JobPosition`, `Gender`, `Department`, `DateOfBirth`, `IdentityNumber`, `PassportNumber`, 
    `Ethnic`, `Nationality`, `Religion`, `Marriage`, `Degree`, `University/College` FROM 
    `employee_information` Where `ManagerCode` = '$user';";         
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "You have no companion";
    }
    else if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<div class = 'article box'>
            <td>".$row["EmployeeCode"]."</td>
            <td>".$row["Address"]."</td>
            <td>".$row["LastName"]."</td>
            <td>".$row["FirstName"]."</td>
            <td>".$row["PhoneNumber"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["JobPosition"]."</td>
            <td>".$row["Department"]."</td>
            <td>".$row["Gender"]."</td>
            <td>".$row["Department"]."</td>
            <td>".$row["DateOfBirth"]."</td>
            <td>".$row["IdentityNumber"]."</td>
            <td>".$row["PassportNumber"]."</td>
            <td>".$row["Ethnic"]."</td>
            <td>".$row["Nationality"]."</td>
            <td>".$row["Religion"]."</td>
            <td>".$row["Marriage"]."</td>
            <td>".$row["Degree"]."</td>
            <td>".$row["University/College"]."</td>

            </div>";
        }
    }
?>
</body>
</html>