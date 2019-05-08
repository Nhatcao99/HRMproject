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
    
    $sql1 = "UPDATE `employee_information` SET 
    `ManagerCode`='$manID' WHERE `employeeCode` = '$emID';";
    if($conn -> query($sql1) === TRUE)
    {
        echo "New Employee added";
    }else{
        echo "There No such employee";
    }
?>