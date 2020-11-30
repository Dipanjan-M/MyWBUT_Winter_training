<?php
include("dbcon.php");
if(isset($_POST) && !empty($_POST))
{
    $oname=$_POST['oname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $doj=$_POST['date'];
    $post=$_POST['post'];
    $salary=$_POST['sal'];
    $sql="INSERT INTO others(name,email,phone,doj,post,salary)
          VALUES('$oname','$email','$phone','$doj','$post','$salary')";
    if($con->query($sql))
    {
        header("Location:oselect.php");
    }
    else
    {
        echo "Try again";
    }
}
?>