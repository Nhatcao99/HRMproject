<?php 
    session_start();
    $emCode = $_POST["emCode"];
    $conn = mysqli_connect("localhost" , "root" , "", "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $user = $_SESSION["userCode"];
    $result = mysqli_query($conn, "SELECT `employee_information`.`EmployeeCode`, `LastName`, `FirstName` , `basic`,`bonus`,`Insurance` FROM `employee_information` Left JOIN `salary` ON `employee_information`.`EmployeeCode` = `salary`.`EmployeeCode`
    Where `ManagerCode` = '$user';");
    if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $emCode = $row["EmployeeCode"];
    $basic = $row["basic"];
    $bonus = $row["bonus"];
    $sql_0 = "SELECT `Total` FROM `moneyPaid` WHERE `EmployeeCode` = '$emCode';";
    $result1 = mysqli_query($conn,$sql_0);
    if (mysqli_num_rows($result1) > 0){
    $total = $basic + $bonus;
   
    $sql = "UPDATE `moneyPaid` SET `Total`=`Total` + '$total' WHERE `EmployeeCode` = '$emCode'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    } else{
        echo "Error have happened";
    }
    }
    else{
        echo "You don't supervise such employee";
    }
    mysqli_close($conn);
?>