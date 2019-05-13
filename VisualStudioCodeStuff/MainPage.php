<?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost","root","","HRM");

    $name = mysqli_real_escape_string($conn,$name);
    $password = mysqli_real_escape_string($conn,$password);

    
    $result = mysqli_query($conn,"select * from LoginPass where name = '$name' and password = '$password'  ")
    or die("failed".mysqli_error($conn));

    $row = mysqli_fetch_array($result);

    if($row['name'] == $name  && $row['password'] == $password)
    {
        echo "Login Success";
    }
    else{
        echo "failed";
    }
?>
<?php 
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .dropbtn{
        padding: 16px;
        border: none;
        cursor: pointer;
    }
    
    .dropdown{
        position: relative;
        display: inline-block;
    }
    .dropdown-content{
        display: none;
        position: absolute;
        background-color: aliceblue;
        z-index: 1;
    }
    .show{display: block;}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MainScreen</title>
</head>
<body>
    <h1 align = "center">Welcome to iHRM</h1>
    <div class = "dropdown">
        <button onclick= "dropFunction()" class = "dropbtn"><h3>Go to:<h3>
        </button>
            <div id = "MainDropdown" class = "dropdown-content">
                    <a href="http://localhost/VisualStudioCodeStuff/EmployeeInformation.php" target="_blank">EmployeeInformation</a>
                    <a href="http://localhost/VisualStudioCodeStuff/EmployeeMangement.php" target="_blank">EmployeeManagement</a>
                    <a href="http://localhost/VisualStudioCodeStuff/AbsenceMail.php" target="_blank">AbsenceMail</a>
                    <a href="http://localhost/VisualStudioCodeStuff/WageAndWellfare.php" target="_blank">WageAndWelfare</a>
            </div>
    </div>
    <script>
        function dropFunction(){
            document.getElementById("MainDropdown").classList.toggle("show");
        }
    </script>
</body>
</html>