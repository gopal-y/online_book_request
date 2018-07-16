
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<center><div><div class="blink"><span>Buy Your Book Online</span></div></div></center>
<form action = "DisplayBooks.php" method="get">
<br>
<!--#95bee6	-->
<?php include('menu.php'); ?>
<br></br>
<div align="center" >
        
<div class="tablerow">	

<div class="tbllogin">
<input class="login-input" type="text" name="search" placeholder="Search Title " size="48" required>
<input class="btnsubmit" type="submit" value="Search">
<input class="btnsubmit" type="reset" value="Reset">
</div></div>

</div>
<br>
</form>
</body>
</html>