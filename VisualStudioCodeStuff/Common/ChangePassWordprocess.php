<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
</head>
<body>
<?php
    $conn = new mysqli("localhost" , "root" , "" , "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $answer = "";
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
                    $answer = "Record Successful";
                } else {
                    $answer = "Error happen";
                }
            
        } else{
            $answer = "Your Password isn't true";
        }
    } else{
        $answer = "YOUR CODE DOESN'T EXIST";
    }
 ?>
    <h1 id = "title"><?php echo $answer ?></h1>
    <div align = "right">
    <button  id = "back" onclick="window.location.href='http://localhost/VisualStudioCodeStuff'">Go Back</button>
    </div>
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
    #back{
        background-color: Coral;
        width:15%;
        font-size:20px;
    }
</style>
</body>
</html>
