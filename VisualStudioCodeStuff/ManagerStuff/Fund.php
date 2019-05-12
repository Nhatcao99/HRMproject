<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add To Fund</title>
</head>
<body>
<?php
    session_start();
    $conn = new mysqli("localhost" , "root" , "" , "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $answer = "";
    $user = $_SESSION["userCode"];
    $add = $_POST["addM"];
    $sql_0 = "SELECT  `fund money` FROM `Funds` Where `ManCode` = '$user'" ;
    $result = mysqli_query($conn, $sql_0);
    if (mysqli_num_rows($result) > 0){
    $sql = "UPDATE `Funds` SET `fund money` =`fund money` + '$add' WHERE `ManCode` = '$user'";
    if (mysqli_query($conn, $sql))
    {
        $answer = "Sucess, New balance:";
        $sql1 = "SELECT `fund money` FROM `Funds` WHERE `ManCode` = '$user'";
        $result = $conn->query($sql1);
        if ($result ->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            $answer = "Money has been add to fund , now fund balance:".$row["fund money"];
        } 
    }else{
        $answer = "CAN'T ADD TO FUND";
    }}
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
</body>
</html>

