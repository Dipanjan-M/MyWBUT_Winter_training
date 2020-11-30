<?php include("logcheck.php");?>
<?php include("header.php");  ?>
<br>
<div style="text-align:center;height:510px;border:4px dashed red;">
<br><br>
<form name="addother" action="oinsert.php" method="post">
    Name:<input type="text" name="oname" placeholder="Enter name" required>
    <br><br>
    Email:<input type="text" name="email" placeholder="Enter email" required>
    <br><br>
    Phone:<input type="text" name="phone" maxlength="10" placeholder="Enter phone no" required>
    <br><br>
    Date of Joining:<input type="date" name="date">
    <br><br>
    Post:<input type="radio" name="post" value="Admin">Admin
         <input type="radio" name="post" value="Non-Admin">Non-Admin
         <br><br>
    Salary:<input type="number" name="sal" placeholder="Enter salary">
    <br><br>
    <input type="submit" name="" value="Add">
    <a href="dashboard.php"><input type="button" name="" value="Cancel"></a>
    <br><br>
</form>
</div>
<?php include("footer.php");?>