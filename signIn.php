<?php

include 'conn.php';
$conn=OpenCon();
if(isset($_POST['signIn']))
{
    
    $idUser= $_POST['txtUser'];
    $nameUser= $_POST['txtName'];
    $phoneN= $_POST['txtPhone'];
    $address= $_POST['txtAddress'];
    $password=$_POST['txtPass'];
	   $sql="select userID from customers where userID='$idUser'";
       $result = mysqli_query($conn,$sql); 
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $count = mysqli_num_rows($result);                           
            if($count==1) {
               
 echo "<script>alert('Customers ID already exists !'); window.location.href='register.php';</script>";
   
            }else{
				
    $sql = "INSERT INTO customers(userID,fullName,phoneNumber,address,passwrd)VALUES('$idUser','$nameUser','$phoneN','$address','$password')";
    
    $retval =mysqli_query($conn, $sql) ;
    
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
   echo "<script>alert('Successfully Add new Customers !'); window.location.href='loginPage.php';</script>";
       
			}
}
mysqli_close($conn);
?>