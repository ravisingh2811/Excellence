<?php
session_start();

?>




<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <l<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"> <img src="img/logo[578].jpeg" alt="logo">
              <p class="name">Excellence</p>
            </div>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>
    <div class="welcome" style ="  border: 8px solid whitesmoke;
                                    background: #ecdbdb;
                                    height: 230px;
                                    margin: 50px;
                                    padding-left:35%;
                                    padding-top:50px;
                                    margin-top:30px;">
        <H2>Thank you for Submitting the form<br>
        Your Email is your User name<br>
        Your date of birth is password
        <?php
        //$rnumber = rand();
        //echo $rnumber;
          echo $_SESSION["rnumber"];

        ?>
    
        </H2>
        <a  href = "login.php">Click to login</a><br><br>
    </div>

</body>
</html>   