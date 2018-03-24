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
	<link rel="stylesheet" type="text/css" href="assets/css/style4.css">
	


	<!-- WEBFONT -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">

	<!-- ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="">

	<ul class="cb-slideshow">
		{{--  @foreach($homepagecs as $homepagec)  --}}
		<li class="li"><span>Image 01</span></li>
        <li class="li"><span>Image 02</span></li>
        <li class="li"><span>Image 03</span></li>
        <li class="li"><span>Image 04</span></li>
        <li class="li"><span>Image 05</span></li>
        <li class="li"><span>Image 06</span></li>
		{{--  @endforeach  --}}
    </ul>

	

	<section class="">
		@yield('content')
		
	</section>
	
	@include('oristo.footer')

	
	
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
			  if (scroll > 150) {
			    $(".change").css("background" , "#fffffff2");
			    $(".change").css("color" , "black");
			  }

			  else{
				  $(".change").css("background" , "transparent");
				  $(".change").css("color" , "black");  	
			  }
		  })
		})
		

		$(document).ready(function(ev){
		    var items = $(".nav li").length;
		    var leftRight=0;
		    if(items>5){
		        leftRight=(items-5)*50*-1;
		    }
		    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
		        
		 
		      $('#custom_carousel .controls li.active').removeClass('active');
		      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
		    })
		    // $('.nav').draggable({ 
		    //     axis: "x",
		    //      stop: function() {
		    //         var ml = parseInt($(this).css('left'));
		    //         if(ml>0)
		    //         $(this).animate({left:"0px"});
		    //             if(ml<leftRight)
		    //                 $(this).animate({left:leftRight+"px"});
		                    
		    //     }
		      
		    // });
		});


		// gallery modal 

		$(document).ready(function(){

		    loadGallery(true, 'a.thumbnail');

		    //This function disables buttons when needed
		    function disableButtons(counter_max, counter_current){
		        $('#show-previous-image, #show-next-image').show();
		        if(counter_max == counter_current){
		            $('#show-next-image').hide();
		        } else if (counter_current == 1){
		            $('#show-previous-image').hide();
		        }
		    }

		    /**
		     *
		     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
		     * @param setClickAttr  Sets the attribute for the click handler.
		     */

		    function loadGallery(setIDs, setClickAttr){
		        var current_image,
		            selector,
		            counter = 0;

		        $('#show-next-image, #show-previous-image').click(function(){
		            if($(this).attr('id') == 'show-previous-image'){
		                current_image--;
		            } else {
		                current_image++;
		            }

		            selector = $('[data-image-id="' + current_image + '"]');
		            updateGallery(selector);
		        });

		        function updateGallery(selector) {
		            var $sel = selector;
		            current_image = $sel.data('image-id');
		            $('#image-gallery-caption').text($sel.data('caption'));
		            $('#image-gallery-title').text($sel.data('title'));
		            $('#image-gallery-image').attr('src', $sel.data('image'));
		            disableButtons(counter, $sel.data('image-id'));
		        }

		        if(setIDs == true){
		            $('[data-image-id]').each(function(){
		                counter++;
		                $(this).attr('data-image-id',counter);
		            });
		        }
		        $(setClickAttr).on('click',function(){
		            updateGallery($(this));
		        });
		    }
		});
    </script>
</html>