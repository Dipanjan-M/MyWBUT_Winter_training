<?php include("logcheck.php");?>
<?php include("header.php");  ?>
<div style="text-align:center;background-color:grey;text-border:2px dashed red">
  <br><br>
  <form name="addfrm" action="cinsert.php" method="post">
   <input type="text" name="cname" placeholder="Enter course name">
   <br><br>
   <input type="submit" name="" value="Add">
   <a href="dashboard.php"><input type="button" name="" Value="Cancel"></a>
   <br><br>
<?php include("footer.php");?>