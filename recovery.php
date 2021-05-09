<?php

session_start();
include "index.php";
if(isset($_POST['SUBMIT'])){

    $email=mysqli_real_escape_string($con,$_POST['email']);

    $emailquery = "SELECT * FROM form where email = '$email'";
    $query = mysqli_query($con , $emailquery);
 
    $emailcount =mysqli_num_rows($query);
   if($emailcount>0){
       $userdata = mysqli_fetch_assoc($query);
       $username = $userdata['first name'];

       $token = $userdata['token'];

       $subject = "Password Recovery";
       $body = "Hi, $username. Click here to reset your password
       http://localhost/dimpal/reset_password.php?token=$token";
       $sender_email = "From: kinetic2811@gmail.com";
       if(mail($email , $subject , $body , $sender_email )){
           echo "check your mail to reset your password $email";

       }
       else {
           echo "email sending fail.... ";
       }

   } else {
       echo "invald email";
   }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Password recovery</title>
</head>
<body>
<form  method="POST" action = "<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        <div class="forget-box" style = "max-width: 24%;
                                       height: 50%;
                                       top: 42%;
                                       left: 50%;
                                       position: absolute;
                                       transform: translate(-50% , -50%);
                                       padding: 60px 40px 50px 40px;
                                       background: rgb(243, 241, 241);
                                       ">
           <h1>
               Forget password
           </h1>
           <div class="textbox">
            
                 <input type="email" placeholder="email" name="email" value="">
            </div>
         

          <button class="btn" name = "SUBMIT" type="submit">Send Email</button>
           
        
        </div>
    </form>
</body>
</html>