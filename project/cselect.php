<?php 
include("dbcon.php");
$sql = "SELECT * FROM courses";
?>
<!DOCTYPE html>
<html>
<head>
 <title>List of Courses</title>
 <style type="text/css">
  #uname{ font-size:13pt;float:right;color:white;}
 </style>
</head>
<body>
<header>
 <div style="background-color:green;height:52px;">
 <p id="uname"><?php echo "Dashboard"?><a href ="logout.php">Log out</a></p>
 </div>
 <br><br>
<div style="text-align:center;height:500px">
  <table border="1"align="center">
  <tr><th>ID</th><th>Course Name</th><th>Actions</th></tr>
  <?php if($result = $con->query($sql))
  {
      while($row = $result->fetch_assoc())
      {
          ?>
          <tr>
           <td><?php echo $row['id']?></td>
           <td><?php echo $row['cname']?></td>
           <td><a href="delcourse.php?id=<?php echo $row['id']?>"
           onclick="return confirm('Are you Sure?')">Delete</a>|
           <a href="editcourse.php?id=<?php echo $row['id']?>">Edit</a></td>
          </tr>
    <?php    
      }
  }
  ?>
  </table>
  <p style="background-color:yellow;margin-left:435px;margin-right:433px">Want to Goto Dashboard? Click here <a href="dashboard.php"><button>Dashboard</button></a></p>
  <p style="background-color:yellow;margin-left:435px;margin-right:433px">Want to add another course? Click here <a href="addcourse.php"><button>Addcourse</button></a></p>
  </div>
  <footer>
  <div style="background-color:blue;height:25px;">
  <p style="text-align:center;color:white;font-size:10pt">Copy Right 2019 | yourdomain.com</p>
  </div>
  </footer>  
  </body>
  </html>