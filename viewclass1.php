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
                     <a href="viewstudent1.php">Student</a>
                     <a href="viewparent1.php">Parent</a>
                     <a href="viewteacher1.php">Teacher</a>
                     <a href="viewclass1.php">Class</a>
                 </div>
             </div>
             <div class="dropdown">
                 <button class="dropbtn">Add
                     <i class="fa fa-caret-down"></i>
                 </button>
                 <div class="dropdown-content">
                     <a href="addStudent1.php">Student</a>
                     <a href="addparent1.php">Parent</a>
                     <a href="addteacher1.php">Teacher</a>
                     <a href="addclass1.php">Class</a>
                 </div>
             </div>
             </div>
         </div>
             <a href="Contact.html">Contact Us</a>
         </div>
<?php

$link = mysqli_connect("localhost","root","","1");
if ($link === false) {
  die("Connection failed");
}

?>



    <h3>See all classes</h3>

        <table>

            <tr>
                <th width="150px">Class ID<br><hr></th>
                <th width="250px">CLass Name<br><hr></th>
                    <<th width="250px">Teacher ID<br><hr></th>
                    <<th width="250px">Pupils<br><hr></th>
</tr>

<?php

$sql = mysqli_query($link, "SELECT cid, cname, tid,pupils FROM class");
while ($row = $sql->fetch_assoc()){
    echo "
    <tr>
        <th>{$row['cid']}</th>
        <th>{$row['cname']}</th>
                <th>{$row['tid']}</th>
                <th>{$row['pupils']}</th>
    </tr>";
}
?>
        </table>
    </body>
</html>


