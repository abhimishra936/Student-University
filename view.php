<?php
$mysqli = mysqli_connect("localhost", "root", "", "student_university") or die ("Connection Error");
$stu = $mysqli->query("select * from student");
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
        <h1>Student Details</h1>';
        echo '<table id="view">';
      		echo "<tr>";
      		echo "<th>"."Enrollment Number"."</th>"."<th>"."Name"."</th>"."<th>"."Father Name"."</th>"."<th>"."Program"."</th>"."<th>"."Batch"."</th>"."<th>"."Date of Birth"."</th>"."<th>"."E-Mail"."</th>"."<th>"."Mobile"."</th>";
      		echo "</tr>";
      		while ($student=$stu->fetch_assoc()) {

      			echo "<tr>";
      			foreach ($student as $key => $value) {
      				echo "<td>".$value."</td>";
      			}
      			echo "</tr>";
      		}
      	echo '</table>
      <a href="search.html"><button>done</button</a>
      </div>
    </div>
    </body>
  </html>';
?>
