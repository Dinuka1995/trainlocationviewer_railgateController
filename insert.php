
<?php include('connect.php'); ?>

<?php
	$userName=$_POST['userName'];
	 $password=$_POST['password'];
	 $Cpassword=$_POST['Cpassword'];
	 $age=$_POST['age'];
	 $email=$_POST['email'];
	 $nic=$_POST['nic'];
	 $position=$_POST['position'];

	 $encryptedPassMd5=md5($password);
	 $encryptedPass = sha1($encryptedPassMd5);

	 $sqlQuery="INSERT INTO controllers(userName,password,age,email,nic,position) VALUES('$userName','$encryptedPass','$age' ,'$email','$nic','$position')";
 
	 if(!mysqli_query($dbc,$sqlQuery)){
 		echo "Not working! :".mysqli_error($dbc);
 	}else{
 	  echo "<script> window.location.replace('index.php') </script>"  ;
 	}


	 

?>