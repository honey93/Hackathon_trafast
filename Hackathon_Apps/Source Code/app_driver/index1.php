<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="customer.css">
        <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.3.2.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
            function loluqw()
            		{
            		alert("Message has been conved, help is on the ways");
            		}
                        var map;
                                		
                                		
                                		
                                		
                                		function initialize() {
                                		//var name = localStorage.getItem('user_name_aut');
                                		//var no_name = localStorage.getItem('rollno_user');
                                		// document.getElementById("cus").innerHTML = "Delivery Boy Name-  " +  name;
                                       // document.getElementById("cus_no").innerHTML = "Phone NO-  " + no_name;
                                  
                                      //alert("hi");
                                	  var x,y;
                                
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(showPositiona);
                                    } 
                                
                                
                                function showPositiona(position)
                                
                                {
                                x = position.coords.latitude;
                                y = position.coords.longitude;
                                //alert(x);
                                //alert(y);
                                
                                 
                                 //localStorage.setItem("lat_cur",x);
                                 //localStorage.setItem("lon_cur",y);
                                 var mapOptions = {
                                        zoom: 7,
                                        center: new google.maps.LatLng(x,y),
                                        mapTypeId:google.maps.MapTypeId.ROADMAP
                                    
                                	            }
                                
                                    
                                	
                                	map = new google.maps.Map(document.getElementById('mapholder'), mapOptions);
                                  
                                  var mapholder = document.getElementById('mapholder')
                                    mapholder.style.height = '300px';
                                    mapholder.style.width = '100%';
                                
                                }
                                
                                
                                    
                                
                                   // setMarkers(beaches);
                                
                                    // Bind event listener on button to reload markers
                                  //  document.getElementById('reloadMarkers').addEventListener('click', reloadMarkers);
                                }
                                		
                                		
                                		
                                		
                                		
                                		$(document).ready(function(){
                                		
                                		
                                		
                                		
                                		
                                //google.maps.event.addDomListener(window, "load", initialize);
                                
                                		
                                	
                                initialize();
                                
                                lolu();
                                	
                                	});
                                		
                                
                                
                                		function lolu() {
                                		
                                		var marker;
                                        var markera;		
                                		
                                		var er = 12;
                                		
                                		var rt = 0;
                                		
                                		
                                		   setInterval(function(){
                                		   
                                		   
                                      // method to be executed;
                                   // alert("lolu");
                                   
                                   
                                   
                                   
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(showPosition);
                                    } 
                                
                                
                                function showPosition(position)
                                
                                { var we,er;
                                we = position.coords.latitude;
                                er = position.coords.longitude;
                                
                                localStorage.setItem("lat_cur",we);
                                localStorage.setItem("lon_cur",er);
                                
                                }
                                   
                                   
                                   
                                   var pos_cur = localStorage.getItem('lat_cur');
                                   var pos2_cur = localStorage.getItem('lon_cur'); 
                                	   //alert(pos_cur);
                                
                                var na = localStorage.getItem('user_name_aut');
                                   var mmnna = localStorage.getItem('rollno_user'); 
                                	     
                                	   var mmnnaw = localStorage.getItem('rono_user_we');
                                	   Parse.initialize("GOz4H9uZbN1pRGR4DxERGWBF9fbUGn8o77UEeQIn", "7eizxicb7Ir2CSaRSGmUqVhQ1N2lU3VDih1ytuaR");
                                			
                                var GameScore = Parse.Object.extend("pravesh_app");
                                var gameScore = new GameScore();
                                //alert(pos_cur);
                                //alert(pos2_cur);
                                gameScore.set("latitude",  parseFloat(pos_cur));
                                gameScore.set("longitude",  parseFloat(pos2_cur));
                                gameScore.set("cheatMode", false);
                                gameScore.set("user_name", na);
                                gameScore.set("user_phone", mmnna);
                                gameScore.set("no_passenger", mmnnaw);
                                
                                gameScore.id = "BzVL57LOEx";
                                gameScore.save(null, {
                                  success: function(gameScore) {
                                   // alert("hola");
                                  },
                                  error: function(gameScore, error) {
                                    //alert('Failed to create new object, with error code: ' + error.message);
                                    //alert("Internet Should be on");
                                  }
                                }); 
                                	   
                                	   
                                	   
                                	   
                                	   
                                	   
                                	//alert("hi");   
                                	   
                                	   
                                	   
                                	   Parse.initialize("GOz4H9uZbN1pRGR4DxERGWBF9fbUGn8o77UEeQIn", "7eizxicb7Ir2CSaRSGmUqVhQ1N2lU3VDih1ytuaR");
                                
                                var GameScore = Parse.Object.extend("pravesh_app");
                                var gameScore = new GameScore();
                                var query = new Parse.Query(GameScore);
                                query.get("Y6aUedOohl", {
                                  success: function(gameScore) {
                                
                                                 
                                  
                                  var lati = gameScore.get("latitude");
                                  var longi = gameScore.get("longitude");
                                  var u_name = gameScore.get("user_name");
                                  
                                  var u_phone = gameScore.get("user_phone");
                                  
                                  document.getElementById("cus").innerHTML = "Passenger Name-  " + " " + u_name;
                                 document.getElementById("cus_no").innerHTML = "Phone NO-  " + " " + u_phone;
                                  
                                 
                                localStorage.setItem("lat_got",lati);
                                		localStorage.setItem("lon_got",longi);
                                 
                                  },
                                  error: function(object, error) {
                                  //alert("error");
                                    
                                  }
                                });
                                
                                var lati_q = localStorage.getItem("lat_got");
                                var longi_q = localStorage.getItem("lon_got");
                                
                                	
                                
                                
                                
                                
                                
                                
                                
                                var asd = new google.maps.LatLng(lati_q,longi_q);
                                 
                                
                                	
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                	er++;
                                	if(rt == 0)
                                	{
                                	
                                   markera = new google.maps.Marker({position:asd,map:map,title:"Passenger"});	   
                                	var myLatLng = new google.maps.LatLng(pos_cur,pos2_cur);
                                        marker = new google.maps.Marker({
                                            position: myLatLng,
                                            map: map,
                                			title: 'You',
                                			icon: 'car.png'
                                            
                                        });
                                		
                                	}
                                		
                                		else
                                		{
                                		var myLatLng = new google.maps.LatLng(pos_cur,pos2_cur);
                                		 marker.setPosition(myLatLng);
                                		 markera.setPosition(asd);
                                		
                                		}
                                		rt=1;
                                		
                                	
                                	},2000);
                                		
                                		
                                		
                                		
                                		
                                		
                                		}
                                		
                                		
                                		
                                			// $( document ).ready(function() {
                                    
                                // $("#myModal").modal('show');
                                	
                                	// });
                                
                                
                                
                                		
                                
                                
                                
                                
                                		// function validateForm()
                                 // {
                                 
                                 
                                 	// $( document ).ready(function() {
                                    
                                // $("#myModal").modal('hide');
                                	
                                	// });
                                		
                                 
                                		 // event.preventDefault();	
                                		
                                		
                                		
                                		// var mmnna = document.forms["myForm"]["rollll"].value;
                                
                                		
                                	 // var na = document.forms["myForm"]["username"].value;
                                 
                                	
                                		// localStorage.setItem("user_name_aut",na);
                                		
                                		// localStorage.setItem("rollno_user",mmnna);	
                                		
                                		
                                	
                                		
                                		
                                		
                                // var x = document.getElementById("demo");
                                // var y = document.getElementById("demo_1");
                                
                                // Parse.initialize("GOz4H9uZbN1pRGR4DxERGWBF9fbUGn8o77UEeQIn", "7eizxicb7Ir2CSaRSGmUqVhQ1N2lU3VDih1ytuaR");
                                
                                
                                   // if (navigator.geolocation) {
                                // navigator.geolocation.getCurrentPosition(showPosition, showError);       
                                 
                                    // } else { 
                                        // x.innerHTML = "Geolocation is not supported by this browser.";
                                    // }
                                
                                
                                
                                	
                                // function showPosition(position) {
                                
                                
                                // lat = position.coords.latitude;
                                    // lon = position.coords.longitude;
                                	
                                // Parse.initialize("GOz4H9uZbN1pRGR4DxERGWBF9fbUGn8o77UEeQIn", "7eizxicb7Ir2CSaRSGmUqVhQ1N2lU3VDih1ytuaR");
                                			
                                // var GameScore = Parse.Object.extend("pravesh_app");
                                // var gameScore = new GameScore();
                                
                                // gameScore.set("latitude", lat);
                                // gameScore.set("longitude", lon);
                                // gameScore.set("cheatMode", false);
                                // gameScore.set("user_name", na);
                                // gameScore.set("user_phone", mmnna);
                                // gameScore.id = "BzVL57LOEx";
                                // gameScore.save(null, {
                                  // success: function(gameScore) {
                                    
                                  // },
                                  // error: function(gameScore, error) {
                                    // alert('Failed to create new object, with error code: ' + error.message);
                                  // }
                                // }); 
                                
                                
                                
                                    	
                                		
                                		
                                	
                                //Customer Location and address part
                                
                                
                                // Parse.initialize("GOz4H9uZbN1pRGR4DxERGWBF9fbUGn8o77UEeQIn", "7eizxicb7Ir2CSaRSGmUqVhQ1N2lU3VDih1ytuaR");
                                
                                // var GameScore = Parse.Object.extend("pravesh_app");
                                // var gameScore = new GameScore();
                                // var query = new Parse.Query(GameScore);
                                // query.get("Y6aUedOohl", {
                                  // success: function(gameScore) {
                                
                                                 
                                  
                                  // var lati = gameScore.get("latitude");
                                  // var longi = gameScore.get("longitude");
                                  // var u_name = gameScore.get("user_name");
                                  
                                  // var u_phone = gameScore.get("user_phone");
                                  
                                  // document.getElementById("cus").innerHTML = "Delivery Boy Name-  " + " " + u_name;
                                 // document.getElementById("cus_no").innerHTML = "Phone NO-  " + " " + u_phone;
                                  
                                 
                                // localStorage.setItem("lat_got",lati);
                                		// localStorage.setItem("lon_got",longi);
                                 
                                  // },
                                  // error: function(object, error) {
                                  // alert("error");
                                    
                                  // }
                                // });
                                
                                // var lati_q = localStorage.getItem("lat_got");
                                // var longi_q = localStorage.getItem("lon_got");
                                
                                
                                
                                
                                  // pqr = new google.maps.LatLng(lati_q, longi_q)
                                
                                
                                
                                
                                
                                
                                
                                
                                   // var asd = new google.maps.LatLng(lat, lon);
                                	 
                                	 // var myOptions = {
                                    // center:asd,zoom:10,
                                    // mapTypeId:google.maps.MapTypeId.ROADMAP,
                                    // mapTypeControl:false,
                                    // navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
                                    // }
                                    
                                   // var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
                                
                                	 
                                	
                                
                                	 
                                	 
                                    // mapholder = document.getElementById('mapholder')
                                    // mapholder.style.height = '300px';
                                    // mapholder.style.width = '100%';
                                
                                    // var marker = new google.maps.Marker({position:asd,map:map,title:"Customer"});
                                
                                	// var marker_1 = new google.maps.Marker({position:pqr,map:map,title:"Delivery Boy"});
                                	
                                    
                                	// }
                                
                                // function showError(error) {
                                    // switch(error.code) {
                                        // case error.PERMISSION_DENIED:
                                            // x.innerHTML = "User denied the request for Geolocation."
                                            // break;
                                        // case error.POSITION_UNAVAILABLE:
                                            // x.innerHTML = "Location information is unavailable."
                                            // break;
                                        // case error.TIMEOUT:
                                            // x.innerHTML = "The request to get user location timed out."
                                            // break;
                                        // case error.UNKNOWN_ERROR:
                                            // x.innerHTML = "An unknown error occurred."
                                            // break;
                                    // }
                                // }
                                
                                // }
        </script>
    </head>
    
    <body>
        <div class="section text-center">
            <h2>Driver Application</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div id="mapholder"></div>
                    </div>
                    <div class="col-md-3">
                        <h1 class="text-primary">Details-</h1>
                        <h3 id="cus">Passenger Name:-</h3>
                        <h3 id="cus_no">Contact No:-</h3>
                        <button class="btn btn-block btn-danger btn-lg" onclick="loluqw()">Bus Breakdown</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="text-left">Urban Hack</h3>
                        <p>created by:- thakuria.honey@gmail.com
                            <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sunil@whenda.com
                            <br>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Welcome Customer to delivery applicaation</h4>
                    </div>
                    <div class="modal-body">
                        <p>Provide these details to track your parcel</p>
                        <form role="form" name="myForm"
                        onsubmit="return validateForm()">
                            <div class="form-group">
                                <label class="control-label" for="exampleInputEmail1">Full Name</label>
                                <input class="form-control" name="username" id="exampleInputEmail1"
                                placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="exampleInputEmail1">Phone No</label>
                                <input class="form-control" name="rollll" id="exampleInputEmail1"
                                placeholder="Enter Phone NO">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="validateForm()">Submit</button>
                        </form>
                        <p class="text-warning">
                            <small>If you don't save, your changes will be lost.</small>
                        </p>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </body>

</html>