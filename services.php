
<?php
include 'conn.php';
$conn=OpenCon();
if(! $conn ) 
{
 die('Could not connect: ' . mysql_error());
}

$sql = "SELECT * from cart";

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
	
}
?>

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
    <title>Index</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
	
	<style>
	td,th{
		 padding: 20px;
	}
.zoom {
  padding: 0px;
  background-color: black;
  transition: transform .3s; /* Animation */
  width: 100px;
  height: 100px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(4); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
	
  </head>
  <body style="background-color:#E8DFD9 ">
   <ul>

  
  <li><a href="services.php">Products</a></li>
  <li><a href="chat.php">Chat With Us</a></li>
   <li><a href="contactAs.php">Contact Us </a></li>
   <li>
  <a class="active" href="allListOrders.php?id=<?php echo $usr;?>">List Orders</a> 
  </li>
    <li><a href="checkOut.php?id=<?php echo $usr;?>"><img src="img\basket.png" width="40px" height="40px" /> <input type="text" class="nbr" name="nbr" id="nbr" value="<?php echo $rowcount;?>"/> </a></li>

</ul>
	
	<br>
	<br>
	<div class="dvx">
	<br>
	
	<p style=" text-align:justifier;font-size:48px; margin:35px; font-weight:bold;" >
	

 PRODUCTS OF ORDERING
	
	</p> <br>
	
<div class="container">
 <form name="frm" action="addToCart.php" method="post">

<table cellspacing="0px">
<tr>
<td>

<img src="img\8.jpeg" width="100" height="100" class="zoom"/>
</td>
<td>
<img src="img\10.png"  height="100" width="300"/>

<input type="number" name="qty" id="qty" value="1" class="qty"/>
<input type="submit" value="Add to Basket" name="add" />

</td>

<td>
<img src="img\9.jpeg" class="zoom"  height="100"/>
</td>

<td>
<img src="img\11.png"  height="100"/>

<input type="number" name="qty1" id="qty" value="1" class="qty"/>
<input type="submit" value="Add to Basket" name="add1" />

</td>

</tr>
<tr>
<td>
<img src="img\12.jpeg" class="zoom" width="100" height="100"    />
</td>
<td>
<img src="img\13.png"  height="100"/>

<input type="number" name="qty2" id="qty" value="1" class="qty"/>
<input type="submit" value="Add to Basket" name="add2" />

</td>
<td>
<img src="img\14.jpeg" class="zoom" height="100"  />
</td>
<td>
<img src="img\15.png"  height="100"/>

<input type="number" name="qty3" id="qty" value="1" class="qty"/>
<input type="submit" value="Add to Basket" name="add3" />

</td>

</tr>

</table>

</form>
	
</div>
	
	</div>
	
	
  </body>
</html>