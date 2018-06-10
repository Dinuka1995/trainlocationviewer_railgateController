
<!DOCTYPE html>
<html>
<head>
	<title>successful</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 

</head>
<body background="images/5e8619a55304979adc901b17f19d559c.jpg">

	<div class="container-fluid">
		
		<div class="row">
			<?php include('navbar.php'); ?>

		</div>
		<div style="color: red; font-size: 25px;" class="row">
			<div class="text-center">
				<?php 
					session_start();
					echo "Welcome ".$_SESSION['userName'];

					//header("location:")

				 ?>
			</div>
			
		</div>
	</div>


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <script src="js/bootstrap.min.js"></script> 
</body>
</html>