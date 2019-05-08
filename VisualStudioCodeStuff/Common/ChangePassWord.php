<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChangePassWord</title>
    
</head>
<body>
    <style>
    body{
        background-image: URL("password.jpg");
        background-size: cover;
    }
    .change-password{
        width:100%;
        height:100%;
        position:absolute;
        padding:90px 70px 50px 70px;
    }
    .submit{
        width:15%;
        padding:10px;
        font-size:20px;
        background-color:#1E90FF;
    }
    .input{
        width: 60%;
        padding: 10px;
        font-size: 20px;
    }
    </style>
    <div class = "change-password">
        <h1 style="color:MediumSeaGreen;">CHANGE PASSWORD</h1>
        <form method = "post" id = "form1" class = "change" action = "http://localhost/VisualStudioCodeStuff/Common/ChangePassWordprocess.php"> 
            <div class = "group">
            <input id = "EmCode" name = "EmCode" type = "text" class = "input" placeholder = "PersonelCode">
            </div>
            <div class = "group">
            <input id = "OldPass" name = "OldPass" type = "text" class = "input" placeholder = "Old Password">
            </div>
            <div class = "group">
            <input id = "NewPass" name = "NewPass" type = "text" class = "input" placeholder = "New Password">
            </div>
            <button value = "form1" type = "submit" name = "submit" class = "submit">SUBMIT</button>
        </form>
        
    </div>
</body>
</html>