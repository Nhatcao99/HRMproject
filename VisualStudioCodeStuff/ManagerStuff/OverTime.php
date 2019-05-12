<?php 
    session_start();
    
    $conn = mysqli_connect("localhost" , "root" , "", "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $user = $_SESSION["userCode"];
    $emCode = $_POST["emCode"];
    $numberOfTimes = $_POST["numD"];
    $numberOfTimes = $numberOfTimes * 30000;
    $result = mysqli_query($conn, "SELECT `employee_information`.`EmployeeCode`, `LastName`, `FirstName` , `basic`,`bonus`,`Insurance` FROM `employee_information` Left JOIN `salary` ON `employee_information`.`EmployeeCode` = `salary`.`EmployeeCode`
    Where `ManagerCode` = '$user';");
    if (mysqli_num_rows($result) > 0){
        $sql = "UPDATE `salary` SET `bonus`=`bonus` + '$numberOfTimes',`Total Net`=`bonus` + `basic` + `Insurance` Where `EmployeeCode` = '$emCode';";
        if ($conn->query($sql) === TRUE) {
            $answer = "This Employee's bonus on salary has been added";
        } else {
            $answer = "Error updating record: " . $conn->error;
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
    <title>OverTimesRespond</title>
</head>
<body>
    <style>
    body{
        background-image: URL("paper.jpg");
        background-size: cover; 
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