<?php include("logcheck.php");?>
<?php include("dbcon.php");   ?>
<?php $sql="SELECT * FROM courses"?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <style type="text/css">
      #uname{ font-size:13pt;float:right;color:white;}
    </style>
    <script type="text/javascript">
       function validate(){
         var nm=document.getElementById("name").value;
         var em=document.getElementById("email").value;
         var flag=0;
         if(nm=="")
         {
           alert("Enter name");
           flag=1;
         }
         else if(em=="")
         { 
           alert("Enter email");
           flag=1;
         }
         if(flag==0)
         { 
           return true;
         }
         else
         {
           return false;
         }
        }
      </script>
</head>
<body>
<header>
    <div style="background-color:green;height:52px;">
    <p id="uname"><?php echo $_SESSION['user']['name']?><a href="logout.php">
      Logout</a></p>
    </div>
</header>
<h2>Add Student</h3>
<div style="text-align:center;height:480px">
 <form name="addfrm" action="sinsert.php" method="post" onsubmit="return validate()">
  Name:    <input type="text" name="name" placeholder="Enter student's name" id="name"><br><br>
  Email:   <input type="email" name="email" placeholder="Enter email" id="email"><br><br>
  Phone:   <input type="text" name="phone" maxlength="10" placeholder="Enter phone number"><br><br>
  Date of Admission:    <input type="date" name="date"><br><br>
  <select name="option">
  <?php 
  if($result=$con->query($sql))
  {
      while($row=$result->fetch_assoc())
      {
          ?>
          <option value="<?php echo $row['id']?>"><?php echo $row['cname']?></option>
          <?php
      }
  }
  ?>
  </select><br><br>
  <input type="submit" name="" value="Add">
  <a href="dashboard.php"><input type="button" name="" value="Cancel"></a>
  </form>
  </div>

<?php include("footer.php");?>
