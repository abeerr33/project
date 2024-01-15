  <?php
include 'conn.php';
$conn=OpenCon();
$prodID=$_GET['id'];
$userID=$_GET['usr'];

//echo $itemId,$userID;

mysqli_query($conn,"delete from  products where id=$prodID " );
 header("location:admin.php?id=".$userID."");

?>