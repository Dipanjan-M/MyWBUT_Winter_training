<?php 
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id=$_GET['id'];
    $sql = "DELETE FROM tutors WHERE id=$id";
    if($con->query($sql))
    {
        echo "Tutor Deleted";
    }
    else
    {
        echo "Try again";
    }
}
?>
<?php include("tselect.php");?>