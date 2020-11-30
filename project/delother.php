<?php
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id=$_GET['id'];
    //echo "<pre>";print_r($_GET);exit;
    $sql = "DELETE FROM others WHERE id=$id";
    if($con->query($sql))
    {
        echo "Employee deleted";
    }
    else
    {
        echo "Try again";
    }
}
?>
<?php include("oselect.php");?>