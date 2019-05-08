<!--login with EmployeeNumber-->
<?php
    session_start();
    $userNumber = $_POST['userNumb'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost","root","","HRM");

    $userNumb = mysqli_real_escape_string($conn,$userNumber);
    $password = mysqli_real_escape_string($conn,$password);
    
    $result = mysqli_query($conn,"select * from Login where EmployeeNumber = '$userNumb' and password = '$password'")
    or die("failed".mysqli_error($conn));

    $row = mysqli_fetch_array($result);
    
    if ($userNumber != NULL)
    if($row['EmployeeNumber'] == $userNumber  && $row['password'] == $password)
    {
        $_SESSION["userCode"] = $userNumber;
        if($row['IsManager'] == 1)
        {
            echo "<script>window.open('http://localhost/VisualStudioCodeStuff/ManagerStuff/Home.php','_self')</script>";
        }
        if($row['IsManager'] == 0){
            echo "<script>window.open('http://localhost/VisualStudioCodeStuff/EmployeeStuff/Home.php','_self')</script>";
        }
    }else{
        echo "failed";
    }else{
        echo "failed";
    }
    

?>