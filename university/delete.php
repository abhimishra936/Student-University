<?php
$enroll = $_POST["enroll"];
$mysqli = mysqli_connect("localhost", "root", "", "student_university") or die ("Connection Error");
$test = $mysqli->query("select * from student where enroll = '$enroll' ");
$test = $test->fetch_assoc();
if ($test['enroll']==$enroll) {
  $mysqli->query("delete from student where enroll='$enroll'") or die ("Connection Error");
  echo '<script type="text/javascript"> alert("Record Deleted");</script>';
  header("refresh:0; url=dashboard.html");
}
else {
  echo '<script type="text/javascript"> alert("Record Does Not Exists.");</script>';
  header("refresh:0; url=delete.html");
}
?>

