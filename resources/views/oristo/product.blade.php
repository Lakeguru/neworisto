  <div class="container  m-t-5p bd-4">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2 class="w-600 f21 m-t-5p c-white">Our Products</h2>
            <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                <!-- Wrapper for slides -->
                {{--  <div class="carousel-inner bd-4">
                    
                    <div class="item active">
                        <div class="container-fluid">
                            <div class="row bs bd-brand bd-4">
                                @foreach ($products as $product)
                                <a href="accelerator.html"> <div class="top col-md-6 col-xs-12 p-r-0 p-l-0"><img src="{{ asset("product/$product->product_image") }}" class="img-responsive"></div></a>
                                <div class=" col-md-6 col-xs-12">
                                    <h2 class="slidhv"><a href="accelerator.html"> ACCELERATOR</a></h2>
                                    <p>{{$product->product_description}}</p>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 text-center mm-t-10 tp-b-10">
                                            <a class="btn bg-browno bd-4 c-white f4" href="accelerator.html">Read more</a>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>            
                    </div> 
                    
                <!-- End Item -->
                </div>  --}}
                <a data-slide="prev" href="#custom_carousel" class="izq carousel-control">
                    <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                </a>
                <a data-slide="next" href="#custom_carousel" class="der carousel-control">
                    <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                </a>
                <!-- <a data-slide="prev" href="#custom_carousel" class="izq carousel-control">‹</a>
                <a data-slide="next" href="#custom_carousel" class="der carousel-control">›</a> -->
                <!-- End Carousel Inner -->
                <div class="controls draggable ui-widget-content col-md-12 col-xs-12 bd-4 m-t-10">
                    <ul class="nav ui-widget-header">
                @foreach($products as $product)
                        <li data-target="#custom_carousel" data-slide-to="0" class="active m-r-10"><a href="{{ route('product.show',$product->id) }}"><img src="{{ asset("product/$product->product_image") }}" class="width-108 mwidth-80 h-100"><small>{{$product->product_name}}</small></a>
                        </li>
                    @endforeach
                        
                    </ul>
                    
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <a class="btn bg-browno bd-4 c-white f4 m-t-5p m-b-5p" href="{{ route('all.product') }}">View More Products</a>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        <!-- End Carousel -->
        </div>
        <div class="col-md-1"></div>
    </div>
</div>