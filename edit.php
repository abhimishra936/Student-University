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
      <title>Edit Records | Student University</title>
      <link rel="stylesheet" href="css/insert_style.css">
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
        <a id="active" class="nav_ele" href="edit.html"><i class="fa fa-edit"></i> EDIT</a>
        <a class="nav_ele" href="search.html"><i class="fa fa-search"></i> SEARCH</a>
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
        <h1>Edit Record Details</h1>
        <form name="insert" action="edit_inputs.php" method="post" onsubmit="return check_insert();">
          <input type="text" name="enroll" readonly value="'.$enroll.'" placeholder="Enrollment Number" maxlength="12" size="50">
          <input type="text" name="name" value="'.$name.'" placeholder="Name">
          <input type="text" name="fathername" value="'.$fathername.'" placeholder="Father Name">
          <input type="text" name="program" value="'.$program.'" placeholder="Program">
          <input type="text" name="batch" value="'.$batch.'" placeholder="Batch">
          <div class="date">
            Date Of Birth <input class="date_input" type="date" name="dob" value="'.$dob.'">  <i class="fa fa-calendar"></i>
          </div>
          <input type="email" name="email" value="'.$email.'" placeholder="Email">
          <input type="text" name="mobile" value="'.$mobile.'" placeholder="Mobile Number">
          <button>insert</button>
        </form>
      </div>
    </div>
    </body>
  </html>
  <script type="text/javascript">
  	function check_insert()
  	{
  		if(document.insert.name.value=="")
  		{
  			alert("Enter Your Name");
  			return false;
  		}
  		if(document.insert.fathername.value=="")
  		{
  			alert("Enter Father Name");
  			return false;
  		}
  		if(document.insert.program.value=="")
  		{
  			alert("Enter Your Program");
  			return false;
  		}
  		if(/^\d{4}([./-])\d{2}$/.test(document.insert.batch.value)==false)
  		{
  			alert("Enter A Valid Batch");
  			return false;
  		}
      else
      {
          var batch = document.insert.batch.value;
          var s = parseInt(batch.slice(2,4), 10);
          var e = parseInt(batch.slice(5,), 10);
          if (s>=e) {
            alert("Enter A Valid Batch");
      			return false;
          }
      }
  		if(document.insert.dob.value=="")
  		{
  			alert("Enter A Valid Date of Birth");
  			return false;
  		}
  		if(document.insert.email.value=="")
  		{
  			alert("Enter An Email");
  			return false;
  		}
  		if(/^\d{10}$/.test(document.insert.mobile.value)==false)
  		{
  			alert("Enter A Valid Mobile Number");
  			return false;
  		}
  		return true;
  	}
  </script> ';
}
else {
  echo '<script type="text/javascript"> alert("Record Does Not Exists.");</script>';
  header("refresh:0; url=edit.html");
}
?>
