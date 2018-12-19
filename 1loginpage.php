<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="background">
    <div class="login-container">
        <form action="includes/login.inc.php" class="login-wrapper" method="POST">
            <p class="main-title">Central Philippine University</p><br>
            <p class="main-title">Senior High School</p><br>
            <!--if there has an error-->
            <div class="correct-container" id="correct-content">
                <p></p>
            </div>
            <p class="sub-title">Name :</p>
            <input type="text" name="uname" placeholder="First Last Name / School ID">
            <p class="sub-title">Password :</p>
            <input type="password" name="upass" placeholder="Password"><br>
            <button type="submit" name="login-submit">Log In</button><br>
            <a href="#"><i class="material-icons">arrow_forward</i> Forgot Password</a><br>
            <a href="#"><i class="material-icons">arrow_forward</i> Create Account </a>
        </form>
    </div>
</body>
</html>