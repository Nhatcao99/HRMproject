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
<table width = "600" border = "1" cellspacing = "1" cellpadding = "1" >
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
        }
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
     ?>
    </table>

    
</body>
</html>