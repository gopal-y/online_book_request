
<html>
<head><link href="style1.css" rel="stylesheet"></head>
<body >

<?php
error_reporting(0);
$con=mysql_connect("","","");//connection cred
  if(mysql_error()) echo mysql_error();
$db=mysql_select_db("epiz_21810205_bookstore");
$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
$email=$_POST["mail"];
$price=$_POST["price"];
$query = "insert into `BOOK_INFO`(isbn,title,author,edition,publication,count,price,email) values('$isbn','$title','$author','$edition','$publication',0,'$price','$email')"; //Insert query to add book details into the book_info table

$result = mysql_query($query);

if(mysql_error()){$a=mysql_error();
$a=substr($a,0,15);
if($a=="Duplicate entry"){


echo "try another book isbn and title";
?>

<center>
<div class="blink"><h2><span> Book added to stock </span></h2></div>
<br></center>
<?php }}
else {?><center>
<div class="blink"><span><h2> Book information is inserted successfully </h2></span></div>
</center>

<?php }?>
<marquee scrollamount="15"><a href="SearchBooks.php" style="font-family:'Courier New', Courier, monospace; color:#FFFFFF;font-size:22px">To search for the Book information click here</a></marquee>
</body>
</html>
