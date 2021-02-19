<?php
session_start();
ob_start();
include "index.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>reset_password</title>
</head>
<?php
if(isset($_POST['SUBMIT'])){

    if(isset($_GET['token'])){
       
        $token = $_GET['token'];

        $password = mysqli_real_escape_string($con,$_POST['password']);
        $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
        
        
        if($password == $cpassword){
            $updatequery = "update form set password = '$password' where token = '$token' ";
            $iquery = mysqli_query($con , $updatequery);

            if($iquery){
                header('location: after_reset.php');
                //echo "your passsword is updated ";
            }else{
                echo "your password is not updated";
            }
        } else {
            echo "Password are not matching";

        }

    } else{
        echo "no email found";
      }
}



?>
<body>
<form  method="POST" action = "">
        <div class="Login-box"style= " top: 42%; max-width: 21%">
           <h1>
               Reset Password
           </h1>
           <div class="textbox">
            
                 <input type="password" placeholder="Password" name="password" value="">
            </div>
         <div class="textbox">
              <input type="password" placeholder="Confirm Password" name="cpassword" value="">
         </div>

          <button class="btn" name = "SUBMIT" type="submit">Reset Password</button>
             
              
        </div>
    </form>
</body>
</html>