 <?php

 	$mainpass ="admin123";

 	$md5pass=md5($mainpass);

 	echo $md5pass;

 	$shalpass=sha1($md5pass); 

 	echo "<br>";

 	echo $shalpass;


 ?>