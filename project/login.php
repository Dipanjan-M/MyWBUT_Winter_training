<?php
session_start();
include("dbcon.php");
if(isset($_POST) && !empty($_POST))
{
    //echo"<pre>";print_r($_POST);echo"</pre>";
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    if($result=$con->query($sql))
    {
        $row=$result->fetch_assoc();
        if(!empty($row))
        {
            //echo"WELCOME".$row['name'];exit;
            $_SESSION['user'] = $row;
            header("Location:dashboard.php");
        }
        else
        {
            echo"Email/Password is wrong";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<div style="text-align:center;border:2px dashed blude;background-color:yellow;">
   <h4 style="text-color:red;">Log In</h4>
   <form name="usrfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <br><br>
     <input type="email" name="email" placeholder="Enter Email">
     <br><br>
     <input type="password" name="password" placeholder="Enter password">
     <br><br>
     <input type="submit" name="" values="Sign Up">&nbsp
     &nbsp<a href="/project/mainpage.html"><input type="button" name="" value="Cancel"></a>
   </form><br>
   <p>Not registered? Click to<a href="/project/signup.php">Sign up</a></p>
</div>
</body>
</html>
