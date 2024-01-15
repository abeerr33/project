<?php

include 'conn.php';
$conn=OpenCon();
if(isset($_POST['add']))
{
   
     $txtChat= $_POST['txt'];
	 $customerID= $_POST['customerID'];
    $dateNow= date("h:i:sa")."_". date("Y/m/d");
   
    
    $sql = "INSERT INTO feedback(customerID,dateTime,txtFeedback)VALUES('$customerID','$dateNow','$txtChat')";
    
    $retval =mysqli_query($conn, $sql) ;
    
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
    
  echo "<script>alert('Your Feedback Successfully added!'); window.location.href='contactAs.php';</script>";
   	
}
mysqli_close($conn);

?>