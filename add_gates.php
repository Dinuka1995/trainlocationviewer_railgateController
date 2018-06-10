<?php include('connect.php'); ?>

<?php

	if($_POST && isset($_POST['lng'])&& isset($_POST['lat']) ){
		// echo '<script language="javascript">';
		// echo 'alert("message successfully sent")';
		// echo '</script>';

		$lat= $_POST['lat'];
		$lng= $_POST['lng'];

		$sqlQuery="INSERT INTO gates(lng,lat) VALUES('$lat','$lng')";

		if(!mysqli_query($dbc,$sqlQuery)){
 			echo "Not working! :".mysqli_error($dbc);
 		}else{
 		  echo "<script> window.location.replace('add_gates.php') </script>"  ;
 		}


	}

?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
  	<link href="css/bootstrap.min.css" rel="stylesheet"> 


  	<style>
		body {
			background-image: url("images/gates.png");
			background-size: cover;
			background-repeat:no-repeat;
		}
		h1   {color: blue;}
		p    {color: red;}
	</style>


	<title>gates</title>
</head>
<body>

	
	<div class="container-fluid">

		<div class="text-center">
			<h1  style="color:blue;"><b><i>Add new gates</i></b></h1>
		</div>
		<br> <br>

		<form id="myForm" method="POST">
			<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<h4>Longitude :</h4>
			</div>
			<div class="col-md-4">
				<input type="text" name="lng">
			</div>
			<div class="col-md-3"></div>
			

		</div> <!-- row -->

		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<h4>Lattitude :</h4>
			</div>
			<div class="col-md-4">
				<input type="text" name="lat">
			</div>
			<div class="col-md-3"></div>
			

		</div> <!-- row -->

		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<!-- <button class="btn btn-success"> Add gate</button> -->
				<input type="submit" name="" class="btn btn-success" value="Add gate">
			</div> 
			<div class="col-md-3"></div>
			

		</div> <!-- row -->

		<script
	  src="http://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous">
	  </script>
	  <!-- jquery plugins for validations -->
	  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"> </script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			// alert("dddddddddd");
 			$("#myForm").validate({
 				rules: {
 					lng:{
 						required:true,
 						minlength:4

 					},
 					lat:{
 						required:true,
 						minlength:5
 					} 
 				},
 				messages:{
 					lng:{
 						required:"Longitude must be provided!",
 	
 					},
 					lat:{
 						required:"Lattitude must be provided!",
 						 
 					} 
 				}


 			});
 		});


 	</script>	


		</form>
		


	</div>
	

</body>
</html>