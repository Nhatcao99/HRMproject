<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>PayInterface</title>
</head>
<body>
<?php
    session_start();
    $emCode = $_POST["emCode"];
    $conn = mysqli_connect("localhost" , "root" , "", "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $answer;
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
                           $answer =  "Record updated successfully";
                           } else {
                           $answer =  "Error updating record: " . $conn->error;
                           }
                           
                           } else{
                           $answer =  "Error have happened";
                           }
                           }
                           else{
                           $answer =  "You don't supervise such employee";
                           }
                           mysqli_close($conn);
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
