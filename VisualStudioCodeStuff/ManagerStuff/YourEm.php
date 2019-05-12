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
        background-image: url("temp.jpg");
        background-size: cover;
        background-color: Silver;
        background-repeat: no-repeat;
    }
    .submit{
        width:15%;
        padding:15px;
        font-size:20px;
        background-color:#1E90FF;
    }
    .button{
        width:10%;
        padding:5px;
        font-size:10px;
        background-color: #05ffb0;
    }
    .title{
        color: Teal;
        
    }
    .input{
        width: 40%;
        padding: 10px;
        font-size: 20px;
        background-color: hsla(14, 100%, 53%, 0.6);    
        }
    #back{
        background-color: #92a8d1;
    }
    </style>
    <div class = "box">
        <h1 class = "title">SEARCH FOR EMPLOYEE WHICH HAVE NO GROUP</h1>
        <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/FindEmptyEmployee.php" id = "form1">
            <button type = "submit" class = "submit" form = "form1" value = "Submit">SEARCH</button>
        </form>
        
    </div>
    <div class = "box">
            <h1 class = "title">EMPLOYEES UNDER YOUR SUPERVISION</h1>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/EmpoyeeUnderYourSup.php" id = "form2">
            </form>
            <button type = "submit" class = "submit" form = "form2" value = "Submit">SEARCH</button>
    </div>
    <div class = "box">
            <h1 class = "title">ADD EMPLOYEES</h1>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/AddEmployee.php" id = "form3" method = "post">
            <div class = "group">
                <input id="emCode" name="emCode" type="text" class="input" placeholder = "EmployeeCode">
            </div>
            </form>
            <button type = "submit" class = "submit" form = "form3" value = "Submit">ADD</button>
    </div>
    <div class = "box">
            <h1 class = "title">DROP EMPLOYEE EMPLOYEES</h1>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/DropEmployee.php" id = "form6" method = "post">
            <div class = "group">
                <label for="user" class="label"></label>
                <input id="emCode" name="emCode" type="text" class="input" placeholder = "EmployeeCode">
            </div>
            </form>
            <button type = "submit" class = "submit" form = "form6" value = "Submit">DROP</button>
    </div>
    <div class = "box">
             <h1 class = "title">EMPLOYEE SALARY</h1>   
             <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/EmSalary.php" id = "form4" method = "post">
            <div class = "group">
                <button type = "submit" class = "submit" form = "form4" value = "Submit">GO TO</button>
            </div>
            </form>
    </div>
    <div class = "box">
             <h1 class = "title">ASSIGN SALARY</h1>   
             <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/AssignSalary.php" id = "form5" method = "post">
            <div class = "group">
                <button type = "submit" class = "submit" form = "form5" value = "Submit">GO TO</button>
            </div>
            </form>
    </div>
    <div class = "box">
             <h1 class = "title">Absence And Overtime</h1>   
             <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/Absence.php" id = "form7" method = "post">
                <input type = "text" class = "input" id = "emCode" name = "emCode" placeholder = "EmployeeCode">
                <input type="submit" class="button" value="Absence">
            </form>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/Late.php" id = "form8" method = "post">
                <input type = "text" class = "input" id = "emCode" name = "emCode" placeholder = "EmployeeCode">
                <input type="submit" class="button" value="Late">
            </form>
            <form action = "http://localhost/VisualStudioCodeStuff/ManagerStuff/OverTime.php" id = "form9" method = "post">
                <input type = "text" class = "input" id = "emCode" name = "emCode" placeholder = "EmployeeCode">
                <input type = "number" class = "input" id = "numD" name = "numD" placeholder = "Overtimes Shift Times">
                <input type="submit" class="button" value="OverTimes">
            </form>
    </div>
    <button class = "submit"  onclick="window.location.href='http://localhost/VisualStudioCodeStuff/ManagerStuff/Home.php'">Go Back</button>
</body>
</html>