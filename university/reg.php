<?php
$name = $_POST['name'];
$username = $_POST['user'];
$password = $_POST['pass'];
$password = password_hash($password, PASSWORD_DEFAULT);
$email = $_POST['email'];
$mysqli = mysqli_connect("localhost", "root", "", "student_university") or die ("Connection Error");
$test_username = $mysqli->query("select * from users where username='$username' limit 1");
$test_username = $test_username->fetch_assoc();
$test_email = $mysqli->query("select * from users where email='$email' limit 1");
$test_email = $test_email->fetch_assoc();

if ($test_username['username']==$username) {
  echo '<script type="text/javascript"> alert("Username Already Exists. Please Login Using Username And Password.");</script>';
  header("refresh:0; url=index.html");
}
elseif ($test_email['email']==$email) {
  echo '<script type="text/javascript"> alert("Email Already Exists. Please Login Using Username And Password.");</script>';
  header("refresh:0; url=index.html");
}
else{
  $mysqli->query("insert into users values('$name', '$username', '$password', '$email')");
  echo '<script type="text/javascript"> alert("Account Created. Login Using Username And Password.");</script>';
  header("refresh:0; url=index.html");
}
?>
