<?php
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id=$_GET['id'];
    $sql = "DELETE FROM courses Where id=$id";
    if($con->query($sql))
    {
        echo "Course deleted";
    }
    else
    {
        echo "Try Again";
    }
}
?>
<?php include("cselect.php");?>