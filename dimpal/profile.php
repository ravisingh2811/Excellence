<?php
session_start();

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Profile</title>
</head>
<body>
<nav class="navbar background h-nav-resp">
    <ul class="nav-list v-class-resp">
        <div class="logo"> <img src="img/logo[578].jpeg" alt="logo">
          <p class="name">Excellence</p>
        </div>
        <li><a href="userwelcome.php">Home</a></li>
        <li><a href="profile.php">profile</a></li>
        <li> <a href="logout.php">Logout</a></li>
      
    </ul>
     
  </nav>
<div class="profile"  style = "font-size : 20px;">
      <div class="header">
       <H1>Personal details<H1>
      </div>
      <div class="details" >
      <strong>First Name:</strong>
        <?php
          echo $_SESSION['name'];
          ?>
        <strong>Last Name:</strong><?php
          echo $_SESSION["lastname"];
          ?><br>
        <strong>Father's Name:</strong><?php
            echo $_SESSION['name2'];
          ?><br>
        <strong>Mother's Name:</strong><?php
          echo $_SESSION['name3'];
          ?><br>
        <strong>Date of birth:</strong><?php
          echo $_SESSION['dateofbirth'];
          ?><br>
        <strong>Gender:</strong><?php
          echo $_SESSION['gender'];
          ?><br>
        <div class="header">
          <H1>Contact details<H1>
        </div>
         <strong>Phone Number:</strong><?php
          echo $_SESSION['number'];
            ?><br>
           <strong>Email:</strong><?php
          echo $_SESSION['email'];
           ?><br>
          <strong>Father's Phone Number:</strong><?php
          echo $_SESSION['number2'];
          ?><br>
          <strong>Mother's Phone Number:</strong><?php
           echo $_SESSION['number3'];
             ?><br>
          <strong>College Name/University Name:</strong><?php
            echo $_SESSION['collegename'];
             ?><br>
          <strong>Graduation year:</strong><?php
            echo  $_SESSION['year'];
             ?><br>
          <strong>Address:</strong><?php
           echo $_SESSION['address'];
             ?><br>
      </div>

         


    </div>
</body>
</html>