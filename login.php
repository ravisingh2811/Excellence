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
    <title>login</title>
</head>
<body>
   <?php
   
   include "index.php" ;

   if($_SERVER["REQUEST_METHOD"] == "POST"){
     
      // $email = $_POST['email'];
      $_SESSION['rnumber'] = $_POST['rnumber'];
       $rnumber = $_POST['rnumber'];
       $password= $_POST['password'];

       $sql = "SELECT * FROM form WHERE rnumber = $rnumber AND password = '$password'";

       $query = mysqli_query($con , $sql);

       $email_count = mysqli_num_rows($query);

       if ($email_count > 0){
           $email_pass = mysqli_fetch_array($query);
         // $_SESSION['id']= $email_pass['id'];
           $_SESSION['rnumber'] = $email_pass['rnumber'];
           $_SESSION['name'] = $email_pass['first name'];
          
           $_SESSION["lastname"] = $email_pass['last name'];
           $_SESSION['name2'] = $email_pass['fathers name'];
           $_SESSION["name3"] = $email_pass['mothers name'];
           $_SESSION["dateofbirth"] = $email_pass['date of birth'];
           $_SESSION["gender"] = $email_pass['gender'];
           $_SESSION["number"] = $email_pass['phone number'];
           $_SESSION["email"] = $email_pass['email'];
           $_SESSION["number2"] = $email_pass['fathers phone number'];
           $_SESSION["number3"] = $email_pass['mothers phone number'];
           $_SESSION["collegename"] = $email_pass['college name'];
           $_SESSION["year"] = $email_pass['graduation year'];

           $_SESSION["address"] = $email_pass['address'];
           header ("location: userwelcome.php");
       }
       else{
           echo "Invalid Credentials " ;
       }
      
    }
         
    


   ?>


    

    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"> <img src="img/logo[578].jpeg" alt="logo">
              <p class="name">Excellence</p>
            </div>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="admin_login.php">Admin Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>
    <?php
        
    ?>
    <form  method="POST" action = "<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        <div class="Login-box">
           <h1>
               Login
           </h1>
           <div class="textbox">
            
                 <input type="number" placeholder="Username" name="rnumber" value="">
            </div>
         <div class="textbox">
              <input type="password" placeholder="Password" name="password" value="">
         </div>

          <button class="btn" name = "SUBMIT" type="submit">Signin</button>
            <div class="link" style = "font-style: italic;
                                  font-size: 20px;
                                   padding-left: 217px;
                                   padding-top: 15px;
                                   height: 4vh;
                                   "
                                   >
            
               <a  href = "signup.php">Click to signup</a><br><br>

            </div>   
               <div class="link" style = "font-style: italic;
                                  font-size: 20px;
                                   padding-left: 217px;
                                   ">
            
                   <a  href = "recovery.php">Forget Password</a><br><br>
                </div>
        </div>
    </form>

</body>
</html>