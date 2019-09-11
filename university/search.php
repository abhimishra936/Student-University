<?php
$enroll = $_POST["enroll"];
$mysqli = mysqli_connect("localhost", "root", "", "student_university") or die ("Connection Error");
$test = $mysqli->query("select * from student where enroll = '$enroll' ");
$test = $test->fetch_assoc();
if ($test['enroll']==$enroll) {
  $enroll = $test['enroll'];
  $name = $test['name'];
  $fathername = $test['fathername'];
  $program = $test['program'];
  $batch = $test['batch'];
  $dob = $test['dob'];
  $email = $test['email'];
  $mobile = $test['mobile'];
  echo '
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Search Records | Student University</title>
      <link rel="stylesheet" href="css/show_view_style.css">
      <link rel="shortcut icon" href="images/logo.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>    
</head>
    <body>
      <div class="head">
        <table>
          <tr>
            <td>
              <img class="logo" src="images/logo.png" alt="Student University" height="150px">
            </td>
            <td>
              <center>
          <p style="font-size:3vw; " class="name">STUDENTS</p>
          <p style="font-size:3vw; " class="name">UNIVERSITY</p>
          <p style="font-size:1.5vw; " class="slogan">We Will Rise Up. We Will Shine</p>
          <p style="font-size:1.5vw; " class="estd">ESTD. 2019</p>
        </center>
            </td>
          </tr>
        </table>
      </div>
      <div class="nav" id="mynav">
        <a class="nav_ele" href="dashboard.html"><i class="fa fa-home"></i> HOME</a>
        <a class="nav_ele" href="insert.html"><i class="fa fa-user-plus"></i> INSERT</a>
        <a class="nav_ele" href="delete.html"><i class="fa fa-user-times"></i> DELETE</a>
        <a class="nav_ele" href="edit.html"><i class="fa fa-edit"></i> EDIT</a>
        <a id="active" class="nav_ele" href="search.html"><i class="fa fa-search"></i> SEARCH</a>
        <a id="logout" class="nav_ele" href="index.html"><i class="fa fa-sign-out"></i> Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("mynav");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}
</script>
      <div class="page">
      <div class="insert">
        <h1>Student Details</h1>
        <table id="details">
      	<tr>
          <td id="attribute">Enrollment Number</td> <td id="colon">:</td> <td id="value">'.$enroll.'</td>
        </tr>
        <tr>
          <td id="attribute">Name</td> <td id="colon">:</td> <td id="value">'.$name.'</td>
        </tr>
        <tr>
          <td id="attribute">Father Name</td> <td id="colon">:</td> <td id="value">'.$fathername.'</td>
        </tr>
        <tr>
          <td id="attribute">Program</td> <td id="colon">:</td> <td id="value">'.$program.'</td>
        </tr>
        <tr>
          <td id="attribute">Batch</td> <td id="colon">:</td> <td id="value">'.$batch.'</td>
        </tr>
        <tr>
          <td id="attribute">Date Of Birth(YYYY-MM-DD)</td> <td id="colon">:</td> <td id="value">'.$dob.'</td>
        </tr>
        <tr>
          <td id="attribute">Email</td> <td id="colon">:</td> <td id="value">'.$email.'</td>
        </tr>
        <tr>
          <td id="attribute">Mobile Number</td> <td id="colon">:</td> <td id="value">'.$mobile.'</td>
        </tr>
      </table>
      <a href="search.html"><button>done</button</a>
      </div>
    </div>
    </body>
  </html>';
}
else {
  echo '<script type="text/javascript"> alert("Record Does Not Exists.");</script>';
  header("refresh:0; url=search.html");
}
?>
