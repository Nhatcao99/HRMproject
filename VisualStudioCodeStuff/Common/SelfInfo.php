<!DOCTYPE html>
<?php
    session_start();
    $conn = new mysqli("localhost" , "root" , "" , "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $user = $_SESSION["userCode"];
    $sql = "SELECT `EmployeeCode`, `Address`, `LastName`, `FirstName`, `PhoneNumber`, `email`,
     `JobPosition`, `Gender`, `Department`, `DateOfBirth`, `IdentityNumber`, `PassportNumber`, 
    `Ethnic`, `Nationality`, `Religion`, `Marriage`, `Degree`, `University/College` FROM `employee_information` Where 
    `EmployeeCode` = '$user';";         
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
            $emCode = $row["EmployeeCode"];
            $address = $row["Address"];
            $Lname = $row["LastName"];
            $Fname = $row["FirstName"];
            $Pnum = $row["PhoneNumber"];
            $email = $row["email"];
            $Job = $row["JobPosition"];
            $Dep = $row["Department"];
            $Gen = $row["Gender"];
            $DOB = $row["DateOfBirth"];
            $IdenNum = $row["IdentityNumber"];
            $PassNum = $row["PassportNumber"];
            $Eth = $row["Ethnic"];
            $Nal = $row["Nationality"];
            $Rel = $row["Religion"];
            $Mag = $row["Marriage"];
            $Deg = $row["Degree"];
            $Uni = $row["University/College"];
    }
 ?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Self Information</title>
    <link href="../bootstrap.min.css" rel="stylesheet" />
</head>
<style>
    body {
    width: 100%;
    height: 100%;
    background-color: white;
    margin: 0;
}

#topbar {
    width: 100%;
    height: 50px;
    background-color: cyan;
}

#generalinf {
    background-color: white;
    width: 100%;
    height: 50%;
}

#contactinf {
    background-color: white;
    witdh: 100%;
    height: 50%px;
}

.box {
    background-color: white;
    width: 98px;
    height: 20px;
    align-content: center;
    font-size: small;
    margin-top: 5px;
}

img {
    float: left;
}

td {
    padding-right: 100px;
}

th {
    padding-right: 500px;
}
.back{
        background-color: Coral;
        width:15%;
        font-size:20px;
    }
</style>
<body>
    <div id="topbar">
        <img src="favicon.ico" with="50px" height="50px"> <h3> Self Information </h3>
    </div>
    <div id="generalinf">
        <h5>Information</h5>
        <table style="witdh:100%">
            <tr>
                <td>
                    <table style="witdh:100%">
                        <tr>
                            <td>Employee Code: <?php echo $emCode ?></td>
                            <td>Address: <?php echo $address ?></td>
                        </tr>
                        <tr>
                            <td>LastName:<?php echo $Lname ?> </td>
                            <td>FirstName:<?php echo $Fname ?> </td>
                        </tr>
                        <tr>
                            <td>JobPosition:<?php echo $Job ?> </td>
                            <td>Department:<?php echo $Dep ?> </td>
                        </tr>
                        <tr>
                            <td>Sex:<?php echo $Gen ?> </td>
                            <td>Birthday:<?php echo $DOB ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <hr />

        <table style="width:100%">
            <tr>
                <th style="text-align:left">IndentityNumber: <?php echo $IdenNum ?></th>
                <th style="text-align:left">Passport: <?php echo $PassNum ?></th>
            </tr>
        </table>
        <hr />
        <table style="width:100%">
            <tr>
                <td>Marriage Status:<?php echo $Mag ?> </td>
            </tr>
            <tr>
                <td>Degree:<?php echo $Deg ?> </td>
                <td>University:<?php echo $Uni ?> </td>
            </tr>
            <tr>
                <td>Ethnic:<?php echo $Eth ?> </td>
                <td>Nationality:<?php echo $Nal ?> </td>
            </tr>
        </table>
        <hr />
    </div>
    <div id="contactinf">
        <h5>Contact Information</h5>
        <table style="width:100%">
            <tr>
                <td>PhoneNumber: <?php echo $Pnum ?></td>
            </tr>
            <tr>
                <td>Email: <?php echo $email ?></td>
            </tr>
        </table>
        <hr />
    </div >
    <div align = "left">
    <button  class = "back" onclick="window.location.href='http://localhost/VisualStudioCodeStuff/Common/ChangeSelfInfp.php'">Change Profile</button>
    </div>
</body>
</html>
