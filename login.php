<?php
include 'conn.php';
$conn=OpenCon();

if(isset($_POST['login_']))
{   
    $user=$_POST['txtUser'];
    $pass=$_POST['txtPass'];

     if ($user=="abeer" && $pass=="123" )
    
    {
        setcookie('User',$user,time()+60*60*7);
        setcookie('pass',$pass,time()+60*60*7);
        session_start();
        $_SESSION['userID']=$user;
        header("location: admin.php");
    }else
	
      $sql="select userID from customers where userID='$user' and passwrd='$pass' ";
       $result = mysqli_query($conn,$sql); 
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $count = mysqli_num_rows($result); 
       if($count == 1)
	   {
		   setcookie('User',$user,time()+60*60*7);
        setcookie('pass',$pass,time()+60*60*7);
        session_start();
        $_SESSION['userID']=$user;
      header("location:services.php");
       
	   }
       else{
		   
          echo "<script>alert('Invalid User ID or Password!'); window.location.href='loginPage.php';</script>";
       
	   }     
}
?>