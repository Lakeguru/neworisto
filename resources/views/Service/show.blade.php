@extends('layouts.show')

@section('content')

	<div class="container p-t-5p mm-t-20p tm-t-7p ">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="bg-grey99 p-b-5p">
					<img src="{{ asset("service/$service->service_image") }}" class="width-748 mwidth-100p h-350 mh-auto twidth-100p">
					<p class="w-900 f-30 p-l-5p p-r-5p p-t-5p c-browno">{{$service->service_name}}</p>
					<p class="p-l-5p p-r-5p p-t-5 l-h1 f-16 j-ta">{{$service->service_description}}</p>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

@endsection
	