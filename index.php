
<?php include('connect.php'); ?>

<?php 

	if($_POST && $_POST['userName'] && $_POST['password']){

		$userName=$_POST['userName'];
	$password=$_POST['password'];

	$adminPassMd5= md5('admin123');
	$adminPassShal = sha1($adminPassMd5);

	$passwordMd5= md5($password);
	$passwordShal=sha1($passwordMd5);



	$Que="SELECT password,status from controllers where username='$userName'";

	if(($userName=='Admin')&&$adminPassShal=='036d0ef7567a20b5a4ad24a354ea4a945ddab676'){
		echo "<script> window.location.replace('view_controllers.php') </script>"  ;
		return ;
	}

	$mySql=mysqli_query($dbc,$Que);
	$num=mysqli_num_rows($mySql);
	//echo $num;
	$row = mysqli_fetch_row($mySql);
	//check resulds are null
	if(!$num==0){
		// echo $row[0];
		 //check given password correct
		if(($passwordShal ==$row[0]) && ($row[1]==1)){
			setcookie('userName',$userName,time());
			session_start();
			$_SESSION['userName']=$userName;

			echo "<script> window.location.replace('index1.php') </script>"  ;
		}else{
 
			echo "<script> window.location.replace('index.php') </script>"  ;
		}
	}else{
		echo "<script> window.location.replace('index.php') </script>"  ;
	}


	}


?>




<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script> 
   	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"> 

	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
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

	<script type="text/javascript">
		
		function showAlert(){
			 alert("Even if you registered now, you have to wait until get approved by authorized person!");
			 
		}


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
    <div class="heading">
      		<img src="images/top_bar_bg.jpg" class="img-thumbnail">
   	</div>
	<div class="container-fluid">
		<br><br>
		<div class="text-center ">
			<h1  style="color:cyan;"><b><i>Train location viewer</i></b></h1>
		</div>
		<br><br>

		<form name="viewer-form" id="viewer-form" method="get" action="index1.php">
			
			<div class="row">
				<div class="col-md-4" ></div>
			<div class="col-md-2" >
				<h4 style="color: lightgreen">Select the train :</h4>
			</div>
			<div class="col-md-3" >
				<div class="form-group">
					 
					<select class="form-control"> 
						<option>All trains</option> 
						<option>Udarata Menike</option> 
						<option>Podi Manike</option> 
						<option>Yaal Devi </option> 
						<option>Rajarata rajini</option> 
						<option>Ruhunu Kumari</option> 
						<option>Samudra Devi</option> 
						<option>Galu Kumari</option> 
						<option>Sagarika</option> 
					</select>
				</div>
				
			</div>
			<div class="col-md-3"></div>
				
			</div>

			<div class="row"> 
			<div class="col-md-6" ></div>
			 
			<div class="col-md-3" >
				<button class="btn btn-success">View Map</button>
			</div>
			<div class="col-md-3" ></div>
			
			</div> <!-- row -->

		</form> <!-- form for viewers -->

		<br> <br>

		<form name="myForm" id="myForm"    method="post">  <!-- onsubmit="return validate()" -->


		<div class="text-center" style="color: red;">
			<h3><b>For Controllers only!</b></h3>
		</div>

		<br>
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
			 
			<div class="col-md-1 col-xs-6" >
				<button class="btn btn-primary">Sign in</button>
			</div>
			</form> <!--  sign in form -->

			<form action="sign_up.php">
				<div class="col-md-5 col-xs-6">
					<button onclick="showAlert()" class="btn btn-success">Sign up</button>
				</div>
			</form><!--  sign up form -->
			
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