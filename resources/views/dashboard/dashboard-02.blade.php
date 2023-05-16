@extends('layouts.simple.master')
@section('title', 'Bootstrap Tabs')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Tabs</li>
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-xl-12 xl-100">
			<div class="card">
				<!-- <div class="card-header">
					<h5>Tabs With Icon </h5>
				</div> -->
				<div class="card-body">
					<ul class="nav nav-tabs" id="icon-tab" role="tablist">
						<li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="icofont icofont-chart-bar-graph"></i>Statistics</a></li>
						<li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Docs</a></li>
						<!-- <li class="nav-item"><a class="nav-link" id="contact-icon-tab" data-bs-toggle="tab" href="#contact-icon" role="tab" aria-controls="contact-icon" aria-selected="false"><i class="icofont icofont-contacts"></i>Contact</a></li> -->
					</ul>
					<div class="tab-content" id="icon-tabContent">
						<div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">

						<div class="row size-column">
							<div class="col-xl-6 box-col-6 xl-50">
							<div class="row dash-chart">
								<!-- <div class="col-xl-10 box-col-6 col-lg-12 col-md-6"> -->
								<div class="card o-hidden">
									<div class="card-body">
									<div class="ecommerce-widgets media">
										<div class="media-body">
										<p><h5>First Semester</h5></p>
										<h6 class="f-w-500 mb-0 f-26">No. of Indicator : <span class="counter">30</span></h6>
										</div>
										<!-- <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i></div> -->
									</div>
									</div>
								</div>
								<div class="card o-hidden">
									<div class="card-body">
									<div class="media">
										<div class="media-body">
										<p><h5>Second Semester</h5></p>
										<!-- <p class="f-w-500 font-roboto">Second Semester<span class="badge pill-badge-primary ms-3">Hot</span></p> -->
										<div class="progress-box">
											<h6 class="f-w-500 mb-0 f-26">No. of Indicator : <span class="counter">40</span></h6>
											<!-- <h4 class="f-w-500 mb-0 f-26">$<span class="counter">9000.04</span></h4> -->
											<!-- <div class="progress sm-progress-bar progress-animate app-right d-flex justify-content-end">
											<div class="progress-gradient-primary" role="progressbar" style="width: 35%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="font-primary">88%</span><span class="animate-circle"></span></div>
											</div> -->
										</div>
										</div>
									</div>
									</div>
								<!-- </div> -->
							</div>
							</div>
						</div>
						<div class="col-xl-6 box-col-12 xl-100">
							<div class="card-header">
							<p><h5>Number of indicators per offices</h5></p>
							</div>
						
							<div class="card o-hidden dash-chart">
									<div id="basic-bar"></div>
							</div>
						</div>
						
					<!-- </div> -->
							<!-- <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p> -->
				</div>
				</div>
						</div>
				</div>
						<div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-icon-tab">
							<p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
						</div>
						<!-- <div class="tab-pane fade" id="contact-icon" role="tabpanel" aria-labelledby="contact-icon-tab">
							<p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
						</div> -->
			</div>
		</div>
	</div>
		<!-- </div> -->
	<!-- </div> -->
</div>

@endsection

@section('script')
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/chart-custom.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/dashboard/dashboard_2.js')}}"></script>
@endsection

