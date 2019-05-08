<?php
    session_start();
    $conn = new mysqli("localhost" , "root" , "" , "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $user = $_SESSION["userCode"];
    $add = $_POST["addM"];
    $sql_0 = "SELECT  `fund money` FROM `Funds` Where `MacCode` = '$user'" ;
    $result = mysqli_query($conn, $sql_0);
    $row = mysqli_fetch_assoc($result);
    $current = $row["fund money"];
    $current = $current + $add;
    $sql = "UPDATE `Funds` SET `fund money` = '$current' WHERE `ManCode` = '$user'";

    if (mysqli_query($conn, $sql))
    {
        echo "Sucess, New balance:";
        $sql1 = "SELECT `fund money` FROM `Funds` WHERE `ManCode` = '$user'";
        $result = $conn->query($sql1);
        if ($result ->num_rows > 0)
        {
            echo $row['fund money'];
        } 
    }else{
        echo  mysqli_error($conn);
    }
 ?>
