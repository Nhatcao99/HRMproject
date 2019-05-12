<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
    $answer = "template";
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
    if (empty($emID)) {$answer = "Please Insert Employee Code";}
    else{
    $sql0 = "SELECT `EmployeeCode` FROM `employee_information` WHERE `EmployeeCode` = '$emID'";
    $result = mysqli_query($conn, $sql0);
    if (mysqli_num_rows($result) > 0){
    $sql1 = "UPDATE `employee_information` SET 
    `ManagerCode`='$manID' WHERE `employeeCode` = '$emID';";
    if($conn -> query($sql1) === TRUE)
    {
        $answer = "New Employee added";
    }else{
        $answer = "There No such employee";
    }}else{
        $answer = "There No such employee";
    }
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
