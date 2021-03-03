<?php
 include "index.php";

 $id = $_GET['id'];
 $deletequery = "DELETE  from form where id ='$id'";

 $query = mysqli_query($con , $deletequery);
 if($con->query($deletequery) == true){
    ?>
    <script>
    alert ('Successfully Deleted');
  </script>
  <?php

   header("location: list_registeration.php");
 }else{
     ?>
     <script>
     alert ('Error occured');
   </script>
   <?php
 }
?>