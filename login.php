<?php
session_start();
if(isset($_SESSION['uid']))
{
   // header('location:admin/admincon.php');
}
?>
<html lang="en_US">
    <head>
        <meta charset ="UTF-8">
        <title> Admin Login </title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        
    </head>
    <body>
        <form action="login.php" method="post">
            <div class="adminlogin">
            <h1>Admin Login</h1><hr><br>
                <label for="uname">Username</label>
                <input type="text" placeholder="Username" name="uname">

                <label for="pawd">Password</label>
                <input type="password" placeholder="Password" name="pawd">

                <button type="submit" name="login">Login</button>
                <input type="button" onclick="window.location.replace('index.php')" value="Cancel" />
            </div>
        </form>
    </body>
</html>
<?php
require("condb.php");
if(isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con,$_POST['uname']);
    $password = mysqli_real_escape_string($con,$_POST['pawd']);
    
    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);
    
    if($row>=1)
    {
        $data = mysqli_fetch_assoc($run);
        $_SESSION['uid']=$data['username'];
        header('location:admin/admincontrol.php');
    } else {
        ?>
        <script>alert("Password doesn't match")</script>
        <?php
    }
}
?>