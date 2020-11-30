<?php
include("dbcon.php");
if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id=$_GET['id'];
    $sql="SELECT * FROM books WHERE id=$id";
    if($result=$con->query($sql))
    {
        $row=$result->fetch_assoc();
    }
}
if(isset($_POST) && !empty($_POST))
{
    $id=$_POST['id'];
    $bname=$_POST['bname'];
    $cat=$_POST['cat'];

    $sql="UPDATE books SET bname='$bname',cat='$cat' WHERE id=$id";
    if($con->query($sql))
    {
        header("Location:bselect.php");
    }
    else
    {
        echo "Try Again";
    }
}
?>
<?php $sql = "SELECT * FROM books";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Books</title>
</head>
<body>
    <h2>Edit Book</h2>
    <form name="editbfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    Book:<input type="text" name="bname" placeholder="Enter book's name">
    <br><br>
    Catagory:<input type="text" name="cat" placeholder="Catagory">
    <br><br>
    <input type="submit" name="" value="Add">
    <a href="dashboard.php"><input type="button" name="" value="Cancel"></a>
    <br><br>
</form>
</body>
</html>
