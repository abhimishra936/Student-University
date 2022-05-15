<?php
$username = $_POST['login_user'];
$password = $_POST['login_pass'];
$mysqli = mysqli_connect("localhost", "root", "", "student_university") or die ("Connection Error");
$test = $mysqli->query("select * from users where username='$username' limit 1");
$test = $test->fetch_assoc();
if ($test['username']=="") {
  echo '<script type="text/javascript"> alert("Username Does Not Exists. Create An Account Using Your Email.");</script>';
  header("refresh:0; url=index.html");
}
if (password_verify($password, $test['password'])){
  header("refresh:0; url=dashboard.html");
}
else {
  echo '<script type="text/javascript"> alert("Incorrect Password. Try Again or Click Forgot Your Password?");</script>';
  header("refresh:0; url=index.html");
}
?>
