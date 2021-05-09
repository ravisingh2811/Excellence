<?php
session_start();
$rnumber = rand();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>sign up</title>
</head>
<body><?php
include "index.php";
if(isset($_POST['SUBMIT'])){
  // $rnumber = mysqli_real_escape_string($con,$_POST['rnumber']);
   $name= mysqli_real_escape_string($con, $_POST['name']);
   $lastname=mysqli_real_escape_string($con,$_POST['lastname']);
   $name2=mysqli_real_escape_string($con,$_POST['name2']);
   $name3=mysqli_real_escape_string($con,$_POST['name3']);
   $dateofbirth=mysqli_real_escape_string($con,$_POST['dateofbirth']);
   $gender=mysqli_real_escape_string($con,$_POST['gender']);
   $number=mysqli_real_escape_string($con,$_POST['number']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $number1=mysqli_real_escape_string($con,$_POST['number1']);
   $number2=mysqli_real_escape_string($con,$_POST['number2']);
   $collegename=mysqli_real_escape_string($con,$_POST['college']);
   $year=mysqli_real_escape_string($con,$_POST['year']);
   $address=mysqli_real_escape_string($con,$_POST['address']);
   $password = mysqli_real_escape_string($con,$_POST['password']);
   $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

    //$pass = password_hash($password,PASSWORD_BCRYPT);
    //$cpass = password_hash($cpassword,PASSWORD_DEFAULT)
    $token = bin2hex(random_bytes(15));
   $emailquery = "SELECT * FROM form where email = '$email'";
   $query = mysqli_query($con , $emailquery);

   $emailcount =mysqli_num_rows($query);
   
   

   if($emailcount>0){
   
       echo "alredy pressent";
    }
    else{
        if($password == $cpassword){
            
             $sql = "INSERT INTO form ( `rnumber` , `first name`, `last name`, `fathers name`, `mothers name`, `date of birth`, `gender`, `phone number`, `email`, `mothers phone number`, `fathers phone number`, `college name`, `graduation year`, `address`, `password` , `cpassword`,`token`, `dd`) 
             VALUES ( '$rnumber', '$name', '$lastname', '$name2', '$name3', '$dateofbirth', '$gender', '$number', '$email', '$number1', '$number2', '$collegename', '$year', '$address', '$password', '$cpassword', '$token', CURRENT_TIMESTAMP())";
             $iquery = mysqli_query($con , $sql);
            // $_SESSION['name'] = "$name";
          //   $_SESSION['lastname'] = "$lastname";     
            // $_SESSION['name2'] = "$name2";
            // $_SESSION['name3'] = "$name3";
            // $_SESSION['dateofbirth'] = "$dateofbirth";
            // $_SESSION['gender'] = "$gender";
            // $_SESSION['number'] = "$number";
            // $_SESSION['email'] = "$email";
            // $_SESSION['number1'] = "$number1";
            // $_SESSION['number2'] = "$number2";
            // $_SESSION['college'] = "$collegename";
            // $_SESSION['year'] = "$year";
            // $_SESSION['address'] = "$address";


             if($iquery){
                  $_SESSION['rnumber'] = "$rnumber";
                  
              // $_SESSION['name'] = "$name";
              // $_SESSION['lastname'] = "$lastname";
              // $_SESSION['name2'] = "$name2";
              // $_SESSION['name3'] = "$name3";
              // $_SESSION['dateofbirth'] = "$dateofbirth";
              // $_SESSION['gender'] = "$gender";
              // $_SESSION['number'] = "$number";
               $_SESSION['email'] = "$email";
              // $_SESSION['number1'] = "$number1";
              // $_SESSION['number2'] = "$number2";
              // $_SESSION['college'] = "$collegename";
              // $_SESSION['year'] = "$year";
              // $_SESSION['address'] = "$address";
                      $subject = "Email Verification";
                      $body = "Hi , $name. Please click here to verify your email and know <br>your application number
                      http://localhost/dimpal/welcome.php";
                      $headers = "From: kinetic2811@gmail.com";
                      if(mail($email , $subject , $body , $headers)){
                          echo "email send";
                      }else {
                          echo "email sending failed";
                      }
    
                        header("location: email_verfiy.php");
                       die;

                   }
                else{
                    echo "ERROR: $sql <br> $con->error";
                  }
                  $con->close();
                 
        } else{
            echo "not";
        }
 
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
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>
    <div class="header">
        <h1>
            Personal details
        </h1>
     
    </div>
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?> "  >  
    <div class="details" >
            
            <strong>First Name:</strong>
            <input type="text" name="name" class="pname" id="first name" placeholder="First Name" required >
            <strong>Last Name:</strong>
            <input type="text" name="lastname" class="pname" id="lastname" placeholder="Last Name" ><br><br>
            <strong>Father's Name:</strong>
            <input type="text" name="name2" class="pname" id="fathersname" placeholder="Father's Name" ><br><br>
            <strong>Mother's Name:</strong>
            <input type="text" name="name3" class="pname" id="mothersname" placeholder="Mother's Name" ><br><br>
            <strong>Date of birth:</strong>
            <input type="text" name="dateofbirth" class="pname" id="dateofbirth" placeholder="DD.MM.YYYY" ><br><br>
            <strong>Gender:</strong>
            <input type="text" name="gender" class="pname" id="gender" placeholder="Male/Female" ><br><br>
    </div>
      <div class="header">
             <h2>
                   Contact details
                </h2>
      </div>   
          <div class="details">
            
            <strong>Phone Number:</strong>
            <input type="number" name="number" class="pname" id="phonenumber" placeholder="Phone Number" ><br><br>
            <strong>Email:</strong>
            <input type="email" name="email" class="pname" id="email" placeholder="Email"required><br><br>
            <strong>Father's Phone Number:</strong>
            <input type="number" name="number1" class="pname" id="fathersphonenumber"  placeholder= " Father's Phone Number"  ><br><br>
            <strong>Mother's Phone Number:</strong>
            <input type="number" name="number2" class="pname" id="mothersphonenumber" placeholder="Mother's Phone Number" ><br><br>
            <strong>College Name/University Name:</strong>
            <input type="text" name="college" class="pname" id="collegename" placeholder="College Name" ><br><br>
            <strong>Graduation year:</strong>
            <input type="number" name="year" class="pname" id="gradauationyear" placeholder="YYYY"><br><br>
            <strong>Address:</strong>
            <input type="text" name="address" class="pname" id="address" placeholder="type your Address..."><br><br>
            <strong>password:</strong>
            <input type="password" name="password" class="pname" id="password" placeholder="password" required><br><br>
            <strong>Confirm password:</strong>
            <input type="password" name="cpassword" class="pname" id="cpassword" placeholder="confirm password" required><br><br>
         </div>
        

        <div class="g-recaptcha" data-sitekey = "6LcoH1kaAAAAAMuzlGx-pM_aozzeiD1jPd2Zif3T" required></div>
           <button class="btn_submit"  name = "SUBMIT"> SUBMIT</button>

        
</form>
      
    
</body>
</html>