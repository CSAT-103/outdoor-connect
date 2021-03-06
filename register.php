<?php include('server.php') ?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Registration.css">
    <script  src="Registration.js" language="javascript" type="text/javascript"></script>
</head>
<body onload="loadFunction()">
<div id="myModal" class="modal">
    <div>
        <span>&times;</span>
        <p>Registration successful</p>
    </div>

</div>
<div id="div1" class="div1">

    <p class="text">Register here!</p></br>
    <input id="email" type="text" placeholder="Your email address here" name="email" required></br>
    <button class="button">Reset Now</button></br>

    <form action="connection.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname">
    <label for="fname">Second Name</label>
    <input type="text" id="sname" name="secondname">
    <label for="password">Password</label>
    <input type="password" id="pwd" name="password" required>
    <label for="cpwd">Confirm Password</label></br>
    <input type="password" id="cpwd" name="cpassword" onchange="checkConfirmPassword()">
    <span id="error"></span>
    <label for="gender">Gender</label>
    <select id="gender" name="gender">
        <option value="female">Female</option>
        <option value="male">Male</option>

    </select>
    <label for="dob">DOB:</label>
    <input type="date" id="datepicker" name="dob">
    <label for="Type_of_sports">Type of sports</label>
    <select id="sports" name="sports">
        <option value="scuba">Scuba Diving</option>
        <option value="sailing">Sailing</option>
        <option value="skateboarding">Skateboarding</option>
        <option value="skydiving">Skydiving</option>
        <option value="off_Road_Motor_Sports">Off Road Motor Sports</option>
        <option value="horse_riding">Horse riding</option>
        <option value="golf">Golf </option>
        <option value="flying">Flying </option>

    </select>
    <!-- <input type="submit" value="Register Now" onclick="registerValues()"/> -->
    <button type="submit" class="btn" name="reg_user">Register</button>
</form>
</div>
</body>
</html>