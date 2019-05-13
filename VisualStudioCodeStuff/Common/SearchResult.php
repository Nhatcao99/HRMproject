<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Result</title>
</head>
<body>
<table id = "tab" width = "600" border = "1" cellspacing = "1" cellpadding = "1" >
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

    $emFName = $_POST['EmFName'];
    $emLName = $_POST['EmLName'];
    $emPro = $_POST['Profession'];
    $emDep = $_POST['SDepartment'];
    $emNal = $_POST['SNationality'];
    $emSex = $_POST['Sgender'];

    $emFName = mysqli_real_escape_string($conn,$emFName);
    $emLName = mysqli_real_escape_string($conn,$emLName);
    $emPro = mysqli_real_escape_string($conn,$emPro);
    $emDep = mysqli_real_escape_string($conn,$emDep);
    $emNal = mysqli_real_escape_string($conn,$emNal);
    $emSex = mysqli_real_escape_string($conn,$emSex);
    $answer = "RESULT FOUND";
    $result = mysqli_query($conn, "SELECT `EmployeeCode`, `Address`, `LastName`, `FirstName`, `PhoneNumber`, `email`, `JobPosition`, `Gender`, `Department`,`Nationality` FROM `employee_information` Where 
    `FirstName` Like '$emFName' OR `LastName` Like '$emLName' OR `JobPosition` Like '$emPro' OR `Department` Like '$emDep' OR `Nationality` LIKE '$emNal' OR `Gender` LIKE '$emSex';");
    if (mysqli_num_rows($result) > 0){
        echo "<tr>";
        echo "<th>EmployeeCode</th>";
        echo "<th>Address</th>";
        echo "<th>LastName</th>";
        echo"<th>FirstName</th>";
        echo"<th>PhoneNumber</th>";
        echo"<th>Profession</th>";
        echo"<th>Department</th>";
        echo"<th>Gender</th>";
        echo"<th>Email</th>";
        echo"<th>Nationality</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result))
        {
        echo"<tr>";
        echo"<td>".$row["EmployeeCode"]."</td>";
        echo"<td>".$row["Address"]."</td>";
        echo"<td>".$row["LastName"]."</td>";
        echo"<td>".$row["FirstName"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"<td>".$row["PhoneNumber"]."</td>";
        echo"<td>".$row["JobPosition"]."</td>";
        echo"<td>".$row["Department"]."</td>";
        echo"<td>".$row["Gender"]."</td>";
        echo"<td>".$row["Nationality"]."</td>";
        echo"<tr>";
        }
    } else{
        $answer =  "No Result Found!!!";
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
