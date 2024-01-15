<?php

include 'conn.php';
$conn=OpenCon();
if(isset($_POST['add']))
{    
    $prodDetails= $_POST['prod_details'];
    $orderDate= $_POST['date_order'];
    $total= $_POST['total'];
    $payMethod= $_POST['r'];
    $customerID= $_POST['customerID'];  
    $orderStatus="Incomplete";	
	 if(empty($total)) {
        echo "<script>alert('Your Cart Is Empty!');
		window.location.href='checkOut.php?id=$customerID';</script>";
     
    }else if(empty($payMethod) ) {
        echo "<script>alert('Select Pay Method !');
		window.location.href='checkOut.php?id=$customerID';</script>";
     
    }
	
	else
	{
	
    $sql = "INSERT INTO orders(productDetails,orderDate,totalPrice,payMethod,customerID,orderStatus)VALUES('$prodDetails','$orderDate','$total','$payMethod','$customerID','$orderStatus')";
    
    $retval =mysqli_query($conn, $sql) ;
    
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
    else 
	{
		mysqli_query($conn,"TRUNCATE TABLE cart" );
	 echo "<script>alert('Thanks You for Shooping!'); window.location.href='services.php';</script>";
       	
	}
	
	}
}
  if(isset($_POST['cancel']))
{
	mysqli_query($conn,"TRUNCATE TABLE cart" );
    header("location:services.php");	
} 
 if(isset($_POST['add1']))
{
    header("location:services.php");	
} 
mysqli_close($conn);
?>