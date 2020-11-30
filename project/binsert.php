<?php include("dbcon.php");
if(isset($_POST) && !empty($_POST))
{
    $bname=$_POST['bname'];
    $cat=$_POST['cat'];
    $sql="INSERT INTO books(bname,cat) VALUES('$bname','$cat')";
    if($con->query($sql))
    {
        header("Location:bselect.php");
    }
    else
    {
        echo"Try Again";
    }
}
?>