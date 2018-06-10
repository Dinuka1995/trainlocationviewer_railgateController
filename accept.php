<?php include 'connect.php' ?>

<?php
 
// this will be use to accept the controllers
	
	$username=$_POST['username']; 
	$nic=$_POST['nic']; 
	//echo $username;
	//echo $nic;

	$Que="UPDATE controllers SET status=TRUE where username='$username' and nic='$nic'"; // set status true for accepting controller
	$mySql=mysqli_query($dbc,$Que);

	echo "<script> window.location.replace('view_controllers.php') </script>"  ; // go back into the previous page
	

?>