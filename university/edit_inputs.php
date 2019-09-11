<?php
session_start();
$enroll = $_POST["enroll"];
$name = $_POST["name"];
$fathername = $_POST["fathername"];
$program = $_POST["program"];
$batch = $_POST["batch"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$mysqli = mysqli_connect("localhost", "root", "", "student_university") or die ("Connection Error12");
$mysqli->query("update student set name = '$name',
                fathername = '$fathername',
                program = '$program',
                batch = '$batch',
                dob = '$dob',
                mobile = '$mobile',
                email = '$email' where enroll = '$enroll'") or die ("Connection Error 13");
echo '<script type="text/javascript"> alert("Record Edited.");</script>';
header("refresh:0; url=dashboard.html");
?>
