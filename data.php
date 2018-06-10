
<?php include 'connect.php' ?>
<?php

	$sql="SELECT * FROM locations";
	$result= mysqli_query($dbc,$sql);

	
	$data=array();
	while($row=mysqli_fetch_assoc($result)){
					
			//echo $row['lng']; 
			//echo $row['lat'];
			$data[]=$row;
	}

	echo json_encode($data);

?>