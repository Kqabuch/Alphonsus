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
            <a href="index1.html">Home</a>
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
                    <a href="addstudent.php">Student</a>
                    <a href="addparent.php">Parent</a>
                    <a href="addteacher.php">Teacher</a>
                    <a href="addclass.php">Class</a>
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
        <br>
        <form method="post" action="updatestudent.php">
            <label for="tid">Teacher ID: </label>
            <input type="number" name="tid">

            <br><br>

            <input type="submit" name="Submit" value="Submit">
        </form>

        <?php

        $link = mysqli_connect("localhost","root","","1");
  
            if ($link === false) {
              die("Connection Failed: ");
            }
        ?>

        <br>
        <form name="myForm" method="post" action="updateStudent.php" onSubmit="validateForm()">
        <label>Select Student:</label>
            <select name = "stid">
              <?php
              $sql = mysqli_query($link, "SELECT stid, sname FROM Student");
              while ($row = $sql -> fetch_assoc()) {
                echo "<option value='{$row['stid']}'>
                                     {$row['sname']}
                                     </option>";
              }

              ?>
            </select>
              <br>

            <label for="sname">Student Name: </label>
            <input type="text" name="sname">

            <label for="email">Student Email: </label>
            <input type="text" name="email">

            <label>Select Parent:</label>
            <select name = "parent_id">
              <?php
              $sql = mysqli_query($link, "SELECT pid, pname, FROM parent");
              while ($row = $sql -> fetch_assoc()) {
                echo "<option value='{$row['pid']}'>
                                     {$row['PName']}
                                     </option>";
              }

              ?>

            <br>
            <br>
            <br>

            <input type="submit" name="Submit" value="Submit">
        </form>
    
        <?php
            if (isset($_POST["Submit"])) {
                $stid = $_POST["stid"];
                $sname = $_POST["sname"];
                $email = $_POST["email"];
                $parent_id = $_POST["parent_id"];
            }

            $sql = "UPDATE Student SET sname='$sname', email='$email', pid='$parent_id' WHERE stid='$stid';";
            if (mysqli_query($link, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record";
            }


        ?>
    </body> 
</html>