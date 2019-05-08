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
    $emID = $_POST['emCode'];
    $manID = $_SESSION["userCode"];
    $sql1 = "UPDATE `employee_information` SET `ManagerCode` = 0  WHERE `ManagerCode`='$manID' AND `employeeCode` = '$emID';";
    if($conn -> query($sql1) === TRUE)
    {
        echo "THE EMPLOYEE NO LONGER WORK UNDER YOUR SUPERVISION";
        $sql2 = "UPDATE `salary` SET `basic`= 0,`bonus`= 0 ,`Total Net`= 0 WHERE `EmployeeCode` = '$emID'";
    }else{
        echo "There No such employee";
    }
?>