<?php
    $conn = new mysqli("localhost" , "root" , "" , "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $emCode = $_POST["EmCode"];
    $oldPass = $_POST["OldPass"];
    $newPass = $_POST["NewPass"];
    $sql = "SELECT `EmployeeNumber`, `password` FROM `Login` Where `EmployeeNumber` = '$emCode'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        if ($oldPass == $row["password"])
        {
                $sql1 = "UPDATE `Login` SET `password`= '$newPass' WHERE `EmployeeNumber` = '$emCode'";
                if (mysqli_query($conn, $sql1)) {
                    echo "Record Successful";
                } else {
                    echo "Error happen";
                }
            
        } else{
            echo "Your Password isn't true";
        }
    } else{
        echo "YOUR CODE DOESN'T EXIST";
    }
 ?>