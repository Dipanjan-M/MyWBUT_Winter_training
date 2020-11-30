<?php include("logcheck.php");?>
<?php include("header.php");  ?>
<div style="text-align:center;text-border:2px dashed red">
<br><br>
 <form name="addbk" action="binsert.php" method="post">
     Book:<input type="text" name="bname" placeholder="Enter book name">
     <br><br>
     Catagory:<input type="text" name="cat" placeholder="Enter the catagory of the book">
     <br><br>
     <input type="submit" name="" value="Add">
     <a href="dashboard.php"><input type="button" name="" value="Cancel"></a>
     <br><br>
<?php include("footer.php");?>