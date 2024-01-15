 
 <?php
 
 include 'conn.php';
$conn=OpenCon();

 $targetDir = "img/"; 
 
 $productID=$_POST['txtID'];
 $productName=$_POST['txtName'];
 $category=$_POST['txtCateg'];
 $price=$_POST['txtPrice'];
 $desc=$_POST['txtDesc'];
 $qty=$_POST['txtQty'];

 if(isset($_POST['add']))
 {	 
  $fileName = $_FILES['uploadfile']['name'];
    $tempName = $_FILES['uploadfile']['tmp_name'];
    $folder = "./img/" . $fileName;

 $sql = "INSERT INTO products (productID,productName,category,price,description,qty,photo)
				VALUES ('$productID','$productName','$category','$price','$desc',' $qty','$folder')"; 
$retval= mysqli_query($conn, $sql) ;
   
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
 if (move_uploaded_file($tempName, $folder)) {
        echo "<script>alert('Successfully Add products !'); window.location.href='admin.php';</script>";      

	} else {
        echo "<script>alert('Error  !'); window.location.href='admin.php';</script>";      
    }
 }
 ?>