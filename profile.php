
<?php include('connect.php'); ?>
 <?php 
	$msg="";
	session_start();
	//echo "Welcome ".$_SESSION['userName'];

	if(isset($_POST['upload'])){
		// path to store the image
		$target="images/".basename($_FILES['image']['name']);
		$image=$_FILES['image']['name'];
		$userName=$_SESSION['userName'];
		$sql="UPDATE users SET image='$image' where userName='$userName'";
		$mySql=mysqli_query($dbc,$sql);
		
		// move image to images folder
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$msg="uploaded and moved the image";
		}else{
			$msg="uploading unsuccesseed!!";
		}
		$image_path=$target;

		

	}else{
		$userName=$_SESSION['userName'];
		$target="images/Blank-Headshot.jpg";
		$query="SELECT image FROM users WHERE userName='$userName' ";
		$mySql=mysqli_query($dbc,$query);
		$num=mysqli_num_rows($mySql);
		//echo $num;
		$row = mysqli_fetch_row($mySql);
		if(!$num==0){
			if($row[0]!=NULL){
				$image_path="images/".$row[0];
			}else{
				$image_path="images/Blank-Headshot.png";
				 
			}
			
		}else{
			$image_path="images/Blank-Headshot.jpg";
		}
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body  background="images/5e8619a55304979adc901b17f19d559c.jpg">
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
	
		<form name="" method="post" enctype="multipart/form-data" action="profile.php">
			<div class="row">
				<div class="col-md-7">
					
				</div>
				<div class="col-md-2">
					<h4 style="color: lightgreen">insert new picture:</h4>
				</div>
				<div class="col-md-3">
					<input class="file" type="file" name="image" data-show-preview="false">
				</div>
				
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-9">
					<img src=<?php echo $image_path; ?> alt="profile picture" style="width:200px;height:280px;">
					 
				</div>
				<div class="col-md-3">
					<button class="btn btn-success" name="upload">upload</button>
				</div>
			</div>
		</form>

	</div>
</body>
</html>