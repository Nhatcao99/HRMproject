<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!--This is a table to see a person in the company attribute , certain people may have authority over this-->
<body>
    <h3 align = "center">Employee Table</h3>
    <div style = "background: beige">
        <table cellspacing = "10" , rules = "all">
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
                <th align="center">Gender</th>
                <th align="center">DateOfBirth</th>
                <th align="center">JobPosition</th>
                <th align="center">Department</th>
                <th align="center">PhoneNumber</th>
                <th align="center">Email</th>
            </tr>
            <tr>
                <th align="center"><input type = "text" readonly></th>
                <th align="center"><input type = "text" readonly></th>
                <th align="center"><select>
                    <option value = "Other">Other</option>
                    <option value = "Male">Male</option>
                    <option value = "Female">Female</option>
                </select></th>
                <th align="center"><input type = "text" readonly></th>
                <th align="center"><input type = "text" readonly></th>
                <th align="center"><input type = "text" readonly></th>
                <th align="center"><input type = "text" readonly></th>
                <th align="center"><input type = "text" readonly></th>
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