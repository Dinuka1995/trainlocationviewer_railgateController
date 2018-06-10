<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 

	<style>
		body {
			background-image: url("images/train-hd-wallpaper-7.jpg");
			background-size: cover;
			background-repeat:no-repeat;
		}
		h1   {color: blue;}
		p    {color: red;}
	</style>

	<title>request username password</title>
</head>
<body  >
	<div class="container-fluid">
	<form name="" method="post" action="sendMail.php">
		<div class="text-center">
			<h2 style="color: lightblue;">Forgot your password?</h2>
		</div>
		<br><br>
		<br><br>
		<div class="row text-center">
			<div class="col-md-4"></div>
			<div class="col-md-2">
				<h4 style="color: white;">username:</h4>
			</div>
			<div class="col-md-3">
				<input class="form-control small" type="text" name="username">
			</div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6"></div>

			<div class="col-md-3">

				<button class="btn btn-primary">send password</button>
			</div>
			<div class="col-md-3"></div>
		</div>


	</form>
		
	</div> <!-- container -->
	
</body>
</html>