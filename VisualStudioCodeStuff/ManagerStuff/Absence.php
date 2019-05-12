<?php 
    session_start();
    $conn = mysqli_connect("localhost" , "root" , "", "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $user = $_SESSION["userCode"];
    $emCode = $_POST["emCode"];
    $result = mysqli_query($conn,"SELECT `absence_bonus`.`absence_allow` FROM `absence_bonus` INNER JOIN `employee_information` ON 
    `absence_bonus`.`emID` = `employee_information`.`EmployeeCode` WHERE `employee_information`.`EmployeeCode` = '$emCode' AND `ManagerCode` = '$user'");
    $answer;
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $AbNum = $row["absence_allow"];
        if ($AbNum > 0)
        {
            $sql1 = "UPDATE `absence_bonus` SET `absence_allow`= `absence_allow` - 1 WHERE `emID` = '$emCode'";
            if ($conn->query($sql1) === TRUE) {
                $answer =  "Number of absence day Allowed has been reduced";
                
            } else {
                $answer = "Error updating record: " . $conn->error;
                
            }
        }else{
            $sql2 = "UPDATE `moneyPaid` SET `Total` = `Total` - 100000 WHERE `EmployeeCode` = '$emCode'";
            if ($conn->query($sql2) === TRUE) {
                $answer = "Employee have been fined for being absence more than allowed";
                
            } else {
                $answer = "Error updating record: " . $conn->error;
                
            }
        }
    }else{
        $answer = "You don't supervise such employee";
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AbsenceRespond</title>
</head>
<body>
    <style>
    body{
        background-image: URL("paper.jpg");
        background-size: cover; 
        background-repeat: no-repeat;
    }
    #center {
    text-align: center;
    border: 3px solid green;
    padding: 70px 0;
    background-color: rgba(50, 115, 220, 0.3);
    }   
    #submit{
        width:15%;
        padding:10px;
        font-size:20px;
        background-color:#1E90FF;
    }
    </style>
    <h1 id = "center"><?php echo $answer; ?></h1>
    <button id = "submit" onclick="window.location.href='http://localhost/VisualStudioCodeStuff/ManagerStuff/YourEm.php'">Go Back</button>
</body>
</html>