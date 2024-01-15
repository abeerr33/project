  <?php
include 'conn.php';
$conn=OpenCon();

    $user=$_POST['txt'];
    $mobile=$_POST['txt2'];
	$address=$_POST['txt3'];

if(isset($_POST['delete']))
{   
 mysqli_query($conn,"delete from  customers where userID='$user'" );
 echo "<script>alert('Successfully remove Customer !'); window.location.href='admin.php';</script>";      

}
if(isset($_POST['edit']))
{   

$sql = "UPDATE customers SET phoneNumber='$mobile', address='$address'  WHERE userID='$user'";

if ($conn->query($sql) === TRUE) 
{
 echo "<script>alert('Successfully Update customers !'); window.location.href='admin.php';</script>";      

} 
else
	{
 echo "<script>alert('Error edit customers !'); window.location.href='admin.php';</script>";      

}
 
}
?>