<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include('menu.php'); ?>
<?php 
error_reporting(0);
$id=$_GET['id']; 
session_start();
$_SESSION['isbn']=$id;

require("DBConnection.php");
?>
<form method="post" action="test.php">
<div align="center"><div class="tablerow"><div class="tblLogin">
<input class="login-input" type="email" name="email" placeholder="Enter your email" required  />
<input class="btnSubmit" type="submit" />

</div></div></div>
</form>
</body>







</html>
