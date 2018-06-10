<?php include 'connect.php' ?>

<?php

		$commentsNewCount=$_POST['commentsNewCount'];
		$sql="SELECT * FROM locations WHERE id=$commentsNewCount";
		//$sqlnext="SELECT * FROM locations WHERE id=($commentsNewCount)+1";
		//$resultnext= mysqli_query($dbc,$sql);
		$result= mysqli_query($dbc,$sql);
		
		if($result){



				while($row=mysqli_fetch_assoc($result)){
					
					echo "<p> ";
						echo $row['lng'];
						echo "<br>";
						echo $row['lat'];
					echo "</p> ";

				}


		}else{
			echo "No comments";
		}

?>