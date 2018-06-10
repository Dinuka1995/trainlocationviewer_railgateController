
<?php 


function getDistance($lat1,$lng1,$lat2,$lng2){

	$earth_radius=6371000;
	// convert deg to radians
	$latFrom=deg2rad($lat1);
	$lngFrom=deg2rad($lng1);
	$latTo=deg2rad($lat2);
	$lngTo=deg2rad($lng2);

	$latDelta=$latTo-$latFrom;
	$lngDelta=$lngTo-$lngFrom;

	$angle=2*asin( sqrt(pow(sin($latDelta/2),2) +cos($latFrom)*cos($latTo)*pow(sin($lngDelta/2),2)));

	return $angle*$earth_radius ;

}

	$lat1=7.284277 ;
	$lng1=80.627190;
	$lat2=7.281885;
	$lng2=80.623402;

	$Distance = getDistance($lat1,$lng1,$lat2,$lng2);

	echo "This is the Distance :"; echo $Distance;

	if($Distance<1000){
		echo "Too close now, close the gates Immediately !" ;
	}


?>


<!DOCTYPE html>
<html>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
  	<link href="css/bootstrap.min.css" rel="stylesheet"> 
<head>
	<title></title>
</head>
<body>

	<div class="container-fluid">
		
		<div class="row">
			<h1> Distance find</h1>

		</div>

		<div class="">
			
		</div>


	</div>  <!-- container -->

</body>
</html>