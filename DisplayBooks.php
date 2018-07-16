
<!DOCTYPE HTML>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.blink{
		width:600px;
		height: 50px;

		  padding-top:100px ;
		  
		text-align: center;
		line-height: 50px;
	}
span{
		font-size: 25px;
		font-family: cursive;
		color: white;
		animation: blink 1s linear infinite;
	}
@keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}
td {border: 1px #DDD solid; padding: 5px; cursor: pointer;}

.selected {
    background-color: brown;
    color: #FFF;
}
</style>

<body style="background-color:#2C345F;">
<center><h2><span>Search Results</span></h2></center>
<br>
<?php
$i=0;
include("DBConnection.php");
$search = $_REQUEST["search"];
if(!empty($search)){
$query = "select ISBN,Title,Author,Edition,Publication,count,price from book_info where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)
{session_start();
?>

<table id="t1" border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
<th> Price </th>
<th> Status </th>

</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr >
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
<td><?php echo $row["price"];?> </td>

<td><?php if (intval($row["count"])>0) {$id=$row['ISBN'];echo "<a href='buy.php?id=$id' >Available</a>";?> <?php }
else echo"Out of Stock";?></td></tr>

<?php

}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>  <div align="center"><div style="padding-top:100px"> <input type="button" value="Return" class="btnSubmit" onClick="re2()"  ></div></div><?php }
?>
 <script>
 function re(){
 window.location="buy.php";
 }
function re2(){
window.location="SearchBooks.php";
}
 </script>
<style>

.tblLogin {
align:center;
	border: #95bee6 1px solid;
    background: #d1e8ff;
    border-radius: 4px;
    max-width: 300px;
	padding:20px 30px 30px;
	text-align:center;
}
.tableheader { font-size: 20px; }
.tablerow { padding:100px; }
.error_message {
	color: #b12d2d;
    background: #ffb5b5;
    border: #c76969 1px solid;
}
.message {
	width: 100%;
    max-width: 300px;
    padding: 10px 30px;
    border-radius: 4px;
    margin-bottom: 5px;    
}
.login-input {
	border: #CCC 1px solid;
    padding: 10px 20px;
	border-radius:4px;
}
.btnSubmit {
	padding: 10px 20px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
	border-radius:4px;}
	
#t1 {
font-family:"Trebuchet MS",Arial,Helvetica,sans-serif;
border-collapse:collapse;
width:80%;
}
#t1 td,#t1 th{
border : 1px solid #ddd;
padding:8px;
text-align:center;
}
#t1 tr{background:#FFFFFF;}
#t1 tr:hover{background-color:#ddd;}
#t1 th{
align:center;
padding-top:12px;
padding-bottom:12px;
text-align:center;
background-color:#4CAF50;
color:WHITE;
}

</style>
</body>
</html>
<br>	