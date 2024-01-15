

<?php 
session_start();
$usr=$_SESSION['userID'];
echo"<div style='float:right;'>";
echo"<a href='logOut.php'><img src='img\logout.png'/></a> ";
echo"<h3 style='color:#333'>" .$usr;
echo"</h3>";
echo "</div>";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-color:#E8DFD9 ">
  <ul> 
 <li><a href="services.php">Products</a></li>
  <li><a href="chat.php">Chat With Us</a></li>
   <li><a href="contactAs.php">Contact Us </a></li>
   <li>
  <a class="active" href="allListOrders.php?id=<?php echo $usr;?>">List Orders</a> 
  </li>
</ul>
	
	<br>
	<br>
	<div class="dvx">
	<br>
	
	<p style=" text-align:justifier;font-size:48px; margin:35px; font-weight:bold;" >
	
 CONTACT US
	
	</p> <br>
	
<div class="container">

<form action="feedbackCode.php" method="post">
  <div class="left">
<p style="line-height: 1.8;"> 

<table style="font-size:28px; margin:45px; font-weight:bold;" >
<tr>
<td >
Feedback:
</td>
</tr>
<tr>
<td>
<input type="hidden" name="customerID" value="<?php echo $usr; ?>"/>
<textarea name="txt" cols="20" rows="10" required class="textarea"></textarea> <br>
<input type="submit" name="add" class="btn btn-default">
</td>

</tr>

</table>

	</p>
	<br></div>
    <div class="right">
	<a href="https://www.google.com/intl/fr/gmail/about/"><img src="img\7.png" width="30px" height="30px" /> Ecowatersaver0@gmail.com</a><br>
	</div>
	
	</form>
</div>
	
	</div>
	
	
  </body>
</html>