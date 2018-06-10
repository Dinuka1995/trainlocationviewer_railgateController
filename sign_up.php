<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  
   


</head>
<body>
    
    <div class="heading">
      		<img src="images/top_bar_bg.jpg" class="img-thumbnail">
   	</div>
  <div class="container-fluid">
    <div class="text-center" style="background: gray; ">
      <h2 style="color: #D87058;">Sign up as a controller!</h2>
    </div>
    <br><br>
    <!-- onsubmit="return validate()"  -->
    <form name="myForm" id="signUp" action="insert.php" method="post">
      <div class="row">
        <div class="col-md-2">
          <h4>user name:</h4>
        </div>
        <div class="col-md-3">
          <input class="form-control  " type="text" id="userName" name="userName">
        </div>
        <div class="col-md-7">
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-2">
          <h4>choose password:</h4>
        </div>
        <div class="col-md-3">
          <input class="form-control small" id="password" type="password" name="password">
        </div>
        <div class="col-md-7">
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-2">
          <h4>confirm password:</h4>
        </div>
        <div class="col-md-3">
          <input class="form-control small" type="password" name="Cpassword">
        </div>
        <div class="col-md-7">
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-2">
          <h4>age:</h4>
        </div>
        <div class="col-md-3">
          <input class="form-control small" type="text" name="age">
        </div>
        <div class="col-md-7">
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-2">
          <h4>email:</h4>
        </div>
        <div class="col-md-3">
          <input class="form-control small" type="text" name="email">
        </div>
        <div class="col-md-7">
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-2">
          <h4>NIC :</h4>
        </div>
        <div class="col-md-3">
          <input class="form-control small" type="text" name="nic">
        </div>
        <div class="col-md-7">
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-2">
          <h4>Position (Job:) :</h4>
        </div>
        <div class="col-md-3">
          <input class="form-control small" type="text" name="position">
        </div>
        <div class="col-md-7">
        </div>
      </div> <!-- row -->
      <br> 
      <div class="row ">
        <div class="col-md-2">
        </div>
        <div class="col-md-3">
          <input class="btn btn-success" type="submit" name="" value="sign-up">
        </div>
        <div class="col-md-7">
        </div>
      </div> <!-- row -->
    </form> <!-- end of form -->
    <div class="row">
      <div class="col-md-2">
        
      </div>
      <div class="col-md-10">
        <a href="index.php">Already have a account??</a>
      </div>
    </div> <!-- row -->
    
  </div> <!-- container -->
  
  <!-- jquery plugins -->
  <script
    src="http://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
    </script>
    <!-- jquery plugins for validations -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"> </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#signUp").validate({
        rules: {
          userName:{
            required:true,
            minlength:4

          },
          password:{
            required:true,
            minlength:5
          },
          Cpassword:{
            required:true,
            equalTo:"#password"
          },
          age:{
            required:true,
            number:true,
            min:10
          },
          email:{
            required:true,
            email:true
          },
          nic:{
            required:true,
            minlength:10
          },
          position:{
            required:true,
            
          }

        },
        messages:{
          userName:{
            required:"user name is required!",
  
          },
          password:{
            required:"password is required!",
             
          },
          Cpassword:{
            required:"confirm your password!",
            equalTo:"should be matched above!"
          },
          age:{
            required:"Enter your age!",
            number:"Enter your real age",
            min:"should be 18+"
          },
           
          nic:{
             
            minlength:"Enter the valid NIC number"
          }
        }


      });
    });


  </script> 
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <<!-- script src="js/bootstrap.min.js"></script>  -->
</body>
</html>