<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SignIn</title>
  <link rel="stylesheet" href="SignUp&Login/style.css">
</head>
<body>
  <style>
    body{
  margin:0;
  color:#6a6f8c;
  background:#c8c8c8;
  background-image:url("SignUp&Login/loginPic.jpg"); 
  background-size: cover; 
  
  font:600 16px/18px 'Open Sans',sans-serif;
}
.input{
  width: 60%;
        padding: 10px;
        font-size: 20px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: red;
}
  </style>
  <div class = "login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
    <div class="login-form">
      <form class="sign-in-htm" action="http://localhost/VisualStudioCodeStuff/SignUp&Login/process.php" method="POST">
        <div class="group">
          <input id="userNumb" name="userNumb" type="text" class="input" placeholder = "UserNumber">
        </div>
        <div class="group">
          <input id="password" name="password" type="password" class="input" data-type="password" placeholder = "Password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
        <a href="http://localhost/VisualStudioCodeStuff/Common/ChangePassWord.php">Change PassWord</a>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>