<?php 
    include 'ConnectionFolder/PhpConnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "discription" content="Group project">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>CV</title>
</head>
<body>
        <h3 align = "center">CURRICULUM VITAE</h3>
        <img src = "" alt = "this is a template pic" width="180" height = "200">
    <!--CommonInform-->
    <div style = "background-color: burlywood" id = "div1">
        <h3>ContactInformation</h3>
        <table rules = "cols" cellspacing = "10">     
                <col width = "200">
                <col width = "200">
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
            <th align="center">Address</th>
            <th align="center">LastName</th>
            <th align="center">FirstName</th>
            <th align="center">PhoneNumber</th>
            <th align="center">JobPosition</th>
            <th align="center">Gender</th>
            <th align="center">Departmant</th>
            <th align="center">DateOfBirth</th>
        </tr>
        <tr>
            <th><input type = "text" value = "" readonly></th>
            <th><input type = "text" value = ""></th>
            <th><input type = "text" value = "" readonly></th>
            <th><input type = "text" value = ""></th>
            <th><input type = "text" value = "" readonly></th>
            <th><input type = "text" value = ""></th>
            <th><select>
                    <option value = "otherGen">Other</option>
                    <option value = "male">Male</option>
                    <option value = "female">Female</option>
                    </select></th>
            <th><input type = "text" value = "" readonly></th>
            <th><input type = "text" value = "" readonly></th>
        </tr>
        </table>
    </div>
        
    <!--PersonalInformation-->
    <div style="background-color:cadetblue" id = "div2">
        <h3>PersonalInformation</h3>
        <table cellspacing = "10" rules = "cols">
                <col width = "200">
                <col width = "200">
                <col width = "200">
                <col width = "200">
                <col width = "200">
                <col width = "200">
                <col width = "200">
                <col width = "200">
        <tr>
            <th align="center">IdentityNumber</th>
            <th align="center">PassportNumber</th>
            <th align="center">Ethnic</th>
            <th align="center">Nationality</th>
            <th align="center">Religion</th>
            <th align="center">Marriage</th>
                <th align="center">Degree</th>
                <th align="center">University/College</th>
        </tr>
            <th><input type = "text" value = ""></th>
            <th><input type = "text" value = ""></th>
            <th><input type = "text"></th>
            <th><input type = "text"></th>
            <th><select>
                    <option value = "reNone">None</option>
                    <option value = "reCh">Chritian</option>
                    <option value = "reBu">Buddhist</option>
                    <option value = "reMu">Muslim</option>
                    <option value = "Other">Other</option>
                </select></th>
            <th><select>
                    <option value = "marriageCom">Complicated</option>
                    <option value = "marriageMar">Married</option>
                    <option value = "marriageSin">Single</option>
                </select></th>
            <th><input type="text"></th>
            <th><input type="text"></th>
        <tr>

        </tr>
        </table>
    </div>
    
    <table width = "600" border = "1" cellspacing = "1" cellpadding = "1" >
    <tr>
        <th>EmployeeCode</th>
        <th>Address</th>
        <th>LastName</th>
        <th>FirstName</th>
        <th>PhoneNumber<th>
        <th>JobPosition</th>
        <th>Department</th>
        <th>Gender</th>
        <th>Department</th>
        <th>DateOfBirth</th>
        <th>IdentityNumber</th>
        <th>PassportNumber</th>
        <th>Ethnic</th>
        <th>Nationality</th>
        <th>Religion</th>
        <th>Marriage</th>
        <th>University/College</th>
    </tr>
    <?php
    $sql = "SELECT `EmployeeCode`, `Address`, `LastName`, `FirstName`, `PhoneNumber`, `JobPosition`, `Department` ,`Gender`, `DateOfBirth`, `IdentityNumber`, `PassportNumber`, `Ethnic`, `Nationality`, `Religion`, `Marriage`, `Degree`, `University/College` FROM `employee_information`";         
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$row["EmployeeCode"]."</td>";
            echo "<td>".$row["Address"]."</td>";
            echo "<td>".$row["LastName"]."</td>";
            echo "<td>".$row["FirstName"]."</td>";
            echo "<td>".$row["PhoneNumber"]."</td>";
            echo "<td>".$row["JobPosition"]."</td>";
            echo "<td>".$row["Department"]."</td>";
            echo "<td>".$row["Gender"]."/td";
            echo "<td>".$row["DateOfBirth"]."</td>";
            echo "<td>".$row["IdentityNumber"]."</td>";
            echo "<td>".$row["PassportNumber"]."</td>";
            echo "<td>".$row["Ethnic"]."</td>";
            echo "<td>".$row["Nationality"]."</td>";
            echo "<td>".$row["Religion"]."</td>";
            echo "<td>".$row["Marriage"]."</td>";
            echo "<td>".$row["Degree"]."</td>";
            echo "<td>".$row["University/College"]."</td>";
            echo "</tr>";
        }
    }
    ?>

    </table>
    
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
        <button onclick= "dropFunction()" class = "dropbtn"><h3>Go to:<h3></button>
            <div id = "MainDropdown" class = "dropdown-content">
                    <a href="http://localhost/VisualStudioCodeStuff/MainPage.php">MainPage</a>
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
