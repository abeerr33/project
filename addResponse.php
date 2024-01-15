 <?php

include 'conn.php';
$conn=OpenCon();
if(isset($_POST['addresponse']))
{
    			
	
    $idUser= $_POST['customerID'];
    $txtChat= $_POST['txt'];
    $dateNow= date("h:i:sa")."_". date("Y/m/d");
   
    $sql = "INSERT INTO responseChat(customerID,txtResponse,responseDate)VALUES('$idUser','$txtChat','$dateNow')";
    
    $retval =mysqli_query($conn, $sql) ;
    
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
    
   
   echo "<script>alert('successfully add new response!'); window.location.href='admin.php';</script>";
       
 
}
mysqli_close($conn);

?>