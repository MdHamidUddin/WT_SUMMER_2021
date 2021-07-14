<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to home page.</h5>


<h5>Do you want to go to <a href="pagetwo.php"> MY Profile</a></h5>
<h5><a href="addproduct.php"> ADD Product</a></h5>
<br/>
<h5>Do you want to <a href="../control/logout.php">logout</a></h5>

<h3><a href="Search.php">Search</a></h3>
<h3><a href="showalldata.php">Show All Data</a></h3>

</body>
</html>

<?php


?>   


