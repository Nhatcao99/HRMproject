<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","HRM");
    $emCode = $_POST["EmCode"];
    $basicSal = $_POST["basic"];
    $bonusSal = $_POST["bonus"];
    $Insur = $_POST["Insurance"];
    $total = $Insur + $basicSal + $bonusSal;
    $sql = "UPDATE `salary` SET `basic`='$basicSal',`bonus`='$bonusSal',`Insurance`='$Insur',`Total Net`= '$total' WHERE `EmployeeCode` = '$emCode'";
    if (mysqli_query($conn, $sql))
    {
        "Assign successful";
    }else{
        echo "Error";
    }
?>