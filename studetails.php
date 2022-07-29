
<?php
include('condb.php');
$regno = $_POST['regno'];
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
    <?php
$qry = "SELECT * FROM `student` WHERE `regno`='$regno'";
    
    $run = mysqli_query($con,$qry);
    
    if(mysqli_num_rows($run)>0){
        $data = mysqli_fetch_assoc($run);
    }
        ?>
        <div class="detHeader">Student Details</div>
        <table class="stuTable" align="center">
            <tr>
                <th>Name</th>
                <td align="center"><?php echo $data['fname'] ?></td>
            </tr>
            <tr>
                <th>Course</th>
                <td align="center"><?php echo $data['course'] ?></td>
            </tr>
            <tr>
                <th>Semester</th>
                <td align="center"><?php echo $data['sem'] ?></td>
            </tr>
            <tr>
                <th>Parents Contact no.</th>
                <td align="center"><?php echo $data['contact'] ?> </td>
            </tr>
            <tr>
                <th>Attendance</th>
                <td align="center"><?php echo $data['atten'] ?> </td>
            </tr>
            <tr>
                <th>Register Number</th>
                <td align="center"><?php echo $data['regno'] ?> </td>
            </tr>
            </table>
</body>
</html>