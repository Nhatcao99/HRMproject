<?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WelcomeScreen</title>
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
        //echo "Connected successfully";
        $emCode = $_SESSION['userCode'];
        $username = $_POST['username'];
        $address = $_POST['Address'];
        $lastname = $_POST['LastName'];
        $firstname = $_POST['FirstName'];
        $date = $_POST['Date'];
        $month = $_POST['Month'];
        $year = $_POST['Year'];
        $email = $_POST['email'];
        $phonenumber = $_POST['PhoneNumber'];
        $jobpos = $_POST['JobPosition'];
        $gender = $_POST['gender'];
        $department = $_POST['Department'];
        $identityNumber =  $_POST['IdentityNumber'];
        $passportNumber = $_POST['PassPortNumber'];
        $ethnic = $_POST['Ethnic'];
        $nal = $_POST['Nationality'];
        $religion = $_POST['religion'];
        $marriage = $_POST['marriage'];
        $degree = $_POST['Degree'];
        $university = $_POST['university'];
        $dateOfBirth = $date."-".$month."-".$year;

        $sql1 = "UPDATE `employee_information`SET `EmployeeCode` = '$employeeCode', `Address` = '$address', `LastName` = '$lastname', `FirstName` = '$firstname', `PhoneNumber` = '$phonenumber',`email` = '$email', 
        `JobPosition` = '$jobpos', `Gender` = '$gender', `Department` = '$department', 
        `DateOfBirth` = '$dateOfBirth', `IdentityNumber` = '$identityNumber', `PassportNumber` = '$passportNumber',
         `Ethnic` = '$ethnic', `Nationality` = '$nal', `Religion` = '$religion', `Marriage` = '$marriage', `Degree` = '$degree', `University/College` = '$university' WHERE `employeeCode` = '$emCode';";
            if (mysqli_query($conn, $sql1)) {
                echo "CHANGE successfully";
            } else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
    ?>
</body>
</html>