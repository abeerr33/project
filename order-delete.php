 <?php
include 'conn.php';
$conn=OpenCon();
$itemId=$_GET['id'];
$userID=$_GET['usr'];

//echo $itemId,$userID;

mysqli_query($conn,"delete from  orders where ordersID=$itemId " );
 header("location:admin.php?id=".$userID."");

?>