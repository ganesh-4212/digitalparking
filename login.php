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
		<div class="formContent">
	<center> <h1>LOGIN</h1></center>
		<div class="form-group">
			<label for="username" >Username</label>
			<input type="text" name="username" id="username" placeholder="Username" class="form-control" />
		</div>
		<div class="form-group">
			<label for="password" >Password</label>
			<input type="password" name="password" id="password" placeholder="password" class="form-control"/>
		</div>
		<div class="form-group" align="center">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
		</div>
	</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>