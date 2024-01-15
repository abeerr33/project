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
<link rel="stylesheet" href="style.css">
	
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
.active {
  background-color: #04AA6D;
  color: white;
}
ul {
  border: 1px solid #555;
}

li {
  text-align: center;
  border-bottom: 1px solid #555;
}

li:last-child {
  border-bottom: none;
}
</style>

</head>
<body style="background-color:#E8DFD9 ">
<script>
      function fun() {
         document.getElementById("d1").style.display='block';
		 document.getElementById("d2").style.display='none';
		 document.getElementById("d3").style.display='none';
		   document.getElementById("d4").style.display='none';
		    document.getElementById("d5").style.display='none';
      }
	  function fun1() {
        document.getElementById("d2").style.display='block';
		 document.getElementById("d1").style.display='none';
		 document.getElementById("d3").style.display='none';
		   document.getElementById("d4").style.display='none';
		    document.getElementById("d5").style.display='none';
      }
	 
	  function fun3() {
        document.getElementById("d4").style.display='block';
		 document.getElementById("d1").style.display='none';
		 document.getElementById("d2").style.display='none';
		  document.getElementById("d3").style.display='none';
		   document.getElementById("d5").style.display='none';
      }
	   function fun4() {
        document.getElementById("d5").style.display='block';
		 document.getElementById("d1").style.display='none';
		 document.getElementById("d2").style.display='none';
		  document.getElementById("d3").style.display='none';
		  document.getElementById("d4").style.display='none';
      }
	  function fun2() {
        document.getElementById("d3").style.display='block';
		 document.getElementById("d1").style.display='none';
		 document.getElementById("d2").style.display='none';
		  document.getElementById("d5").style.display='none';
		  document.getElementById("d4").style.display='none';
      }
   </script>
<h2>Admin Menu</h2>

<table>
<tr>

<td style="width:700px;">
<div>
<ul>

  <li><a onclick="fun()" href="javascript:fun()" >Manage Orders </a></li>
  <li><a onclick="fun1()" href="javascript:fun1()">Manage Customers</a></li>
 
  <li><a onclick="fun3()" href="javascript:fun3()">Chat-with As List</a></li>
  <li><a onclick="fun4()" href="javascript:fun4()">Manage Products</a></li>
	 <li><a onclick="fun2()" href="javascript:fun2()">Weekly Report</a></li>
 
</ul>
</div>
</td>
<td style="width:100%;">
<div class="dvx" id="d1" style="display:none;">
<h2>Manage Orders </h2>

 <?php
	include 'conn.php';
$conn=OpenCon();
	
$sql = 'SELECT * FROM orders';

 $retval = mysqli_query( $conn,$sql);

echo"<table border='1'  cellspacing='0' cellpadding='10' >";
echo"<tr>";
   echo"<td>ID</td>";  
   echo"<td >Product Details</td>";
   echo"<td>Date</td>";
    echo"<td>Total Price</td>";
	 echo"<td>Pay Mode</td>";
	 echo"<td>Customers</td>";
	  echo"<td>Order Status</td>";
	  echo"<td>Confirm Order </td>";
	   echo"<td>Delete</td>";
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
	
 echo"<form action='confirmOrder.php' name='orders' method='Post'>";
  echo"<tr >";
  echo"<td>"."<input type=text name=txt class=txt readonly value=".$field1.">"."</td>";
  echo"<td>".$field2."</td>";
  echo"<td >".$field3."</td>";
  echo"<td >".$field4."</td>";
   echo"<td >".$field5."</td>";
   echo"<td>".$field6."</td>";
   echo"<td style='color:red'>".$field7."</td>";
   echo"<td><input type=submit name=confirm class='' style='height:25px; font-size:small; width:70px' value='Confirm' ></td>";
    echo"<td><input type=submit name=delete class='' style='height:25px;width:70px;font-size:small;' value='Delete' ></td>";
    echo"</tr>";
	echo"</form>";
}	
echo"</table>";
?>




</div>

<div class="dvx" id="d2" style="display:none;">
<h2>Manage Customers</h2>

  <?php

$sql = 'SELECT * FROM customers';

 $retval = mysqli_query( $conn,$sql);

echo"<table collspacing='0' cellspacing='0' border='1px' >";
echo"<tr style='background-color: ;'>";
   echo"<td>User ID</td>";  
   echo"<td>Fullname</td>";
   echo"<td>Mobile</td>";
    echo"<td>Address</td>";
    echo"<td>Password</td>";
	 echo"<td>Edit</td>";
	 echo"<td>Delete</td>";
	echo"</tr>";
while($record=mysqli_fetch_array($retval))
{
     $field1=$record['userID'];
	 $field2=$record['fullName'];
	 $field3=$record['phoneNumber'];
	 $field4=$record['address'];
	 $field5=$record['passwrd'];
	
	
echo"<form action='adminCode.php'  method='Post'>";
   echo"<tr>";
   echo"<td>"."<input type=text name=txt class=txt readonly value=".$field1.">"."</td>";
   echo"<td>"."<input type=text name=txt1 class=txt readonly value=".$field2.">"."</td>";
   echo"<td>"."<input type=text name=txt2 class=txt  value=".$field3.">"."</td>";
   echo"<td>"."<input type=text name=txt3 class=txt  value=".$field4.">"."</td>";
   echo"<td>"."<input type=text name=txt4 class=txt readonly value=".$field5.">"."</td>";
   
   echo"<td><input type=submit name=edit class='' style='height:30px' value='Update' ></td>";
    echo"<td><input type=submit name=delete class='' style='height:30px;' value='Remove' ></td>";
    echo"</tr>";
	echo"</form>";
}	
echo"</table>";
?>

</div>

<div class="dvx" id="d4" style="display:none;">
<h2>Manage Chat-with-As list</h2>

<p>

<?php
	
$sql = "SELECT * FROM chat";

 $retval = mysqli_query( $conn,$sql);

echo"<table collspacing='10' cellspacing='10' border='1px' >";
echo"<tr>";
   echo"<td>ID</td>";
   echo"<td>Customer/ID</td>";
   echo"<td>Txt Chat</td>";
   echo"<td>date & time</td>";
	
	echo"<td>Delete</td>";
    echo"</tr>";	
while($record=mysqli_fetch_array($retval))
{
     $field1=$record['id'];
	 $field2=$record['userID'];
	 $field3=$record['chatTxt'];
	 $field4=$record['dateChat'];
	
  echo"<tr>";
   echo"<td>".$field1."</td>";
   echo"<td>".$field2."</td>";
   echo"<td>".$field3."</td>";
   echo"<td>".$field4."</td>";
    

echo"<td>"." <a  href=chat-delete.php?id=".$field1."&usr=".$usr."> <img src='img\del.png'/> </a>"."</td>";
echo"</tr>";
	
}	

echo"</table>";
?>


</p>
<br/>


<div class="dvx" id="d6" style="display:block;">
<h2> Response List</h2>
<p>
<form  method="post" action="addResponse.php" enctype="multipart/form-data">
	
	<p >
	Customer ID :
	
	 <?php

$sql = "SELECT userID,fullName FROM customers";
$result = mysqli_query($conn,$sql);

echo "<select name='customerID' width='200px' height='25px'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['userID'] . "'>" . $row['fullName'] . "</option>";
}
echo "</select>";

?>
	</p>
	<p >
	Response Text :
	<textarea name="txt" cols="30" rows="10" class="textarea" required></textarea> <br/>	
	</p>
	
	<p>
	
	<input type="submit" name="addresponse"  value="Submit response"  />	
	</p>
</form>


</p>


<p>

<hr size="2" >

<?php

$sql = "SELECT * FROM responseChat";

 $retval = mysqli_query( $conn,$sql);

echo"<table collspacing='10' cellspacing='10' border='1px' >";
echo"<tr>";
   echo"<td>ID</td>";
   echo"<td>Customer/ID</td>";
   echo"<td>Txt Response</td>";
   echo"<td>date & time</td>";	
	echo"<td>Delete</td>";
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
echo"<td>"." <a  href=response-delete.php?id=".$field1."&usr=".$usr."> <img src='img\del.png'/> </a>"."</td>";
echo"</tr>";
	
}	

echo"</table>";
?>
</p>
</div>

<br/>


</div>


<div class="dvx" id="d5" style="display:none;">
<h2> Products List</h2>


<p>


<form  method="post" action="addProduct.php" enctype="multipart/form-data">
	
	<p >
	Product ID :
	<input type="text" name="txtID" style="width:200px" class="form-control" required />
	</p>
	<p >
	Product Name :
	<input type="text" name="txtName" style="width:200px" class="form-control" required />
	</p>
	
	<p >
	Product Category:
	<input type="txt" name="txtCateg" style="width:200px" class="form-control" required />
	</p>
	
	<p >
	Product Price:
	<input type="txt" name="txtPrice" style="width:200px" class="form-control" required />
	</p>
	<p >
	Product Description:
	<input type="txt" name="txtDesc" style="width:200px;height:50px" class="form-control" required />
	</p>
	<p >
	Product QTY:
	<input type="txt" name="txtQty" style="width:200px;" class="form-control" required />
	</p>
	
	<p >
	Product Photo :
	<input type="file" name="uploadfile" required style="width:200px;" value="" />
	</p>
	
	<p>
	
	<input type="submit" name="add"  value="Add new Product" class="" />	
	</p>
</form>


</p>


<p>
<hr size="2" >
<?php
	
$sql = "SELECT * FROM products";
$retval = mysqli_query( $conn,$sql);
			
echo"<table collspacing='30' cellspacing='10' border='1px' >";
echo"<tr>";
   echo"<td>ID</td>";
   echo"<td>Product ID</td>";
   echo"<td>Product Name</td>";
	echo"<td>Category</td>";
	echo"<td>Price</td>";
	echo"<td>Description</td>";
	echo"<td>QTY</td>";
	echo"<td>Photo</td>";
    echo"</tr>";	
while($record=mysqli_fetch_array($retval))
{
     $field1=$record['id'];
	 $field2=$record['productID'];
	 $field3=$record['productName'];
	 $field4=$record['category'];
	 $field5=$record['price'];
	 $field6=$record['description'];
	 $field7=$record['QTY'];
	 $field8=$record['photo'];
	
   echo"<tr>";
   echo"<td>".$field1."</td>";
   echo"<td>".$field2."</td>";
   echo"<td>".$field3."</td>";
   echo"<td>".$field4."</td>";
   echo"<td>".$field5."</td>";
   echo"<td>".$field6."</td>";
   echo"<td>".$field7."</td>";
 
echo"<td><img src=".$field8." width=70px height=70px /></td>";
echo"<td>"." <a  href=product-delete.php?id=".$field1."&usr=".$usr."> <img src='img\del.png'/> </a>"."</td>";
echo"</tr>";
	
}	

echo"</table>";
?>
</p>

</div>

<div class="dvx" id="d3" style="display:none;">
<h2> Weekly Report</h2>
<br/>

<?php
$date1 = date("Y-m-d");
$date = strtotime($date1);
$date = strtotime("-6 day", $date);
echo "From : \t ", date('Y-m-d', $date),"\t To : ",$date1;

?>

<p>
<hr size="2" >
<?php


	
$sql = "SELECT * FROM weekly_report";

 $retval = mysqli_query( $conn,$sql);

$total=0;
$result = mysqli_query($conn,'SELECT sum(total) as total FROM weekly_report');
while ($rows = mysqli_fetch_array($result)) 
{
	$total= $rows['total'];
		
}
$countOrders=0;
$result = mysqli_query($conn,'SELECT sum(Sum_Trans) as sumTrans FROM weekly_report');
while ($rows = mysqli_fetch_array($result)) 
{
	$countOrders= $rows['sumTrans'];
		
}
			
echo"<table collspacing='30' cellspacing='10' border='1px' >";
echo"<tr>";
   echo"<td>Customer ID</td>";
   echo"<td>Weekly Orders By Customers</td>";
   echo"<td>Last Order Date</td>";
	echo"<td>Method Payment</td>";
	echo"<td>Order Status</td>";
	echo"<td>Total Amount By Customer</td>";	
    echo"</tr>";

while($record=mysqli_fetch_array($retval))
{
     $field1=$record['customerID'];
	 $field2=$record['Sum_Trans'];
	 $field3=$record['orderDate'];
	 $field4=$record['payMethod'];
	 $field5=$record['orderStatus'];
	 $field6=$record['total'];
	 
  echo"<tr>";
   echo"<td>".$field1."</td>";
   echo"<td>".$field2."</td>";
   echo"<td>".$field3."</td>";
   echo"<td>".$field4."</td>";
   echo"<td>".$field5."</td>";
   echo"<td>".$field6."</td>";
echo"</tr>";
	
}	
echo"<tr>";
   echo"<td >Total Amount (OMR)</td>";
   echo"<td colspan='5' style='color:red; font-size:large; font-weight:bold;'>".$total."</td>";
  echo"</tr>"; 
echo"<tr>";
   echo"<td >Total Weekly Orders </td>";
   echo"<td colspan='5' style='color:red; font-size:large; font-weight:bold;'>".$countOrders."</td>";
  echo"</tr>"; 
echo"</table>";
?>
</p>



</div>

</td>

</tr>
</table>



</body>
</html>




