<?php
require('head.php');

?>
    <div class="form-adm">
  <p id="eyd">Enter Student Details</p><hr><br>
  <form action="insert.php" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="regno">Register Number</label>
    <input type="text" id="regno" name="regno" placeholder="Register Number">

    <label for="course">Select Course</label>
    <select id="course" name="course">
    <option value="" disabled selected>Select your option</option>
      <option value="Bachelor of Computer Applications">B.C.A</option>
      <option value="Bachelor of Commerce">B.Com</option>
      <option value="Bachelor of Arts">B.A</option>
    </select>
  
    <label for="sem">Select Semester</label>
    <select id="sem" name="sem">
    <option value="" disabled selected>Select your option</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>

    <label for="contact">Contact</label>
    <input type="text" name="contact" id="contact" placeholder="Contact..">

    <label for="atten">Attendance</label>
    <input type="text" name="atten" id="atten" placeholder="Attendance..">

    <input type="submit" value="Submit" name="submit"><br>
  </form>
</div>
</body>
</html>
<?php
require('../condb.php');
if(isset($_POST['submit'])){
    $regno = $_POST['regno'];
    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $course = $_POST['course'];
    $sem = $_POST['sem'];
    $atten = $_POST['atten'];
    $qry = "INSERT INTO `student` (`fname`, `contact`, `course`, `sem`, `regno`, `atten`) VALUES ('$fname','$contact','$course','$sem','$regno','$atten')";
    //$qry = "INSERT INTO `student` (`fname`, `contact`, `course`, `sem`, `regno`, `atten`) VALUES (?,?,?,?,?,?)";
    //$stmt->prepare($qry);
    //$stmt->bind_param("ssssss", $fname,$contact,$course,$sem,$regno,$atten);
    //$stmt->execute();
    $ins = mysqli_query($con, $qry);
    if($ins === TRUE){
        ?>
        <script>
            alert('Data Inserted Successfully');
        </script>
        <?php
    }
    else {
      $failure = "Error" . mysqli_error($con);
      echo $failure;
    }
}
?>
