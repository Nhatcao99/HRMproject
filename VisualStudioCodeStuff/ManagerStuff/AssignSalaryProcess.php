<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AssignSalaryReact</title>
</head>
<body>
<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $answer = "";
    $user = $_SESSION["userCode"];
    $emCode = $_POST["EmCode"];
    $basicSal = $_POST["basic"];
    $bonusSal = $_POST["bonus"];
    $Insur = $_POST["Insurance"];
    if(empty($basicSal)){$basicSal = 0;}
    if(empty($bonusSal)){$bonusSal = 0;}
    if(empty($Insur)){$Insur = 0;}
    $total = $Insur + $basicSal + $bonusSal;
    if (empty($emCode)) {$answer = "Please Insert Employee Code";}
    else{
    $sql0 = "SELECT `EmployeeCode` FROM `employee_information`
    WHERE `EmployeeCode` = '$emCode' AND `ManagerCode` ='$user'";
    $result = mysqli_query($conn, $sql0);
    if (mysqli_num_rows($result) > 0){
    $sql = "UPDATE `salary` SET `basic`=COALESCE('$basicSal',
    `basic`),`bonus`=COALESCE('$bonusSal',`bonus`),`Insurance`=COALESCE('$Insur',`Insurance`),`Total Net`= '$total' WHERE `EmployeeCode` = '$emCode'";
    if (mysqli_query($conn, $sql))
    {
        $answer = "Assign successful";
    }else{
        $answer = "Can't assign";
    }} else{
        $answer = "There No such employee under your supervision";
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
