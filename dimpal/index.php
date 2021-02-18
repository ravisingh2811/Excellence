<?php
   $sever = "localhost";
   $username = "root";
   $password= "";
   $db = "dimapl";

   $con = mysqli_connect($sever,$username,$password , $db);

   if(!$con){
       die("connection to the database is failed due to ".mysqli_connect_error());

   }
  /* $name= $_POST['name'];
   $lastname=$_POST['lastname'];
   $name2=$_POST['name2'];
   $name3=$_POST['name3'];
   $dateofbirth=$_POST['dateofbirth'];
   $gender=$_POST['gender'];
   $number=$_POST['number'];
   $email=$_POST['email'];
   $number1=$_POST['number1'];
   $number2=$_POST['number2'];
   $collegename=$_POST['college'];
   $year=$_POST['year'];
   $address=$_POST['address'];

   $sql = "INSERT INTO `dimapl`.`form` ( `first name`, `last name`, `father's name`, `mother's name`, `date of birth`, `gender`, `phone number`, `email`, `mother's phone number`, `father's phone number`, `college name`, `graduation year`, `address`, `dd`) 
   VALUES ('$name', '$lastname', '$name2', '$name3', '$dateofbirth', '$gender', '$number', '$email', '$number1', '$number2', '$collegename', '$year', '$address', CURRENT_TIMESTAMP())";
   
   if($con->query($sql) == true){
      header("location: welcome.php");
        
   }
   else{
       echo "ERROR: $sql <br> $con->error";
    }

    $con->close();*/


?>


   