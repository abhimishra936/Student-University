<?php
session_start();
$email = $_SESSION['email'];
$password = $_POST['pass'];
$password = password_hash($password, PASSWORD_DEFAULT);
$mysqli = mysqli_connect("localhost", "root", "", "student_university") or die ("Connection Error");
$mysqli->query("update users set password='$password' where email='$email'");
echo '<script type="text/javascript"> alert("Password Updated. Login Using Username And Password.");</script>';
header("refresh:0; url=index.html");
?>
