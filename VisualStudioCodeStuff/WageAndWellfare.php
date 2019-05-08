<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SalaryManagerView</title>
</head>
<body>
    <h3 align = "center">Salary Per Month</h3>
    <div style="background-color:lavender">
        <table rules = "all" cellspacing = "10">
            <col width = "200">
            <col width = "200">
            <col width = "200">
            <col width = "200">
            <col width = "200">
            <col width = "200">
            <col width = "200">
            <col width = "200">
            <tr>
                <th align="center">EmployeeCode</th>
                <th align="center">FullName</th>
                <th align="center">JobPosition</th>
                <th align="center">Department</th>
                <th align="center">CommonWage</th>
                <th align="center">Bonus</th>
                <th align="center">Paid</th>
            </tr>
            <!--Intend a dropdown and input list inside EmployeeCode Collumn , return all information of Salary aboue the Empoyee chosen-->
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><select>
                    <option id = "UnPaid">UnPaid</option>
                    <option id = "Paid">Paid</option>
                </select></th>
            </tr>
        </table>
    </div>
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
    <div class = "dropdown">
        <button onclick= "dropFunction()" class = "dropbtn"><h3>Go to:<h3>
        </button>
            <div id = "MainDropdown" class = "dropdown-content">
                    <a href="http://localhost/VisualStudioCodeStuff/MainPage.php">MainPage</a>
                    <a href="http://localhost/VisualStudioCodeStuff/EmployeeInformation.php">EmployeeInformation</a>
                    <a href="http://localhost/VisualStudioCodeStuff/AbsenceMail.php">AbsenceMail</a>
                    <a href="http://localhost/VisualStudioCodeStuff/EmployeeMangement.php">EmployeeMangement</a>
            </div>
    </div>
    <script>
        function dropFunction(){
            document.getElementById("MainDropdown").classList.toggle("show");
        }
    </script>
</body>
</html>