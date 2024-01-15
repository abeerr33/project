 
<?php
$userID=$_GET['id'];
?>
<?php 

echo"<div style='float:right;'>";
echo"<a href='logOut.php'><img src='img\logout.png'/></a> ";
echo"<h3 style='color:#333'>" .$userID;
echo"</h3>";
echo "</div>";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>List Orders</title>
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
	<br/><br/>

<div class="dvx">
	
	<p style=" text-align:justifier;font-size:28px; margin:35px; font-weight:bold;" >
	
 ALL LIST ORDER
	
	</p>
<p>
  <?php
	include 'conn.php';
$conn=OpenCon();
if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}

	
$sql = "SELECT * FROM orders where customerID='$userID'";

 mysqli_select_db($conn,'ecowater_saver');
 $retval = mysqli_query( $conn,$sql);
 
if(! $retval ) {
    die('Could not enter data: ' . mysql_error());
}

echo"<table collspacing='0' cellspacing='0' border='1px' >";
echo"<tr>";
   echo"<td>ID</td>";
   echo"<td>Details</td>";
   echo"<td>Order Date </td>";
   echo"<td>Total Amount(OMR)</td>";
   echo"<td>Pay Method</td>";
    echo"<td>Customer ID</td>";
	echo"<td>Order Status</td>";
	echo"<td>Cancel order</td>";
    echo"</tr>";
								
while($record=mysqli_fetch_array($retval))
{
     $field1=$record['ordersID'];
	 $field2=$record['productDetails'];
	 $field3=$record['orderDate'];
	 $field4=$record['totalPrice'];
	 $field5=$record['payMethod'];
	 $field6=$record['customerID'];
	 $field7=$record['orderStatus']; 
  echo"<tr>";
   echo"<td>".$field1."</td>";
   echo"<td>".$field2."</td>";
   echo"<td>".$field3."</td>";
   echo"<td>".$field4."</td>";
   echo"<td>".$field5."</td>";
    echo"<td>".$field6."</td>";
	 echo"<td>".$field7."</td>";
echo"<td>"." <a  href=customer-order-delete.php?id=".$field1."&usr=".$userID."> <img src='img\del.png'/> </a>"."</td>";
    echo"</tr>";
	
}	
 
echo"</table>";
?>

</p>
</div>
		
  </body>
</html>