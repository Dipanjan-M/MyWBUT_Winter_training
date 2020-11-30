<?php
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id=$_GET['id'];
    $sql="SELECT * FROM courses WHERE id=$id";
    if($result=$con->query($sql))
    {
        $row=$result->fetch_assoc();
    }
}
if(isset($_POST) && !empty($_POST))
{
    $id=$_POST['id'];
    $cname=$_POST['cname'];

    $sql="UPDATE courses SET cname='$cname' WHERE id=$id";
    if($con->query($sql))
    {
        header("Location:cselect.php");
    }
    else
    {
        echo "Try Again";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Course</title>
</head>
<body>
 <h2>Edit Courses</h2>
 <form name="editfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
 <input type="hidden" name="id" value="<?php echo $row['id']?>">
 <input type="text" name="cname" placeholder="Enter course name" value="<?php echo $row['cname']?>">
 <br><br>
 <input type="submit" name="" value="Add">
 <a href="cselect.php"><input type="button" name="" value="Cancel"></a>
 </form>
</body>
</html> 