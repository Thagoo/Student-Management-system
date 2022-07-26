<?php

session_start();
if(isset($_SESSION['uid']))
{
    //session logged
}
else{
    header('location: ../login.php');
}
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Management System</title>
    <!--meta name='viewport' content='width=device-width, initial-scale=1'-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/admin.css'>
    <script src='../js/main.js'></script>
    <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
</head>
<body>
    <div class="header">
        <header>Admin Control<header/>
    </div>