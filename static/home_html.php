﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    
<head>
    <meta charset="utf-8" />
    <title>Home - Project Manager </title>
    <script type="text/javascript" src="../styles/login_js.js"></script>
    <link rel="stylesheet" href="../styles/home_css.css">
</head>

<body>

    <div class = "bg">

        <h1> Login </h1>

        <form method="post" action="../back/login_validation.php">

                <input type="text" id="email" name="email" placeholder="email"><br>
                <input type="password" id="pass" name="pass" placeholder="password" >


                <div class = "login_but">
                    <input class="login_but" type="submit" value="Submit">
                </div>

        </form>
        
                <div class="forget">
                    <input class="forget" type="button" value="Forget Password.">
                </div>

    </div>

</body>
</html>