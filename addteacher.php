<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
     </head>
    <body>
        <div class="navbar">
            <a href="index2.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="viewStudent.php">Student</a>
                  <a href="viewParent.php">Parent</a>
                  <a href="viewTeacher.php">Teacher</a>
                  <a href="viewClass.php">Class</a>
              </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="addStudent.php">Student</a>
                  <a href="addParent.php">Parent</a>
                  <a href="addTeacher.php">Teacher</a>
                  <a href="addClass.php">Class</a>
              </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="delStudent.php">Student</a>
                <a href="delParent.php">Parent</a>
                <a href="delTeacher.php">Teacher</a>
                <a href="delClass.php">Class</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="updateStudent.php">Student</a>
              <a href="updateParent.php">Parent</a>
              <a href="updateTeacher.php">Teacher</a>
              <a href="updateClass.php">Class</a>
          </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>

        
<form method="post" action="addteacher.php">
  <label for="tid">Teacher ID:</label><br>
  <input type="text" id="tid" name="tid" value="0"><br>
  <label for="tname">Teacher FName:</label><br>
  <input type="text" id="tname" name="tname" value="Bob"><br><br>
  <label for="temail">Teacher Email:</label><br>
  <input type="text" id="temail" name="temail" value="@gmail.com"><br>
  <label for="tnumber">Teacher Number:</label><br>
  <input type="text" id="tnumber" name="tnumber" value="***********"><br>
  <input type="submit" name="submit" value="Submit">
</form> 
<p>

<?php


$link = mysqli_connect("localhost","root","","1");
if ($link === false) {
  die("Connection failed");
}
  

if (isset($_POST['submit'])) {
  $tid = $_POST['tid'];
  $tname = $_POST['tname'];
  $temail = $_POST['temail'];
  $tnumber = $_POST['tnumber'];
}

$sql = "INSERT INTO teacher(tid,tname,temail,tnumber) VALUES ('$tid', '$tname', '$temail', '$tnumber')";
if (mysqli_query($link, $sql)) {
  echo "New record added";
} else
{
  echo "error adding record";
}
?>

    </body>
</html>
