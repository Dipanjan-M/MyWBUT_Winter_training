<?php include("logcheck.php");?>
<?php
include("dbcon.php");
$sql="SELECT s.*,c.cname FROM students s INNER JOIN courses c ON c.id=s.c_id";
?>
<?php include("header.php");?>
<h2 style="text-align:center">Student List</h2>
<div style="border:2px dashed blue;margin-left:284px;margin-right:252px">
<br>
 <table border="1" align="center">
 <tr><th>ID</th><th>Name</th><th>Course Name</th><th>Date of Admission</th><th>Actions</th></tr>
 <?php 
 if($result = $con->query($sql))
 {
     while($row = $result->fetch_assoc())
     {
         ?>
         <tr>
         <td><?php echo $row['id']?></td>
         <td><?php echo $row['name']?></td>
         <td><?php echo $row['cname']?></td>
         <td><?php echo $row['doa']?></td>
         <td><a href="delstudent.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure?')">Delete</a>|
         <a href="editstudent.php?id=<?php echo $row['id']?>">Edit</a></td>
         </tr>
    <?php
     }
 }
 ?>
 </table>
 <p style="text-align:center"><a href="addstudent.php"><button>Add student</button></a>
 <a href="dashboard.php"><button>Dashboard</button></a></p>
 </div>
 <?php include("footer.php");?>