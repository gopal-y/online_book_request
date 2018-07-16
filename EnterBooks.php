
<html>
<head>
<link rel="stylesheet" href="style1.css">	
</head>
<body style="background: linear-gradient(#2c7ac5,black) ">
<?php include('menu.php'); ?>
      
<center><div class="blink"><span>Enter your Publication Details</span></div></center>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
<form action="InsertBooks.php" method="post">
<table id="t2" border="2" align="center" cellpadding="5" cellspacing="5" >
<tr>
<td id="td1"> Enter ISBN :</td>
<td id="td2"><input class="login-input" type="text" name="isbn" size="48" required> </td>
</tr>
<tr>
<td id="td1">Enter Title :</td>
<td id="td2"><input class="login-input" type="text" name="title" size="48" required> </td>
</tr>
<tr>
<td id="td1">Enter Author :</td>
<td id="td2"> <input type="text" name="author" class="login-input" size="48" required> </td>
</tr>
<tr>
<td id="td1">Enter Edition :</td>
<td id="td2"> <input type="text" name="edition" class="login-input" size="48" required> </td>
</tr>
<tr>
<td id="td1">Enter Publication: </td>
<td id="td2"> <input type="text" name="publication" class="login-input" size="48" required> </td>
</tr>
<tr>
<td id="td1">Enter Price </td>
<td id="td2"> <input type="number" min="1" name="price" class="login-input" size="48" required> </td>
</tr>
<tr>
<td id="td1">Enter Email </td>
<td id="td2"> <input type="text" name="mail" class="login-input" size="48" required> </td>
</tr>
<tr>

<td id="td1"></td>
<td id="td2">
<input class="btnSubmit" type="submit" value="submit">
<input  class="btnSubmit" type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>