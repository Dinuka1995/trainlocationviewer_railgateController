<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<script type="text/javascript">
	   <!--
	      // Form validation code will come here.
	      function validate()
	      {
	      
	         if( document.myForm.userName.value == "" )
	         {
	            alert( "Please provide your user name!" );
	            document.myForm.userName.focus() ;
	            return false;
	         }
	         
	         if( document.myForm.password.value == "" )
	         {
	            alert( "Please provide your password!" );
	            document.myForm.password.focus() ;
	            return false;
	         }
 			return true;
	      }
	   //-->
	</script>

	<style>
		body {
			background-image: url("images/train-hd-wallpaper-7.jpg");
			background-size: cover;
			background-repeat:no-repeat;
		}
		h1   {color: blue;}
		p    {color: red;}
	</style>

	<title>home</title>
</head>
<body >
	<div class="container-fluid">
		<br><br><br>
		<div class="text-center">
			<h1 style="color:cyan;"><b><i>Train location viewer</i></b></h1>
		</div>
		<br><br><br><br>

		<form name="myForm" id="myForm"   action="userCheck.php" method="post">  <!-- onsubmit="return validate()" -->
		<div class="row"> 
			<div class="col-md-4" >
				
			</div>
			<div class="col-md-2" >
				<h4 style="color: lightgreen">User name:</h4>
			</div>
			<div class="col-md-3" >
				<input class="form-control small" type="text" name="userName" placeholder="User name">
			</div>
			<div class="col-md-3">
			</div>
		</div>
		<div class="row"> 
			<div class="col-md-4" >
				
			</div>
			<div class="col-md-2" >
				<h4 style="color: lightgreen">Password :</h4>
			</div>
			<div class="col-md-3" >
				<input class="form-control small" type="password" name="password" placeholder="Password">
			</div>
			<div class="col-md-3">
			</div>
		</div>
		<div class="row"> 
			<div class="col-md-6" >
				
			</div>
			 
			<div class="col-md-1" >
				<button class="btn btn-primary">Sign in</button>
			</div>
			</form>
			<form action="sign_up.php">
				<div class="col-md-5">
					<button class="btn btn-success">Sign up</button>
				</div>
			</form>
			
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<a href="request.php">Forgot your password?</a>
			</div>
		</div>
	</div>
	<script
	  src="http://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous">
	  </script>
	  <!-- jquery plugins for validations -->
	  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"> </script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			$("#myForm").validate({
 				rules: {
 					userName:{
 						required:true,
 						minlength:4

 					},
 					password:{
 						required:true,
 						minlength:5
 					} 
 				},
 				messages:{
 					userName:{
 						required:"user name is required!",
 	
 					},
 					password:{
 						required:"password is required!",
 						 
 					} 
 				}


 			});
 		});


 	</script>	


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
   <!--    <script src="js/bootstrap.min.js"></script>  -->
</body>
</html>