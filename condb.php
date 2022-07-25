<?php
   // connect to mysql
   $con = mysqli_connect('localhost','thagoo','','sms');
   if($con == false) {
      echo "Connection to database unsuccessful";
   }
?>