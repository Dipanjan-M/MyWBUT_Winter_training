<?php 
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    //echo "<pre>";print_r($_GET);exit;
    $id=$_GET['id'];
    //echo $id;
    $sql="SELECT * FROM tutors WHERE id=$id";
    //echo $sql;
    if($result=$con->query($sql))
    {
        $row=$result->fetch_assoc();
    }
}
if(isset($_POST) && !empty($_POST))
{
    //echo "<pre>";print_r($_POST);exit;
    $id=$_POST['id'];
    $name=$_POST['tname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $doj=$_POST['date'];
    $trend=$_POST['trend'];
    $cat=$_POST['cat'];
    $sal=$_POST['sal'];

    $sql="UPDATE tutors SET name='$name',email='$email',phone='$phone',
    doj='$doj',trend='$trend',cat='$cat',sal='$sal' WHERE id=$id";
    if($con->query($sql))
    {
        header("Location:tselect.php");
    }
    else
    {
        echo "Try Again";
    }
}
?>
<?php //$sql="SELECT * FROM tutors";?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit Tutors</title>
</head>
<body>
<h2>Edit Tutor</h2>
<form name="edittutfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']?>">
Name:<input type="text" name="tname" placeholder="Enter name" value="<?php echo $row['name']?>" required>
    <br><br>
Email:<input type="text" name="email" placeholder="Enter email" value="<?php echo $row['email']?>" required>
    <br><br>
Phone:<input type="text" name="phone" maxlength="10" placeholder="Enter phone no" value="<?php echo $row['phone']?>">
     <br><br>
Date of joining:<input type="date" name="date" placeholder="Enter date of joining" value="<?php echo $row['doj']?>">
<br><br>
Trend:<input type="radio" name="trend" value="CSE">CSE
      <input type="radio" name="trend" value="ECE">ECE
      <input type="radio" name="trend" value="IT">IT<br><br>
      <input type="radio" name="trend" value="ME">ME
      <input type="radio" name="trend" value="CE">CE
      <input type="radio" name="trend" value="EE">EE<br><br>
      <input type="radio" name="trend" value="Basic Science">Basic Science
      <input type="radio" name="trend" value="Humanities">Humanities
      <br><br>
Catagory:<input type="checkbox" name="cat" value="Part_time">Part-time
         <input type="checkbox" name="cat" value="Full_time">Full-time
         <br><br>
Salary:<input type="number" name="sal" placeholder="Enter salary"><br><br>
<input type="submit" name="" value="Add">
<a href="tselect.php"><input type="button" name="" value="Cancel"></a>
</form>
</body>
</html>
