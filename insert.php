<?php
$enroll = $_POST["enroll"];
$name = $_POST["name"];
$fathername = $_POST["fathername"];
$program = $_POST["program"];
$batch = $_POST["batch"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$mysqli = mysqli_connect("localhost", "root", "", "student_university") or die ("Connection Error");
$test = $mysqli->query("select * from student where enroll = '$enroll' ");
$test = $test->fetch_assoc();
if ($test['enroll']==$enroll) {
  echo '<script type="text/javascript"> alert("Record Could Not Be Inserted. Enrollment Number Already Exists.");</script>';
  header("refresh:0; url=insert.html");
}
else {
  $mysqli->query("insert into student values('$enroll','$name','$fathername','$program','$batch','$dob','$email','$mobile')") or die ("Connection Error");
  echo '<script type="text/javascript"> alert("New Record Inserted.");</script>';
  header("refresh:0; url=dashboard.html");
}
?>
