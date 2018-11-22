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
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="login-container">
        <form action="includes/login.inc.php" class="login-wrapper">
            <input type="text" name="uname" placeholder="FirstName LastName / SchoolID">
            <input type="password" name="upass">
        </form>
    </div>
</body>
</html>