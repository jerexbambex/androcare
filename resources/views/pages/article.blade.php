@extends('layouts.home-template')

@section('site.title')
	<title>Blog | Androcare Fertility Nigeria </title>
@stop

@section('content')

	@php
		$img = "https://res.cloudinary.com/rohing/image/upload/v1598064930/androcare/assets/photo-1505751172876-fa1923c5c528.jpg"
	@endphp
<section class="hero-wrap hero-wrap-2" style="background-image: url({{$img}});" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Articles</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
					<a href="{{route('andro.article.detaiils')}}" class="block-20" style="background-image: url('https://res.cloudinary.com/rohing/image/upload/v1586912154/photo-1557499305-0af888c3d8ec_v1sq2l.jpg');">
						<div class="meta-date text-center p-2">
							<span class="day">23</span>
							<span class="mos">January</span>
							<span class="yr">2019</span>
						</div>
					</a>
					<div class="text bg-white p-4">
						<h3 class="heading"><a href="{{route('andro.article.detaiils')}}">Sperm Donation Center In Lagos</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center mt-4">
							<p class="mb-0">
								<a href="{{route('andro.article.detaiils')}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row no-gutters my-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@stop