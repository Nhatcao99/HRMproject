<?php 
    session_start();
    $userCode = $_SESSION["userCode"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmHome</title>
    <link rel = "stylesheet" type = "text/css" href = "HomeStyle.css">
</head>
<body>
    <nav>
        <ul>
        <li><a href = "http://localhost/VisualStudioCodeStuff/Common/SelfInfo.php">Personal Info</a></li>
        <li><a href = "http://localhost/VisualStudioCodeStuff/Common/PersonelSearch.php">CompanyPersonel</a></li>           
         <li><a href = "http://localhost/VisualStudioCodeStuff/Common/mySalary.php">Salary</a></li>
         <li><a href = "http://localhost/VisualStudioCodeStuff/logout.php">Logout</a></li>
        </ul>
    </nav>
</body>
</html>