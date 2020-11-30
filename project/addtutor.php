<?php include("logcheck.php");?>
<?php include("header.php");  ?>
<br>
<div style="text-align:center;height:510px;border:4px dashed red;">
<br><br>
<form name="addtut" action="tinsert.php" method="post">
Name:<input type="text" name="tname" placeholder="Enter name" required>
    <br><br>
Email:<input type="text" name="email" placeholder="Enter email" required>
    <br><br>
Phone:<input type="text" name="phone" maxlength="10" placeholder="Enter phone no">
     <br><br>
Date of joining:<input type="date" name="date" placeholder="Enter date of joining">
<br><br>
Trend:<input type="radio" name="trend" value="CSE">CSE
      <input type="radio" name="trend" value="ECE">ECE
      <input type="radio" name="trend" value="IT">IT<br><br>
      <input type="radio" name="trend" value="ME">ME
      <input type="radio" name="trend" value="CE">CE
      <input type="radio" name="trend" value="EE">EE<br><br>
      <input type="radio" name="trend" value="Basic Science">Basic Science
      <input type="radio" name="trend" value="Humanities">Humanities<br><br>
Catagory:<input type="checkbox" name="cat" value="Part_time">Part-time
         <input type="checkbox" name="cat" value="Full_time">Full-time
         <br><br>
Salary:<input type="number" name="sal" placeholder="Enter salary"><br><br>
<input type="submit" name="" value="Add">
<a href="dashboard.php"><input type="button" name="" value="Cancel"></a>
<br><br>
</div>
<?php include("footer.php");?>