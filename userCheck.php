
<?php include('connect.php'); ?>

<?php
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

?>