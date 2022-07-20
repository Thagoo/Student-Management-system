<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Management System</title>
    <!--meta name='viewport' content='width=device-width, initial-scale=1'-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='js/main.js'></script>
    <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Top Navigation Menu -->
<div class="topnav">
<ul id="menu">
    <li><a id="logo" href="home">Student Management System</a></li>
    <li><a id="about" href="#about">About</a></li>
    <li><a id="login" href="#login.php">Admin login</a></li>
</ul>
  
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links >
  <a href="javascript:void(0);" class="icon" onclick="showMenu()">
    <i class="fa fa-bars"></i>
 </a-->
 </div>

<div class="form-stu">
  <p id="eyd">Enter Your Details</p><br>
  <form action="index.php">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="regno">Register Number</label>
    <input type="text" id="regno" name="regno" placeholder="Register Number">

    <label for="course">Select Course</label>
    <select id="course" name="course">
      <option value="bca">B.C.A</option>
      <option value="bcom">B.Com</option>
      <option value="ba">B.A</option>
    </select>
  
    <label for="sem">Select Semester</label>
    <select id="sem" name="course">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>

    <input type="submit" value="Submit"><br>
  </form>
</div>
<?php

if(isset($_POST['submit'])){
    
    $standard= $_POST['course'];
    $rollno = $_POST['regno'];
    
    include('condb.php');
    
    showdetails($course,$regno);   
}
?>

</body>
</html>