<?php
    session_start();
 ?>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "HRM";
    $conn = new mysqli($servername , $username , $password , $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CompanyPersonel</title>
    <style>
    body{
    background-image: url(EmSearch.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    }
    form{
        width: 1000px;
        margin: auto;
        margin-top:50px;
    }
    .search{
        width: 60%;
        padding: 10px;
        font-size: 20px;
    }

    .submit{
        width:15%;
        padding:10px;
        font-size:20px;
        background-color:#1E90FF;
    }
    .custom-select {
    position: relative;
    font-family: Arial;
    width:15%;
    padding:10px;
    background-color: GREEN;
    }
    #back{
        background-color: Coral;
        width:15%;
        font-size:20px;
    }
    </style>
</head>
<body>
<div>
    <form method = "post" , action="http://localhost/VisualStudioCodeStuff/Common/SearchResult.php">
        <h1 style="color:MediumSeaGreen;" >PERSONEL SEARCH</h1>
        <input type = "text" id = "EmFName" name = "EmFName" class = "search" placeholder = "FirstName">
        <input type = "text" id = "EmLName" name = "EmLName" class = "search" placeholder = "LastName">
        <input type = "text" id = "Profession" name = "Profession" class = "search" placeholder = "Profession">
        <input type = "text" id = "SDepartment" name = "SDepartment" class = "search" placeholder = "Department">
        <input type = "text" id = "SNationality" name = "SNationality" class = "search" placeholder = "Nationality">
        <br><div class = "custom-select" style = "width:200px;">
        <select id = "Sgender" name = "Sgender" style="width:200px;">
            <option value = "other">Other</option>
            <option value = "male">Male</option>
            <option value = "female">Female</option>
        </select></div>
        <br><input type = "submit" name = "submit" class = "submit" value = "search">
        
    </form>
</div>
    <div align = "right">
    <button  id = "back" onclick="window.location.href='http://localhost/VisualStudioCodeStuff/ManagerStuff/Home.php'">Go Back</button>
    </div>
</body>

</html>