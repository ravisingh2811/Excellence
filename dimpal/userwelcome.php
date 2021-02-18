<?php
session_start();
include "index.php";
//$id = $_SESSION['id'];
//$selectquery = "SELECT FROM form where id = '$id'";
//$get = mysqli_query($con , $selectquery);
//$get2 = mysqli_fetch_assoc($get);


//$email = $get2['email'];
//$_SESSION = $get2['name2'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>user welcome</title>
</head>
<body>
  <nav class="navbar background h-nav-resp">
    <ul class="nav-list v-class-resp">
        <div class="logo"> <img src="img/logo[578].jpeg" alt="logo">
          <p class="name">Excellence</p>
        </div>
        <li><a href="index.html">Home</a></li>
        <li><a href="userwelcome.php">profile</a></li>
        <li> <a href="logout.php">Logout</a></li>
      
    </ul>
     
  </nav>
  <div class="welcome" style ="  border: 8px solid whitesmoke;
                                    background: #ecdbdb;
                                    height: 150px;
                                    margin: 50px;
                                    padding-left:35%;
                                    padding-top:50px;
                                    margin-top:30px;">
        <H2>Your Application Number Is:<H2>
        <?php
          echo $_SESSION["rnumber"];
          //echo $get2['name2'];
          echo $_SESSION['name2'];


        ?>
    </div>    

    <div class="profile"  style = "font-size : 20px;">
      <div class="header">
       <H1>Personal details<H1>
      </div>
      <div class="details" >
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