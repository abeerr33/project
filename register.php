<!DOCTYPE html>
<html>
  <head>
    <title>Sign in</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-color:#E8DFD9 ">
   <ul>
   <li><a class="active" href="index.php">Home</a></li>
  <li>
  <a class="active" href="register.php">Registration</a> 
  </li>
    <li><a href="aboutUs.php">About US </a></li>
 
</ul>

<br><br>


<div class="dvx" style="border:ridge 2px black ;">

	<h2 style="color:#333"> Sign In  </h2>
	<br>
<form action="signIn.php" method="post">
	
	<p >
	User:
	<input type="text" name="txtUser" class="txt1" required />
	</p>
	<p >
	Full Name :
	<input type="text" name="txtName"  class="txt1" required />
	</p>
	<p >
	Phone Number:
	<input type="number" name="txtPhone" class="txt1" required />
	</p>
	<p >
	Address:
	<input type="text" name="txtAddress" class="txt1" required />
	</p>
	<p >
	Password :
	<input type="password" name="txtPass" class="txt1" required />
	</p>
	<p >
	
	<input type="submit" name="signIn" class="btn btn-default" />	
	</p>
</form>


</div>

  </body>
</html>