<?php 
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    //echo "<pre>";print_r($_GET);exit;
    $id=$_GET['id'];
    //echo $id;
    $sql="SELECT * FROM others WHERE id=$id";
    //echo $sql;
    if($result=$con->query($sql))
    {
        $row=$result->fetch_assoc();
        //echo "<pre>";print_r($row);exit;
    }
}
if(isset($_POST) && !empty($_POST))
{
    //echo "<pre>";print_r($_POST);exit;
    $id=$_POST['id'];
    $oname=$_POST['oname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $doj=$_POST['date'];
    $post=$_POST['post'];
    $salary=$_POST['sal'];

    $sql="UPDATE others SET name='$oname',email='$email',phone='$phone',
    doj='$doj',post='$post',salary='$salary' WHERE id=$id";
    if($con->query($sql))
    {
        header("Location:oselect.php");
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
 <title>Edit Employee</title>
</head>
<body>
<h2>Edit Employee</h2>
<div style="text-align:center;height:510px;border:4px dashed red;">
<br><br>
<form name="editother" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    Name:<input type="text" name="oname" placeholder="Enter name" value="<?php echo $row['name']?>" required>
    <br><br>
    Email:<input type="text" name="email" placeholder="Enter email" value="<?php echo $row['email']?>" required>
    <br><br>
    Phone:<input type="text" name="phone" maxlength="10" placeholder="Enter phone no" value="<?php echo $row['phone']?>" required>
    <br><br>
    Date of Joining:<input type="date" name="date" value="<?php echo $row['doj']?>">
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
</body>
</html>
<?php include("footer.php");?>