<?php include('server.php') ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Title</title>
    <link rel="stylesheet" href="Registration.css">
    <script  src="Registration.js" language="javascript" type="text/javascript"></script>
</head>
<body method="post">
<form>
    <div class="div1">
        <div class="div2">
            <img  class="image"  class="logo">
            <h1 class="text">Outdoor sports Connect</h1>

        </div>
        </br>
        <div>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required></br>

            <label for="password"><b>Password</b></label>
            <input type="password"  style="width:94%" placeholder="Enter Password" id="pwd" name="password"></br>

            <button type="submit">Log In</button></br>
            </br>
            <div>
                <span   class="">Don't have an account? <button type="submit" onclick = "pageNavigation()"/>sign-up </span>
            </div>
            </br>


        </div>

        <div>
            <span class=""><a href="#">Forgot password?</a></span>
        </div>
    </div>
</form>
</body>
</html>

