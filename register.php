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
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/login.js" type="text/javascript"></script>
  </head>
  <body onload="loginLoad()" >
	<div class="container">
	<div class="centerCard">
	<form method="post">
		<div class="formContent">
	<center> <h1>REGISTER</h1></center>
		<div class="form-group">
			<label for="username" >Username</label>
			<input type="text" name="username" id="username" placeholder="Username" class="form-control" />
		</div>
		<div class="form-group">
			<label for="Number" >Phone No:</label>
			<input type="text" name="number" id="number" placeholder="Phone" class="form-control" />
		</div><div class="form-group">
			<label for="email" >E-Mail</label>
			<input type="text" name="email" id="email" placeholder="E-Mail" class="form-control" />
		</div>
		<div class="form-group">
			<label for="address" >Address</label>
			<input type="text" name="address" id="address" placeholder="Address" class="form-control" />
		</div>
		<div class="form-group">
			<label for="password" >Password</label>
			<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
			<p style="color: red;"><?php if (isset($_GET['err'])) echo $_GET['err'];?></p>
		</div>
		<div class="form-group">
			<label for="password" >Confirm Password</label>
			<input type="password" name="password" id="password" placeholder="Re-Password" class="form-control"/>
			<p style="color: red;"><?php if (isset($_GET['err'])) echo $_GET['err'];?></p>
		</div>
		<div class="form-group" align="center">
			
			<button type="submit" name="register"" value="register" class="btn btn-primary">REGISTER</button>
			<button type="clear" name="clear" value="" class="btn btn-primary">CLEAR</button>
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
