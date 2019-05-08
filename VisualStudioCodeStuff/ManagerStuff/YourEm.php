<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YourEmployee</title>
</head>
<body>
    <style>
    body{
        background-image: url("Employee.jpg");
        background-size: cover;
    }
    .box .submit{
        width:15%;
        padding:10px;
        font-size:20px;
        background-color:#1E90FF;
    }
    </style>
    <div class = "box">
        <h1>SEARCH FOR EMPLOYEE WHICH HAVE NO GROUP</h1>
        <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/FindEmptyEmployee.php" id = "form1">
        </form>
        <button type = "submit" form = "form1" value = "Submit">SEARCH</button>
    </div>
    <div class = "box">
            <h1>EMPLOYEES UNDER YOUR SUPERVISION</h1>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/EmpoyeeUnderYourSup.php" id = "form2">
            </form>
            <button type = "submit" form = "form2" value = "Submit">SEARCH</button>
    </div>
    <div class = "box">
            <h1>ADD EMPLOYEES</h1>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/AddEmployee.php" id = "form3" method = "post">
            <div class = "group">
                <input id="emCode" name="emCode" type="text" class="input" placeholder = "EmployeeCode">
            </div>
            </form>
            <button type = "submit" form = "form3" value = "Submit">ADD</button>
    </div>
    <div class = "box">
            <h1>DROP EMPLOYEE EMPLOYEES</h1>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/DropEmployee.php" id = "form6" method = "post">
            <div class = "group">
                <label for="user" class="label"></label>
                <input id="emCode" name="emCode" type="text" class="input" placeholder = "EmployeeCode">
            </div>
            </form>
            <button type = "submit" form = "form6" value = "Submit">DROP</button>
    </div>
    <div class = "box">
             <h1>EMPLOYEE SALARY</h1>   
             <form action = "http://localhost/VisualStudioCodeStuff/Common/EmSalary.php" id = "form4" method = "post">
            <div class = "group">
                <button type = "submit" form = "form4" value = "Submit">GO TO</button>
            </div>
            </form>
    </div>
    <div class = "box">
             <h1>ASSIGN SALARY</h1>   
             <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/AssignSalary.php" id = "form5" method = "post">
            <div class = "group">
                <button type = "submit" form = "form5" value = "Submit">GO TO</button>
            </div>
            </form>
    </div>

</body>
</html>