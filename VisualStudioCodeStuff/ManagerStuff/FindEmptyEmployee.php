<?php 
    session_start()
?>
<?php
        $conn = new mysqli("localhost" , "root","","HRM") ;
        if ($conn ->connect_error){
            die("Connection error");
        } else{
            "Search success";
        }
        $sql = "SELECT `EmployeeCode`, `LastName`, `FirstName`, `PhoneNumber`,`email`, `JobPosition`, `Department` ,`Gender`,`Degree`, `University/College` FROM `employee_information` INNer JOIn `Login` ON `Login`.`EmployeeNumber` = `employee_information`.`EmployeeCode` where `IsManager` NOT LIKE 1 AND `ManagerCode` = 0";
        $result = mysqli_query($conn,$sql); 
        if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<div class = 'article box'>
            <td>".$row["EmployeeCode"]."</td>
            <td>".$row["LastName"]."</td>
            <td>".$row["FirstName"]."</td>
            <td>".$row["PhoneNumber"]."</td>
            <td>".$row["JobPosition"]."</td>
            <td>".$row["Department"]."</td>
            <td>".$row["Gender"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["Degree"]."</td>
            <td>".$row["University/College"]."</td>
            </div>";
        }
    } else{
        echo "No Result Found!!!";
    }
        ?>