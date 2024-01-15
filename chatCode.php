<?php

include 'conn.php';
$conn=OpenCon();
if(isset($_POST['add']))
{
    
    $idUser= $_POST['txtUser'];
    $txtChat= $_POST['txt'];
    $dateNow= date("h:i:sa")."_". date("Y/m/d");
   
    $sql = "INSERT INTO chat(userID,chatTxt,dateChat)VALUES('$idUser','$txtChat','$dateNow')";
    
    $retval =mysqli_query($conn, $sql) ;
    
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
    
   
   echo "<script>alert('successfully add new Chat!'); window.location.href='chat.php';</script>";
       
 
}
mysqli_close($conn);

?>