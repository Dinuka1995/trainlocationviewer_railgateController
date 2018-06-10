<!-- 
<?php
	session_start();
	if(!isset($_SESSION['userName']))
		{
		    // not logged in
		    header('Location: index.php');
		    exit();
		     
		} 
?>

 -->
<!DOCTYPE html>
<html>
  <head>

   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
  <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <style>
      #map {
        height: 400px;
        width: 100%;
       }

       body{
          background: lightblue;
       }
    </style>

  </head>
  <body>
    <div class="heading">
      		<img src="images/top_bar_bg.jpg" class="img-thumbnail">
   	</div>
    <h2 style="color:blue; padding-left: 100px;">Train Location viewer</h2>
    <div id="map">
      
    </div>
    <br>
    <div class="row">
        <form method="" action="index.php">
          <button id="location" class="btn btn-primary">back</button>
        </form>
    </div>
    <br><br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script> 
   	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"> 
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyinR8VdEMxjFVYNNCQgn-clAObyvty88"
     type="text/javascript">
    </script>
    <script>
      
        var uluru = {lat:  7.2681, lng: 80.6851};// 7.2681, 80.6851

        // locations of the rail gates
        var locations=[ [7.271166, 80.606469],
        				[7.278529, 80.617805],
        				[7.290267, 80.632536],
        				[7.298426, 80.635659],
        				[7.319092, 80.630777],
        				[7.256599, 80.588844],
        				[7.256083, 80.581302],
        				[7.267460, 80.571914]
        ];
        
        // Create an array of styles.
    	var styles = [{
        "stylers": [{
            "saturation": -100
        }]
    	}, {
        "featureType": "transit.line",
            "stylers": [{
            "saturation": 100
        }, {
            "color": "#f44242"
        }]
    	}];

    	// Create a new StyledMapType object, passing it the array of styles, as well as the name to be displayed on the map type control.
        var styledMap = new google.maps.StyledMapType(styles, {
        name: "Styled Map"
    	});


        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru,
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.TERRAIN, 'map_style']
        }
        });
        
        map.mapTypes.set('map_style', styledMap);
    	map.setMapTypeId('map_style');


        
        // marker for trains
        var marker = new google.maps.Marker({
          position: uluru,
          animation: google.maps.Animation.BOUNCE,
          label : 'A',  // label for identfy
          map: map

      	});


      	


        // icons of rail gates
        var icon = {
    		url: "free-3-blue.png", // url
    		scaledSize: new google.maps.Size(50, 50), // scaled size
   			//origin: new google.maps.Point(0,0), // origin
    		anchor: new google.maps.Point(15, 50) // anchor
		};

		 var icon2 = {
    		url: "free-3-red.png", // url
    		scaledSize: new google.maps.Size(50, 50), // scaled size
   			//origin: new google.maps.Point(0,0), // origin
    		anchor: new google.maps.Point(15, 50) // anchor
		};
		 
		var marker2,i,gate=[];

		 
 		var latitude,longitude;
 		// set locations of the rail gates
		 for (i = 0; i < locations.length; i++) { 
		 	 latitude= locations[i][0];
		 	 longitude= locations[i][1];

		 	 // for gates marker
      		marker2 = new google.maps.Marker({
       		position: new google.maps.LatLng(locations[i][0], locations[i][1]),
       		map: map,

       		icon:icon
      		});

      		marker2.set("id",i);

      		gate.push(marker2);

      		// this will be listen for all rail gates
      		google.maps.event.addDomListener(gate[i], 'dblclick', function() {
          //window.alert('Map was clicked!');
          //confirm('dddddddd');

          // this is the alert when click on
	        swal({
  				title: "Are you sure want to close this gate?",
				  text: "You can't stop this if you confirmed!",
				  type: "warning",
				  showCancelButton: true,
				  confirmButtonClass: "btn-danger",
				  confirmButtonText: "Yes, close it!",
				  cancelButtonText: "No, cancel close!",
				  closeOnConfirm: false,
				  closeOnCancel: false
				},

				// check whether confirmed the gate close
			function (isConfirm) {
			  if (isConfirm) {
			  	//gate[i].icon:icon2;
			  	$.ajax({
  					url: 'test1.php',
  					type : 'POST',
  					data:{ lat :""+locations[marker2.get("id")][0], lng : ""+locations[marker2.get("id")][1]},
  					success: function(result222) {
   						 alert(result222);
  						}
					});
			    swal("Closed!", "The gate was closed!", "success");
			  } else {
			    swal("Cancelled", "The gate wasn't closed! :)", "error");
			  }
			});
	          
	          //infoWindow.open(map,marker2);

	        });


      	};

      	 var mapDiv = document.getElementById('map');

      	 


     // google.maps.event.addListener(marker,'click',function(){
     //    	infoWindow.open(map,marker);
     // });

      	


      	 
     

      var repeater;
  function myFunction(){

  	

    var ajax= new XMLHttpRequest();
    var method ="GET";
    var url="data.php";
    var asynchronous=true;

    ajax.open(method,url,asynchronous);

    ajax.send();
    
    ajax.onreadystatechange =function (){
    
    if(this.readyState==4&& this.status==200){

    

      var data=JSON.parse(this.responseText);
      console.log(data[data.length-1].lng);
      var lat=data[data.length-1].lng;
      var lng= data[data.length-1].lat;
      var location1=new google.maps.LatLng(lat,lng);

      map.setCenter(location1);
      marker.setPosition(location1);
 
    }

    

    }

  
   repeater =setTimeout(myFunction, 2000);
  }

    


  myFunction();



   function giveAmessage(marker) {
        var infowindow = new google.maps.InfoWindow({
          content: "secretMessage"
        });

        marker.addListener('click', function() {
          infowindow.open(marker.get('map'), marker);
        });
      }


    </script>
   
  </body>
</html>