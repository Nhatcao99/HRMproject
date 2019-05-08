<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChangeSelfInFo</title>
    <link rel = "stylesheet" href = "SignUp&Login/style.css">
</head>
<body>
<style>
    body{
  margin:0;
  color:#6a6f8c;
  background:#c8c8c8;
  background-image:url("begin.jpg"); 
  background-size: cover; 
    }
  .input{
        width: 60%;
        padding: 10px;
        font-size: 20px;
    }
    .button{
        width:15%;
        padding:10px;
        font-size:20px;
        background-color:#1E90FF;
    }
</style>
<div>
    <h1>Change User Info</h1>
<form class="sign-up-htm" action="http://localhost/VisualStudioCodeStuff/EmployeeStuff/Welcome.php" method="POST">
        <div class="group">
          <input id="username" name="username" type="text" class="input" placeholder = "Username">
        </div>
        <div class="group">
          <input id="Address" name="Address" type="text" class="input" placeholder = "Address">
        </div>
        <div class="group">
          <input id="LastName" name="LastName" type="text" class="input" placeholder = "Last Name">
        </div>
        <div class="group">
          <input id="FirstName" name="FirstName" type="text" class="input" placeholder = "FirstName">
        </div>
        <div class="group">
          <h3>DateOfBirth</h3>
          <table>
          <tr>
          <th><input id="Date" name="Date" type="text" class="input" placeholder = "Date"></th>
          </tr>
          <tr>
          <th><input id="Month" name="Month" type="text" class="input" placeholder = "Month"></th>
          </tr>
          <tr>
          <th><input id="Year" name="Year" type="text" class="input" placeholder = "Year"></th>
          </tr>
          </table>
        </div>
        <div class="group">
           <input id="PhoneNumber" name="PhoneNumber" type="text" class="input" placeholder = "PhoneNumber">
        </div>
        <div class="group">
          <input id="JobPos" name="JobPosition" type="text" class="input" placeholder = "JobPosition">
        </div>
        <div class="group">
          <label for="Gen" class="label">Gender</label>
          <select id = "gender" name="gender">
            <option value = "Other">Other</option>
            <option value = "Male">Male</option>
            <option value = "Female">Female</option>
        </select>
        </div>
        <div class="group">
          <input id="Department" name="Department" type="text" class="input" placeholder = "Department">
        </div>
        <div class="group">
          <input id="email" name="email" type="text" class="input" placeholder = "Email">
        </div>
        <div class="group">
          <input id="IdentityNumber" name="IdentityNumber" type="text" class="input" placeholder = "IdentityNumber">
        </div>
        <div class="group">
          <input id="PassPortNumber" name="PassPortNumber" type="text" class="input" placeholder = "PassPort Number">
        </div>
        <div class="group">
          <input id="Ethnic" name="Ethnic" type="text" class="input" placeholder = "Ethnic">
        </div>
        <div class="group">
          <input id="Nationality" name="Nationality" type="text" class="input" placeholder = "Nationality">
        </div>
        <table>
        <th><div class="group">
        <label for="Rel" class="label">Religion</label>
          <select id = "religion" name="religion">
            <option value = "Other">Other</option>
            <option value = "Christian">Christian</option>
            <option value = "Buddhist">Buddhist</option>
            <option value = "Muslim">Muslim</option>
        </div></th>
        <th>
        <div class="group">
        <label for="Mag" class="label">Marriage</label>
          <select id = "marriage" name="marriage">
            <option value = "married">Married</option>
            <option value = "single">Single</option>
        </div></th></div>
    </table>
        <div class="group">
          <input id="Degree" name="Degree" type="text" class="input" placeholder = "Degree">
        </div>
        <div class="group">
          <input id="university" name="university" type="text" class="input" placeholder = "University">
        </div>
        <div class="group">
          <input type="submit" class="button" value="SUBMIT">
        </div>
</div>
</body>
</html>