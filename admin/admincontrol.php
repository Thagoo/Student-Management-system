<?php

session_start();
if(isset($_SESSION['uid']))
{
    //session logged
}
else{
    header('location: ../login.php');
}
 