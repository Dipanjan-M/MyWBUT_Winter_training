<?php
include("dbcon.php");
if(isset($_POST) && !empty($_POST))
{
    //echo "<pre>";print_r($_POST);exit;
    $name=$_POST['tname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $doj=$_POST['date'];
    $trend=$_POST['trend'];
    $cat=$_POST['cat'];
    $sal=$_POST['sal'];
    $sql="INSERT INTO tutors(name,email,phone,doj,trend,cat,sal) 
          VALUES('$name','$email','$phone','$doj','$trend','$cat','$sal')";
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