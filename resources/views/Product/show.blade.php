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
	

	<!-- STYLESHEETS-->
	<link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css">

	<!-- CUSTOM STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/checkbox.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style4.css">


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

	@include(Oristo.navbar)

	<section class="">
		<div class="container p-t-7p mm-t-20p tm-t-7p ">
			<div class="row">
				<div class="col-md-2"> </div>
				<div class="col-md-8">
					<div class="bg-liter bs bd-4 p-b-5p">
						<div class="row p-t-5p">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<img src="asset/storage/product/{{$product->product_image}}" class="img-responsive">
							</div>
							<div class="col-md-3"></div>
						</div>
						<p class="w-900 f-30 mf-25 p-l-5p p-r-5p p-t-5p c-browno">{{$product->product_name}}</p>
						<p class="p-l-5p p-r-5p p-t-5 l-h1 f-16 j-ta">{{$product->product_description}}</p>
						
					</div>
					<div class="row p-t-4p">
						<div class="col-md-4"></div>
						<div class="col-md-6"></div>
						<div class="col-md-2 ">
							<a class="btn bg-browno width-100 bd-4 c-white f4 m-t-5p m-b-5p" href="polyester-resin.html">NEXT</a>
						</div>
					</div>
				</div>
					
				<div class="col-md-2"></div>
			</div>
		</div>
	</section>

	
	<footer class="bg-liter">

		
		<div class="container m-t-5p p-t-10 p-b-10">

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
				  $(".change").css("color" , "black");  	
			  }
		  })
		});
		

		// $(document).ready(function(ev){
		//     var items = $(".nav li").length;
		//     var leftRight=0;
		//     if(items>5){
		//         leftRight=(items-5)*50*-1;
		//     }
		//     $('#custom_carousel').on('slide.bs.carousel', function (evt) {
		        
		 
		//       $('#custom_carousel .controls li.active').removeClass('active');
		//       $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
		//     })
		//     $('.nav').draggable({ 
		//         axis: "x",
		//          stop: function() {
		//             var ml = parseInt($(this).css('left'));
		//             if(ml>0)
		//             $(this).animate({left:"0px"});
		//                 if(ml<leftRight)
		//                     $(this).animate({left:leftRight+"px"});
		                    
		//         }
		      
		//     });
		// });
    </script>
</html>