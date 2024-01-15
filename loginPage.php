<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
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

<br/><br/>

<div class="dx" style="border:solid 2px black ;width: 40%;  top:10; padding-left:20px;
    bottom: 0;
    left: 0;
    right: 0;   
    margin: auto; position:relative;">

	<h2 style="color:#000">&nbsp; &nbsp; &nbsp; Login   </h2>
	<hr>
	<br/>
	
<form action="login.php" method="post">
	
	<p >
&nbsp; &nbsp; &nbsp;	User  :
	<input type="text" name="txtUser" placeholder="Username " class="txt1" required />
	</p>
	<p >
&nbsp; &nbsp; &nbsp;	Password :
	<input type="password" name="txtPass" placeholder="Password" class="txt1" required />
	</p>
	<br/>
	<p >
	
&nbsp; &nbsp; &nbsp;	<input type="submit" name="login_" value="Login" class="btn" />	
	</p>
	
</form>

</div>

  </body>
</html>