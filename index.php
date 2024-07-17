<?php 
    include("connection.php");
    include("signup.php")
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
  <body style="background-image: url(Backg.jpg);background-size:cover;font-family: Arial, sans-serif;">
  <br>
  <img src="globe.png" class="im" height="80px" width="80px" style="position: absolute;margin-left:33%;margin-top:-19px;">
    
    <h1  style="color: aquamarine;margin-top:100px position:absolute;">Music Streaming</h1>
      <div id="form">
            <h1 id="heading">SignUp</h1><br>
            <form name="form" action="signup.php" method="POST">
                <i class="fa fa-user fa-lg"></i>
                <input type="text" id="user" name="user" placeholder="Enter Username" required></br></br>
                <i class="fa-solid fa-envelope fa-lg"></i>
                <input type="email" id="email" name="email" placeholder="Enter Email" required></br></br>
                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" id="pass" name="pass" placeholder="Create Password" required></br></br>
                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required></br></br>
                <input type="submit" id="btn" value="SignUp" name = "submit"/><br><br>
                <a href="mainlogin.php" id="btn" style="text-decoration:none;">Signin</a>
            </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>