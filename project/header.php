<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <style type="text/css">
      #uname{ font-size:13pt;float:right;color:white;}
    </style>
</head>
<body>
<header>
    <div style="background-color:green;height:52px;">
    <p id="uname"><?php echo $_SESSION['user']['name']?><a href="logout.php">
      Logout</a></p>
    </div>
</header>