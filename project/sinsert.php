<?php 
include("dbcon.php");
if(isset($_POST) && !empty($_POST))
{
    //echo"<pre>";print_r($_POST);exit;
    $name=$_POST['name'];
    $c_id=$_POST['option'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $doa=$_POST['date'];
    $sql="INSERT INTO students(name,c_id,email,phone,doa) 
    VALUES('$name','$c_id','$email','$phone','$doa')";
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