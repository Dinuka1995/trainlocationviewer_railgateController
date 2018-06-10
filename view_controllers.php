 
<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
  <link href="css/bootstrap.min.css" rel="stylesheet"> 


  
  <title>controllers</title>
</head>
<body style="background: #9FEDD5;">

    <div class="heading">
      <img src="images/top_bar_bg.jpg" class="img-thumbnail">
    </div>

    <div class="container-fluid">
    <br>

    <div class="row">
      <div class="col-md-2">
        
      </div>
      <div class="col-md-6 col-sm-3">
        <h4>Controllers</h4> 

      </div>
      <div class="col-md-2 col-sm-4"></div>
        <form action="add_gates.php">
          <input type="submit" class="btn btn-primary" name="" value="Add gates">
        </form>
        <form action="index1.php">
          <input type="submit" class="btn btn-success" name="" value="view map">
        </form>
         
    </div> <!-- row -->
    

      <table class="table  table-hover">

     
      <div class=" table-responsive col-md-8">

      <br>
  
      <thead>
        
        <tr style="background: #276D80;">
          <th>User Name</th>
          <th>ID number</th>
          <th>Age</th>
          <th>Email</th>
          <th>Position</th>
          <th>Status</th>
        </tr> 
      </thead>
      <div id="tbl_row">
 
          <tbody>
          
            <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gps";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT id, username, email,age,nic,position,status FROM controllers";
            $result = $conn->query($sql);

             
            // Check connection
             if ($result->num_rows > 0) {
                // output data of each row

                while($row = $result->fetch_assoc()) {
                  if($row["status"]!=TRUE){
                            echo"<form method='post' action='accept.php'>";
                            echo "<tr>";
                            echo "<td>".$row["username"]."</td>";
                            echo "<td>".$row["nic"]."</td>";
                            echo "<td>".$row["age"]."</td>";
                            echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["position"]."</td>";
                            //echo "<td>"."<label><input type='checkbox' " .">Accept"."</label>"." </td>";

                            echo "<input type='hidden' name='username' value=".$row["username"].">";
                            echo "<input type='hidden' name='nic' value=".$row["nic"].">";
          
                  echo "<td> <input type='submit'  value='accept'> </td>";
                            echo "</tr>";
                  echo "</form>";
                  }

					
                     
                }
            } else {
                echo "0 results";
            }
            $conn->close();
 
           ?>  
          
          </tbody>
  
      </div>

      </table> <!-- table -->
 
</body>
</html>