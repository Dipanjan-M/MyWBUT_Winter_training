<?php
include("dbcon.php");
$sql = "SELECT * FROM tutors";
?>
<!DOCTYPE html>
<html>
<head>
<title>List of tutors</title>
<style type="text/css">
        #uname{font-size:13pt;float:right;color:white}
        </style>
    </head>
<body>
    <header>
        <div style="background-color:green;height:52px;">
        <p id="uname"><?php echo "Dashboard"?><a href="logout.php">Log out</a></p>
        </div>
    </header>
<br><br>
<div style="text-align:center">
<table border="1"align="center">
 <tr><th>ID</th><th>Faculty Name</th><th>Email</th><th>Phone</th>
 <th>Date of joining</th><th>Trend</th><th>Catagory</th><th>Salary</th><th>Actions</th><tr>
 <?php if($result=$con->query($sql))
 {
     while($row = $result->fetch_assoc())
     {
         ?>
         <tr>
         <td><?php echo $row['id']?></td>
         <td><?php echo $row['name']?></td>
         <td><?php echo $row['email']?></td>
         <td><?php echo $row['phone']?></td>
         <td><?php echo $row['doj']?></td>
         <td><?php echo $row['trend']?></td>
         <td><?php echo $row['cat']?></td>
         <td><?php echo $row['sal']?></td>
         <td><a href="deltut.php?id=<?php echo $row['id']?>"
                onclick="return confirm('Are you sure?')">Delete</a>|
                <a href="edittut.php?id=<?php echo $row['id']?>">Edit</a></td>
         </tr>
         <?php
     }
 }
?>
</table>
<p style="background-color:yellow;margin-left:435px;margin-right:433px">Want to Goto Dashboard? Click here <a href="dashboard.php"><button>Dashboard</button></a></p>
  <p style="background-color:yellow;margin-left:435px;margin-right:433px">Want to add another Tutor? Click here <a href="addtutor.php"><button>Addtutor</button></a></p>
  </div>
  <footer>
  <div style="background-color:blue;height:25px;">
  <p style="text-align:center;color:white;font-size:10pt">Copy Right 2019 | yourdomain.com</p>
  </div>
  </footer>  
  </body>
  </html>