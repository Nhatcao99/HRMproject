<?php 
    session_start();
    /*$userCode = $_SESSION["userCode"];
    $conn = new mysqli("localhost" , "root","" , "HRM");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $result = mysqli_query($conn, "SELECT `EmployeeCode`,`LastName`, `FirstName`,`JobPosition`, `Department` FROM `employee_information` WHERE `EmployeeCode` = '$userCode';");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $Lname = $row["LastName"];
        $Fname = $row["FirstName"];
        $Pro = $row["JobPosition"];
        $Dep = $row["Department"];
        $name = $Lname." ".$Fname;
    } */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ManHome</title>
    <link rel = "stylesheet" type = "text/css" href = "HomeStyle.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href = "http://localhost/VisualStudioCodeStuff/Common/SelfInfo.php">Personal Info</a></li>
            <li><a href = "http://localhost/VisualStudioCodeStuff/Common/mySalary.php">Salary</a></li>
            <li><a href = "http://localhost/VisualStudioCodeStuff/Common/PersonelSearch.php">CompanyPersonel</a></li>
            <li><a href = "http://localhost/VisualStudioCodeStuff/ManagerStuff/YourEm.php">EmployeeBusiness</a></li>
            <li><a href = "http://localhost/VisualStudioCodeStuff/logout.php">Logout</a></li>
        </ul>
    </nav>
    <!--div align = "left" class = "">
    <h1><?php echo $name ?></h1>
    <br><h1>Specialized IN : <?php echo $Pro ?></h1>
    <br><h1>Work At : <?php echo $Dep ?></h1>
    </div-->
</body>
</html>