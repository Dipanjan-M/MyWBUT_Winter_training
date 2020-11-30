<?php
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id=$_GET['id'];
    $sql = "DELETE FROM books WHERE id=$id";
    if($con->query($sql))
    {
        echo "Book deleted";
    }
    else
    {
        echo "Try again";
    }
}
?>
<?php include("bselect.php");?>