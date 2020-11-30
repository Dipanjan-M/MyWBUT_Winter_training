<?php
include("dbcon.php");
if(isset($_POST) && !empty($_POST))
{
    //echo"<pre>";print_r($_POST);echo"<pre>";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    //echo $password;
    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";
    if($con->query($sql))
    {
        echo"Sign Up done!";
    }
    else
    {
        echo"Please try again";
    }
}
?>