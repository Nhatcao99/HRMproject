<!--login with EmployeeNumber-->
<?php
    session_start();
    $userNumber = $_POST['userNumb'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost","root","","HRM");

    $userNumb = mysqli_real_escape_string($conn,$userNumber);
    $password = mysqli_real_escape_string($conn,$password);
    $result = mysqli_query($conn,"select * from Login where EmployeeNumber = '$userNumb' and password = '$password'")
    or die("failed".mysqli_error($conn));

    $row = mysqli_fetch_array($result);
    
    if ($userNumber != NULL)
    if($row['EmployeeNumber'] == $userNumber  && $row['password'] == $password)
    {
        $_SESSION["userCode"] = $userNumber;
        if($row['IsManager'] == 1)
        {
            echo "<script>window.open('http://localhost/VisualStudioCodeStuff/ManagerStuff/Home.php','_self')</script>";
        }
        if($row['IsManager'] == 0){
            echo "<script>window.open('http://localhost/VisualStudioCodeStuff/EmployeeStuff/Home.php','_self')</script>";
        }
    }else{
    }else{
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoginFailer</title>
</head>
<body>
    <style>
    body{
        background-image: URL(".../ManagerStuff/paper.jpg");
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
    <h1 color = red id = "center">EITHER YOUR CODE OR PASSWORD DOESN'T EXIST, PLEASE TRY AGAIN</h1>
    <button id = "submit" onclick="window.location.href='http://localhost/VisualStudioCodeStuff/index.php'">Go Back</button>
</body>
</html>