<?php
    session_start();
    $conn = new mysqli("localhost" , "root" , "" , "HRM");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $user = $_SESSION["userCode"];
    $result = mysqli_query($conn,"SELECT `EmployeeCode`, `basic`, `bonus`,
                 `Insurance`, `Total Net` FROM `salary` WHERE `EmployeeCode` = '$user'");
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
                $EmCode = $row["EmployeeCode"];
                $basic = $row["basic"];
                $bonus = $row["bonus"];
                $Insurance = $row["Insurance"];
                $TotalNet = $row["Total Net"];
    }
    $result1 = mysqli_query($conn,"SELECT  `absence_allow`, `late_allow` FROM `absence_bonus` WHERE `emID` = '$user'");
    $row1 = mysqli_fetch_assoc($result1);
    $ab_allow = $row1["absence_allow"];
    $la_allow = $row1["late_allow"];
    $result2 = mysqli_query($conn,"SELECT `Total` FROM `moneyPaid` WHERE `EmployeeCode` = '$user'");
    $row2 = mysqli_fetch_assoc($result2);
    $InAccount = $row2["Total"];
 ?>
 <!DOCTYPE html>
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
.title{
    background-color: hsl(14, 100%, 53%);
}
</style>
<body>
    <div id="topbar">
        <img src="favicon.ico" with="50px" height="50px"> <h3>Salary And Absence</h3>
    </div>
    <div id="generalinf">
        <h5 class = "title">Salary</h5>
        <table style="witdh:100%">
            <tr>
                <td>
                    <table style="witdh:100%">
                        <tr>
                            <td><h1>Employee Code: <?php echo $user ?></h1></td>
                        </tr>
                        <tr>
                            <td><h1>Basic Salary:<?php echo $basic ?></h1> </td>
                            <td><h1>Bonus Salary:<?php echo $bonus ?></h1> </td>
                        </tr>
                        <tr>
                            <td><h1>Insurance:<?php echo $Insurance ?></h1> </td>
                            <td><h1>Total Net:<?php echo $TotalNet?></h1> </td>
                        </tr>
                        <tr>
                            <td><h1>Money In Account:<?php echo $InAccount ?></h1> </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <hr />
        <h5 class = "title">Sick Leave</h5>
        <table style="width:100%">
            <tr>
                <th style="text-align:left"><h1>Number Of Absence Allowed: <?php echo $ab_allow ?></h1></th>
                <th style="text-align:left"><h1>Number Of Late Allowed: <?php echo $la_allow ?></h1></th>
            </tr>
        </table>
        <hr />
    </div>
</body>
</html>
