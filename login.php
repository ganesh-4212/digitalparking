<?php
	session_start();
   if(isset($_GET['logout'])  and ($_GET['logout']==true)){
       $_SESSION['login']=false;
     header("Refresh:0; url=login.php");
    }
	else if( isset($_SESSION['login']) and ($_SESSION['login']==true) ){
        header("location: index.php");
	}else{
		if(isset($_POST['login'])){
			extract($_POST);
			include("./dbconnect.php");
			$query="select * from users where username='$username' and password ='$password'";
			$result=$con->query($query);
			if ($result->num_rows == 1) {
			$_SESSION['user']=$username;
                 $_SESSION['login']=true;
                header("location: index.php");
			}else{
				header('Location: login.php?err=wrong username or password');
			}
			$con->close();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Digital parking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/login.js" type="text/javascript"></script>
  </head>
  <body onload="loginLoad()" >
	<div class="container">
	<div class="centerCard">
	<form method="post">
		<div class="formContent">
	<center> <h1>LOGIN</h1></center>
		<div class="form-group">
			<label for="username" >Username</label>
			<input type="text" name="username" id="username" placeholder="Username" class="form-control" />
		</div>
		<div class="form-group">
			<label for="password" >Password</label>
			<input type="password" name="password" id="password" placeholder="password" class="form-control"/>
			<p style="color: red;"><?php if (isset($_GET['err'])) echo $_GET['err'];?></p>
		</div>
		<div class="form-group" align="center">
			<button type="submit" name="login" value="login" class="btn btn-primary">Login</button>
		</div>
		</div>
		</form>
	</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
