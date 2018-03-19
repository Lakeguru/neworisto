<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oristo Universal</title>
	<link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
	

	<!-- STYLESHEETS-->
	<link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css">

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/checkbox.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style5.css">
	


	<!-- WEBFONT -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">

	<!-- ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="">
	<ul class="cb-slideshow">
        <li class="li"><span>Image 01</span></li>
        <li class="li"><span>Image 02</span></li>
        <li class="li"><span>Image 03</span></li>
        <li class="li"><span>Image 04</span></li>
        <li class="li"><span>Image 05</span></li>
        <li class="li"><span>Image 06</span></li>
    </ul>

	<header>
		<nav class="navbar change navbar-fixed-top p-b-35" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<!-- <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> -->
						<span class="c-dark">MENU</span>
					</button>
					<a class="navbar-brand p-t-5" href="index.html"><img src="assets/img/logo.jpg" class="img-circle width-90 h-80"></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					
					<ul class="nav navbar-nav navbar-right p-t-5">
						<ul class="nav navbar-nav navbar-right p-t-5 ul">
							<li class="f1 m-r-10">
								<a href="about.html" class="btn bg-browno bd-4 c-white p-t-10 p-b-10">ABOUT</a>
							</li>
							<li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="product.html">PRODUCTS</a></li>
							<li class="f1 m-r-10 dropdown show-on-hover">
								<a href="#" class="btn bg-browno bd-4 c-white p-t-10 p-b-10" data-toggle="dropdown">SERVICES</a>
								<ul class="dropdown-menu l-_42">
									<li><a href="service1.html" class=""> SERVICE1 </a></li>
									<li><a href="service2.html" class="">SERVICE2</a></li>
									<li><a href="service3.html" class="">SERVICE3</a></li>
								</ul>
							</li>
							<li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="gallery.html">GALLERY</a></li>
							<li class="f1 m-r-10"><a class="btn bg-liter bd-4 p-t-10 p-b-10" href="contact.html">CONTACT</a></li>
						</ul>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	

	<section class="container m-t-7p mm-t-30p">

		
	 	<div class=" bg-liter m-t-5p m-b-5p">
			
			<div class="row p-30">
				<div class="col-md-6 col-sm-6">

					<div>
						<p><span class="glyphicon glyphicon-map-marker"></span> 93 Obafemi Awolowo Way Ikeja Lagos</p>
      					<p><span class="glyphicon glyphicon-phone"></span> +234 8037120177</p>
      					<p><span class="glyphicon glyphicon-envelope"></span> oristouniversal@yahoo.com</p>

      					<div class="social">
		                    <ul>
		                        <li><a href=""><i class="fa fa-lg fa-twitter"></i></a></li>
		                        <li><a href=""><i class="fa fa-lg fa-facebook"></i></a></li>
		                        <!-- <li><a href="http://plus.google.com/+jibsai"><i class="fa fa-lg fa-google-plus"></i></a></li> -->
		                        <li><a href=""><i class="fa fa-lg fa-instagram"></i></a></li>
		                        <!-- <li><a href="http://www.youtube.com/jibsai"><i class="fa fa-lg fa-youtube"></i></a></li> -->
		                    </ul>
		                  </div>
		            </div>
					<!-- Add Google Maps -->
				    <div id="googleMap" style="height:400px;width:100%;"></div>
						<script>
						function myMap() {
						var myCenter = new google.maps.LatLng(6.601709, 3.343782);
						var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
						var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
						var marker = new google.maps.Marker({position:myCenter});
						marker.setMap(map);
						}
						</script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB63Rxydh3k1S6TOUsOH11cF4OmVyMf27A&callback=myMap"></script>
						<!--
					To use this code on your website, get a free API key from Google.
				Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
				-->
				</div>
				<div class="col-md-6 col-sm-6 mm-t-5p tm-t-5p">
					<p class="f-12">Please fill out the form above for any enquiries. Our Friendly staff will get back to you.</p>
					<!-- <div class="mp-l-0 social">
						<a class="m-r-10" href="#"><i class="fa fa-lg fa-facebook"></i></a>
						<a href="#"><i class="fa fa-lg fa-twitter"></i></a>
					</div> -->

					<form action="{{ route('post.contact') }}" method="post" role="form">
							@csrf
						<div class="form-group">
							<label for="first_name" class="col-sm-3 control-label">First Name</label>
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
									<input type="text" id="first_name" name="first_name" maxlength="50" size="30" class="form-control"  placeholder="* Enter First Name" data-bv-field="Name" required="">
								</div>
							     <small class="help-block" data-bv-validator="notEmpty" data-bv-for="first_name" data-bv-result="NOT_VALIDATED" style="display: none;">Your first name is required</small>
							</div>
						</div>

                        <div class="form-group">
							<label for="last_name" class="col-sm-3 control-label">Last Name</label>
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
									<input type="text" id="last_name" name="last_name" maxlength="50" size="30" class="form-control" placeholder="* Enter Last Name" data-bv-field="Name" required="">
								</div>
							     <small class="help-block" data-bv-validator="notEmpty" data-bv-for="last_name" data-bv-result="NOT_VALIDATED" style="display: none;">Your last name is required</small>
							</div>
						</div>


						<div class="form-group">
                        	<label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-12">
                                <div class="input-group">
	                                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
	                                <input type="email" id="email" name="email" maxlength="80" size="30" class="form-control" placeholder="* Enter Email" data-bv-field="Email">
                                </div>
                             	<small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Your email is required</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Your email is not valid</small>
                            </div>
                        </div>


                        <div class="form-group">
                             <label for="telephone" class="col-sm-4 control-label">Phone Number</label>
                             <div class="col-sm-12">
                                <div class="input-group">
	                                 <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
	                                 <input type="text" id="telephone" name="phone_number" maxlength="30" size="30" class="form-control" placeholder="Enter Phone Number">
	                            </div>
                           </div>
                      	</div>



                        <div class="form-group">
                             <label for="comments" class="col-sm-3 control-label">Message</label>
                             <div class="col-sm-12">
                                <div class="input-group">
                                	<span class="input-group-addon"><i class="fa fa-comment fa-fw"></i></span>
                                 	<textarea id="comments" name="message" maxlength="1000" cols="25" class="form-control" rows="10" data-bv-field="Message"></textarea>
                                </div>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="Message" data-bv-result="NOT_VALIDATED" style="display: none;">Your message is required</small>
                            </div>
						</div>

					    	<div class="col-sm-10" align="center">
								<button type="submit" value="Submit" class="btn bg-browno bd-4 c-white f4 m-t-5p m-b-5p width-150">Submit</button>
								
							</div>
	
					</form>

				</div>
			</div>
		</div>
	</section>

	<footer class="bg-liter">
		
		<div class="container m-t-5p">
			<p class="text-center"> &copy;Copyright 2012&nbsp;  &bull;All Right Reserved&nbsp;  &bull;Oristo Universal Company&nbsp; &reg; 93 Obafemi Awolowo Way Ikeja Lagos 100001&nbsp; &bull; P.O. Box 2870</p>
		</div>
	</footer>
	
	
	
	
	<script type="text/javascript" src="libraries/bootstrap/js/jquery-3.1.1.min.js"></script>

    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <!-- background sliding -->
    <script type="text/javascript" src="libraries/bootstrap/js/modernizr.custom.86080.js"></script>
</body>
	
    <script type="text/javascript">
    	// change navbar background color when scroll downs

		$(document).ready(function(){
		  $(window).scroll(function(){
		  	var scroll = $(window).scrollTop();
			  if (scroll > 100) {
			    $(".change").css("background" , "#fffffff2");
			    $(".change").css("color" , "black");
			  }

			  else{
				  $(".change").css("background" , "transparent");
				  $(".change").css("color" , "");  	
			  }
		  })
		})
		

	</script>

    
	<script>
		// tabs

		$(document).ready(function() {
		$(".btn-pref .btn").click(function () {
		    $(".btn-pref .btn").removeClass("bg-liter").addClass("bg-browno");
		    $(".btn-pref .btn").removeClass("c-dark").addClass("c-white");
		    
		    // $(".tab").addClass("active"); // instead of this do the below 
		    $(this).removeClass("bg-browno").addClass("bg-liter");
		    $(this).removeClass("c-white").addClass("c-dark");   
		});
		});
	</script>
</html>