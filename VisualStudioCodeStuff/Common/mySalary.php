<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySalary</title>
</head>
<body>
    <div style = "background-color: #757370;">
        <h1>MY SALARY</h1>
        <table style = "background-color: #80D05B;" width = "600" border = "1" cellspacing = "1" cellpadding = "1" >
            <tr>
                <th>EmployeeCode</th>
                <th>basic</th>
                <th>bonus</th>
                <th>Insurance</th>
                <th>TotalNet</th>
            </tr>
            <?php 
                $conn = new mysqli("localhost" , "root" , "" , "HRM");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $user = $_SESSION['userCode'];
                $result = mysqli_query($conn,"SELECT `EmployeeCode`, `basic`, `bonus`,
                 `Insurance`, `Total Net` FROM `salary` WHERE `EmployeeCode` = '$user'");
                if (mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row["EmployeeCode"]."</td>";
                        echo "<td>".$row["basic"]."</td>";
                        echo "<td>".$row["bonus"]."</td>";
                        echo "<td>".$row["Insurance"]."</td>";
                        echo "<td>".$row["Total Net"]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>