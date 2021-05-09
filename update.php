
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Update</title>
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
    <div class="header">
        <h1>
            Personal details
        </h1>
     
    </div>
<form method="POST" action=""  >  
    <div class="details" >
    <?php
include "index.php";

  $id = $_GET['id'];
  $showquery = "SELECT * FROM form where id=$id ";
  $showdata = mysqli_query($con , $showquery);
  $arrdata = mysqli_fetch_array($showdata);
 
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
  // $password = mysqli_real_escape_string($con,$_POST['password']);
   //$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

    //$pass = password_hash($password,PASSWORD_BCRYPT);
    //$cpass = password_hash($cpassword,PASSWORD_DEFAULT)
    $token = bin2hex(random_bytes(15));
 

            
             $sql = "UPDATE form SET `first name`= '$name',`last name`='$lastname',
            `fathers name`= '$name2',`mothers name`= '$name3',`date of birth`='$dateofbirth',
             `gender` = '$gender', `phone number`= '$number', `email`='$email',`mothers phone number`='$number1',
            `fathers phone number`='$number2',`college name`='$collegename',`graduation year`= '$year',
             `address`='$address'where `id` = $id";
              $iquery = mysqli_query($con , $sql);

             if($con->query($sql) == true){
                  $_SESSION['rnumber'] = "$rnumber";
                  
                  header("location: list_registeration.php");
                

                   }
                else{
                    echo "ERROR: $sql <br> $con->error";
                  }
                  $con->close();
    

   
}


?>
            
            <strong>Application number:</strong>
            <input type="number" name="rnumber" class="pname" value = "<?php echo $arrdata['rnumber'];?>" id="rnumber" placeholder="Application number" required ><br><br>
            <strong>First Name:</strong>
            <input type="text" name="name" value = "<?php echo $arrdata['first name'];?>" class="pname" value = "<?php  ?>" id="first name" placeholder="First Name" required >
            <strong>Last Name:</strong>
            <input type="text" name="lastname" value = "<?php echo $arrdata['last name'];?>" class="pname" id="lastname" placeholder="Last Name" ><br><br>
            <strong>Father's Name:</strong>
            <input type="text" name="name2" value = "<?php echo $arrdata['fathers name'];?>" class="pname" id="fathersname" placeholder="Father's Name" ><br><br>
            <strong>Mother's Name:</strong>
            <input type="text" name="name3" class="pname" value = "<?php echo $arrdata['mothers name'];?>" id="mothersname" placeholder="Mother's Name" ><br><br>
            <strong>Date of birth:</strong>
            <input type="text" name="dateofbirth" class="pname" value = "<?php echo $arrdata['date of birth'];?>" id="dateofbirth" placeholder="DD.MM.YYYY" ><br><br>
            <strong>Gender:</strong>
            <input type="text" name="gender" value = "<?php echo $arrdata['gender'];?>" class="pname" id="gender" placeholder="Male/Female" ><br><br>
    </div>
      <div class="header">
             <h2>
                   Contact details
                </h2>
      </div>   
          <div class="details">
            
            <strong>Phone Number:</strong>
            <input type="number" name="number" value = "<?php echo $arrdata['phone number'];?>" class="pname" id="phonenumber" placeholder="Phone Number" ><br><br>
            <strong>Email:</strong>
            <input type="email" name="email" class="pname"value = "<?php echo $arrdata['email'];?>" id="email" placeholder="Email"required><br><br>
            <strong>Father's Phone Number:</strong>
            <input type="number" name="number1" class="pname"value = "<?php echo $arrdata['fathers phone number'];?>" id="fathersphonenumber"  placeholder= " Father's Phone Number"  ><br><br>
            <strong>Mother's Phone Number:</strong>
            <input type="number" name="number2" class="pname"value = "<?php echo $arrdata['mothers phone number'];?>" id="mothersphonenumber" placeholder="Mother's Phone Number" ><br><br>
            <strong>College Name/University Name:</strong>
            <input type="text" name="college" class="pname"value = "<?php echo $arrdata['college name'];?>" id="collegename" placeholder="College Name" ><br><br>
            <strong>Graduation year:</strong>
            <input type="number" name="year" class="pname"value = "<?php echo $arrdata['graduation year'];?>" id="gradauationyear" placeholder="YYYY"><br><br>
            <strong>Address:</strong>
            <input type="text" name="address" class="pname"value = "<?php echo $arrdata['address'];?>" id="address" placeholder="type your Address..."><br><br>
           
         </div>
        

        <div class="g-recaptcha" data-sitekey = "6LcoH1kaAAAAAMuzlGx-pM_aozzeiD1jPd2Zif3T" required></div>
           <button class="btn_submit"  name = "SUBMIT">UPDATE</button>

        
</form>
      
    
</body>
</html>