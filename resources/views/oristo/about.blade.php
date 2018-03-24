@extends('layouts.master')

@section('content')

    @include('oristo.navbar')

    
	<section class="container-fluid m-t-7p mm-t-30p">

		<div class="row">
			 <div class="col-md-2"></div>
			 <div class="col-md-8">
			 	<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
			        <div class="btn-group" role="group">
			            <button type="button" id="stars" class="btn bg-liter h-80" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			                <div class="f2 f-17 mf-12">PROFILE</div>
			            </button>
			        </div>
			        <div class="btn-group" role="group">
			            <button type="button" id="favorites" class="btn bg-browno c-white h-80" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
			                <div class="f2 f-17 mf-12">HISTORY</div>
			            </button>
			        </div>
			        <div class="btn-group" role="group">
			            <button type="button" id="following" class="btn bg-browno c-white h-80" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			                <div class="f2 f-17 mf-10">MISSION & VISION</div>
			            </button>
			        </div>
			    </div>

		        <div class="well bg-liter">
		      		<div class="tab-content">
		        		<div class="tab-pane fade in active" id="tab1">
		          			<div class="row">
		          				<div class="col-md-6 col-sm-6">
		          					<p class="f-14 l-h1"><strong class="f-18">Oristo Universal Company (OUC)</strong> has metamorphosed over the years into a formidable and reliable company in the supply of chemicals, fiber glass and plumbing materials of all kinds. Been on the fore front since its establishment, OUC has been meeting the industrial needs of many manufacturing company both locally and abroad. It deals with industrial chemicals majorly for production of fiber seats such as the caliber of those used in homes and stadiums abroad, fish ponds, satellite dish, roofing sheets, doors and car bodies for all brands etc.</p>
		          				</div>
		          				<div class="col-md-6 col-sm-6">
		          					<img src="assets/img/network.jpeg" class="mwidth-100p">
		          				</div>
		          			</div>
		        		</div>
		        		<div class="tab-pane fade in" id="tab2">
		          			<div class="row">
		          				<div class="col-md-6 col-sm-6">
		          					<img src="assets/img/barran.jpeg" class="mwidth-100p">
		          				</div>
		          				<div class="col-md-6 col-sm-6">
		          					<p class="f-14 l-h1"><strong class="f-18">Oristo Universal Company (OUC).</strong> Was established in 1982, our founder Helen Mizuno and co-founder Ikechukwu Iyke saw a new market entry and decided to operate on the basis of truth and rectitude. Currently running three branches at Lagos and a branch at Abia (ngwa road, aba), OUC has its headquarters at 93, Obafemi Awolowo way Ikeja Lagos, Nigeria. Our consultancy approach help link various industrial organization both small and medium scale to the required chemicals that is best suited for the job. We are capably engineered to supply all across Nigeria and beyond.</p>
		          				</div>
		          			</div>
		        		</div>
		        		<div class="tab-pane fade in" id="tab3">
		          			<div class="row">
		          				<div class="col-md-6 col-sm-6">
		          					<p class="f-14 l-h1">Our purpose is to be a leading company by providing enhanced and profitable business transactions and provide quality services that exceed the expectations of our dearly esteemed customers. <strong class="f-18">Our vision</strong> is to be the n°1 reference in the supply of quality chemicals and materials that supports local, small, medium and large scale industries. </p>
		          				</div>
		          				<div class="col-md-6 col-sm-6">
		          					<img src="assets/img/ORISTO WALLi.jpeg" class="mwidth-100p">
		          				</div>
		          			</div>

		          			<div class="row m-t-5p">
		          				<div class="col-md-6 col-sm-6">
		          					<img src="assets/img/images-30.jpeg" class="mwidth-100p">
		          				</div>
		          				<div class="col-md-6 col-sm-6">
		          					<p class="f-14 l-h1"><strong class="f-18">Our mission statement</strong> is to build long term relationships with our customers and clients and provide exceptional customer services by pursuing business through innovation and advanced technology. We grow through creativity and innovative market entry. We integrate integrity and business ethics into all aspects of our business functioning.</p>
		          				</div>
		          			</div>
		        		</div>
		      		</div>
		    	</div>
			 </div>
			 <div class="col-md-2"></div>
		</div>
	</section>

    
@endsection