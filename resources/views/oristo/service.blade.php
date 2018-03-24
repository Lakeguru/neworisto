<div class="container  m-t-5p bd-4">
    <div class="">
        <h2 class="w-600 f21 c-white">Our Service</h2>
        @foreach($services as $service)
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail no-bd bg-liter">
                    <a href="{{ route('service.show',$service->id) }}"><img src="{{ asset("service/$service->service_image") }}" class="h-200"></a>
                    <p class="p-5p"><span class="w-900 f-18">{{$service->service_name}}</span><br> {{$service->service_description}} 
                    <a class="c-browno f-right" href="{{ route('service.show',$service->id) }}"> Read More</a></p> 
                </div>
            </div>
            @endforeach
        </div>
        <!-- <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <a class="btn bg-browno bd-4 c-white f4 m-t-5p m-b-5p" href="service.html">View More</a>
            </div>
            <div class="col-md-4"></div>
        </div> -->
    </div>
</div>

