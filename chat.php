
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
    <title>Chat</title>
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
	<br/>
	<br/>
	<div class="dvx">
	
	<p style=" text-align:justifier;font-size:48px; margin:15px; font-weight:bold;" >
	
 CHAT WITH US
	<p>
  <form action="chatCode.php" method="post">
<table colspacing="5px" style="font-size:20px; margin:45px;" >
<tr>
<td >
How can we hlep you:

<input type="hidden" name="txtUser" value="<?php echo $usr;?>" />
</td>
</tr>
<tr>
<td>
<textarea name="txt" cols="30" rows="10" class="textarea" required></textarea> <br>
<input type="submit" name="add" value="send" class="btn btn-default">
</td>

</tr>

</table>
</form>
	</p>
	</p> 
<div class="container">


    
	
  <div class="left">
 
<p>

<hr size="2" >

<?php
include 'conn.php';
$conn=OpenCon();
$sql = "SELECT * FROM responseChat where customerID='$usr'";

 $retval = mysqli_query( $conn,$sql);

echo"<table collspacing='10' cellspacing='10' border='0px' >";
echo"<tr>";
   echo"<td>ID</td>";
   echo"<td>CustomerID</td>";
   echo"<td>Response</td>";
   echo"<td>Date</td>";	

    echo"</tr>";	
while($record=mysqli_fetch_array($retval))
{
     $field1=$record['id'];
	 $field2=$record['customerID'];
	 $field3=$record['txtResponse'];
	 $field4=$record['responseDate'];
	
  echo"<tr>";
   echo"<td>".$field1."</td>";
   echo"<td>".$field2."</td>";
   echo"<td>".$field3."</td>";
   echo"<td>".$field4."</td>";

echo"</tr>";
	
}	

echo"</table>";
?>
</p>

	</div>
 
</div>
	
	</div>
	
	
  </body>
</html>