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
	<!-- scroll top -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		<img src="assets/img/oil.svg" class="width-40">
	</button>

	<ul class="cb-slideshow">
        <li class="li"><span>Image 01</span></li>
        <li class="li"><span>Image 02</span></li>
        <li class="li"><span>Image 03</span></li>
        <li class="li"><span>Image 04</span></li>
        <li class="li"><span>Image 05</span></li>
        <li class="li"><span>Image 06</span></li>
    </ul>

	@include('oristo.navbar')

	<section class="m-t-7p mm-t-0">
		<div class="m-t-5p mm-t-20p tm-t-7p">
		<div class="container m-t-5p">
			<div class="row">
					@foreach($products as $product)
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail no-bd bg-white">
						<a href="{{ route('product.show',$product->id) }}"><img src="{{ asset("product/$product->product_image") }}" class="h-200"></a>
						<p class="p-5p"><span class="w-900 f-18">{{$product->product_name}}</span><br> {{$product->product_description}}
						<a class="c-browno f-right" href="{{ route('product.show',$product->id) }}"> Read More</a></p> 
					</div>
				</div>
			@endforeach
				
			</div>
		</div>
		<div class="container  m-t-5p">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center">
					<div class="pagination mm-t-0">
					  	<a href="product.html" class=" m-r-10">1</a>
					  	<a href="product1.html" class="active m-r-10">2</a>
					</div>
				</div>
				<div class="col-md-4"></div>
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

    <!-- scroll -->
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		        document.getElementById("myBtn").style.display = "block";
		    } else {
		        document.getElementById("myBtn").style.display = "none";
		    }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		}
	</script>

</html>
	
{{--  DB_CONNECTION=pgsql
DB_HOST=ec2-54-243-210-70.compute-1.amazonaws.com
DB_PORT=5432
DB_DATABASE=dd2l62qpf9856a
DB_USERNAME=esmrdvspxjpyop
DB_PASSWORD=befdf23aef0c0b4da1f1c31f3a906f6d451aeba9f7bbbefd65d753557bfeec15  --}}


{{--  DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jquery
DB_USERNAME=root
DB_PASSWORD=luqman    --}}
