@extends('layouts.frontend')
@section('content')
  <section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">
            Detail Buku
          </h1>
          <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="products.html"> About Us</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

	<!--Start about-video area-->
	<section class="about-video-area section-gap">
		<div class="row align-items-center">
			<div class="col-lg-6 about-video-left">
				<h6 class="text-uppercase">Brand New app to blow your mind</h6>
				<h1>We've made a life
					<br>
					that wil change you
				</h1>
				<p><span>We are here to listen from you deliver exellence</span></p>
				<p>Lorem ipsum</p>
				<a class="primary-btn" href="#">Get Started Now</a>
			</div>
			<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative">
				<div class="overlay overlay-bg"></div>
				<a class="play-btn" href="https://youtube.com"></a>
			</div>
		</div>
	</div>
	</section>
	@endsection