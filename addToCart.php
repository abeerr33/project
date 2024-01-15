
<?php

include 'conn.php';
$conn=OpenCon();
if(! $conn ) 
{
 die('Could not connect: ' . mysql_error());
}

if(isset($_POST['add']))

 {	  
   $qty= $_POST['qty'];
   $itemName= "Aerated Steam:Cascade Model";
   $itemID= 1;
   $price= 3;
   $total= (int)$qty*$price; 
 
 $sql = "INSERT INTO cart(item_id,item_name,price,qty,total)VALUES('$itemID','$itemName','$price','$qty','$total')";
    
 $retval =mysqli_query($conn, $sql) ;
     header("location:services.php"); 
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
}
if(isset($_POST['add1']))

 {	  
   $qty1= $_POST['qty1'];
   $itemName= "Spray Steam:Spray Model";
   $itemID= 2;
   $price= 3;
   $total= (int)$qty1*$price; 
 
 $sql = "INSERT INTO cart(item_id,item_name,price,qty,total)VALUES('$itemID','$itemName','$price','$qty1','$total')";
    
 $retval =mysqli_query($conn, $sql) ;
     header("location:services.php"); 
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
}
if(isset($_POST['add2']))

 {	  
   $qty2= $_POST['qty2'];
   $itemName= "Laminar Steam:Honey Comb Model";
   $itemID= 3;
   $price= 3.5;
   $total= (int)$qty2*$price; 
 
 $sql = "INSERT INTO cart(item_id,item_name,price,qty,total)VALUES('$itemID','$itemName','$price','$qty2','$total')";
    
 $retval =mysqli_query($conn, $sql) ;
     header("location:services.php"); 
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
}

if(isset($_POST['add3']))

 {	  
   $qty3= $_POST['qty3'];
   $itemName= "Pressure componsation Regulator";
   $itemID= 4;
   $price= 5.0;
   $total= (int)$qty3*$price; 
 
 $sql = "INSERT INTO cart(item_id,item_name,price,qty,total)VALUES('$itemID','$itemName','$price','$qty3','$total')";
    
 $retval =mysqli_query($conn, $sql) ;
     header("location:services.php"); 
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
}
?>
