
<?php include('connect.php'); ?>
<?php 

	$lat=$_POST['lat'];
	$lng= $_POST['lng'];
	 
	echo $lng;

	$sqlQuery="UPDATE gates SET status=TRUE where lat='$lng' and lng='$lat' " ;
 
	 if(!mysqli_query($dbc,$sqlQuery)){
 		echo "Not working! :".mysqli_error($dbc);
 	}else{
 	  echo "Set values properly!"  ;
 	}

?>