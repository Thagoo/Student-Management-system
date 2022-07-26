<?php
   // connect to mysql
   $con = mysqli_connect('localhost','thagoo','','sms');
   if($con == false) {
      echo "<script type='text/javasccript'>alert('Connection to database unsuccessful');</script>";
   }
?>