<!DOCTYPE html>
<html>
<head>
  <title></title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

    </script>
    


    <script >

    $(document).ready(function(){
      var repeater;
      var commentsCount=1;
       function doWork(){
        $("#locations").load("load-locations.php",{
          commentsNewCount:commentsCount
        });
        
        commentsCount++;
        repeater =setTimeout(doWork, 2000);
      }
      doWork();
    })
    </script> 



</head>
<body>

  <div id="locations">
    
  </div>

</body>
</html>
