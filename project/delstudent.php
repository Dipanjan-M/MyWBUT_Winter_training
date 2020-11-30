<?php
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id=$_GET['id'];
    $sql = "DELETE FROM students WHERE id=$id";
    if($con->query($sql))
    {
        echo "Student deleted";
    }
    else
    {
        echo "Try again";
    }
}
?>
<?php include("sselect.php");?>