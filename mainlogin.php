<?php 
    include("connection.php");
    include("signup.php");
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="color:black;">
  <img src="globe.png" class="im" height="80px" width="80px" style="position: absolute;">
    
    <h1  style="margin-top: 50px; color: aquamarine;">Music Streaming</h1>
    <link rel="stylesheet" type="text/css" href="log.css">
    <div class="login-container" style="width: 600px; padding:50px;margin-top:100px;">
        <h2>LOGIN</h2>
        <form id="login-form" action="login.php" method="post">
            <b>Username:&nbsp</b>
            <input type="text" id="username" name="user" required placeholder="eg.username123">
            <br>
            <b>Password:</b>&nbsp
            <input type="password" id="password" name="pass" required placeholder="min 8 characters required">
            <br><br><br>
            
           <input type="submit" style="background-color: #32d472;color: rgb(0, 0, 0);text-decoration:unset;border-radius: 4px;padding:13px 90px;" value="Login" name = "submit"/><br><br>
            <h5 align="center">Don't have an account? <a style="color:darkblue;" href="index.php">Signup</a></h5>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  
</html>