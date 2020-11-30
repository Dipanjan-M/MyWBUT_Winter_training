<?php
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id=$id";
    if($result = $con->query($sql))
    {
        $row = $result->fetch_assoc();
    }
}

if(isset($_POST) && !empty($_POST))
{
    //echo"<pre>";print_r($_POST);exit;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $c_id=$_POST['option'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $doa=$_POST['date'];
    $sql = "UPDATE students SET name='$name',c_id='$c_id',email='$email',
    phone='$phone',doa='$doa' WHERE id=$id";
    if($con->query($sql))
    {
        header("Location:sselect.php");
    }
    else
    {
        echo "Try again";
    }
}
?>
<?php $sql = "SELECT * FROM courses";?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
</head>
<body>
<h2>Edit Student</h2>
<form name="editfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
 <input type="hidden" name="id" value="<?php echo $row['id']?>">
 Name:    <input type="text" name="name" placeholder="Enter student's name" required><br><br>
 Email:   <input type="email" name="email" placeholder="Enter email" required><br><br>
 Phone:   <input type="number" name="phone" maxlength="10" placeholder="Enter phone number"><br><br>
 Date of Admission:    <input type="date" name="date" required><br><br>
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
  </body>
  </html>