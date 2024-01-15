   <?php
include 'conn.php';
$conn=OpenCon();

    $ordersID=$_POST['txt'];
   $status="Completed";
if(isset($_POST['delete']))
{   
 mysqli_query($conn,"delete from  orders where ordersID='$ordersID'" );
 echo "<script>alert('Successfully remove Orders !'); window.location.href='admin.php';</script>";      

}
if(isset($_POST['confirm']))
{   
 $sql = "UPDATE orders SET orderStatus='$status' WHERE ordersID='$ordersID'";

if ($conn->query($sql) === TRUE) 
{
 echo "<script>alert('Successfully Confirm Orders !'); window.location.href='admin.php';</script>";      

} 
else
	{
 echo "<script>alert('Error !'); window.location.href='admin.php';</script>";      

}
}
?>