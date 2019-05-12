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
        $answer;
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

        $sql1 = "UPDATE `employee_information`SET `EmployeeCode` = COALESCE('$employeeCode',`EmployeeCode`), `Address` = COALESCE('$address',`Address`), `LastName` = COALESCE('$lastname',`LastName`), `FirstName` = COALESCE('$firstname',`FirstName`), `PhoneNumber` = COALESCE('$phonenumber',`PhoneNumber`),`email` = COALESCE('$email',`email`), 
        `JobPosition` = COALESCE('$jobpos',`JobPosition`), `Gender` = COALESCE('$gender',`Gender`), `Department` = COALESCE('$department',`Department`), 
        `DateOfBirth` = COALESCE('$dateOfBirth',`DateOfBirth`), `IdentityNumber` = COALESCE('$identityNumber',`IdentityNumber`), `PassportNumber` = COALESCE('$passportNumber',`PassportNumber`),
         `Ethnic` = COALESCE('$ethnic',`Ethnic`), `Nationality` = COALESCE('$nal',`Nationality`), `Religion` = COALESCE('$religion',`Religion`) , `Marriage` = COALESCE('$marriage',`Marriage`) , `Degree` = COALESCE('$degree',`Degree`), `University/College` = COALESCE('$university',`University/College`) WHERE `employeeCode` = '$emCode';";
            if (mysqli_query($conn, $sql1)) {
                $answer =  "CHANGE successfully";
            } else {
                $answer = "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
    ?>
    <h1 id = "title"><?php echo $answer ?></h1>
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
</style>
</body>
</html>