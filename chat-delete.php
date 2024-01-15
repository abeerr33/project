   <?php
include 'conn.php';
$conn=OpenCon();
$chatId=$_GET['id'];
$userID=$_GET['usr'];

//echo $itemId,$userID;

mysqli_query($conn,"delete from  chat where id=$chatId " );
 header("location:admin.php?id=".$userID."");

?>