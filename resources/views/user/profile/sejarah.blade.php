@extends('layouts.user.main')

@section('title', 'SMK WIKRMA BANJARMASIN')

@section('content')
<!-- Home -->
<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{asset('assets/images/home_slider_1.jpg')}})">
                </div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">There is no learning Community</div>
                                <div class="home_slider_subtitle">Without Vission School Leadership</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Home Slider Nav -->
</div>
<!-- Features -->

<div class="feature">
		<div class="feature_background" style="background-image:url({{asset('assets/images/courses_background.jpg')}}"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Why Choose Us</h2>
						<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
					</div>
				</div>
			</div>
			<div class="row feature_row">

				<!-- Feature Content -->
				<div class="col-lg-6 feature_col">
					<div class="feature_content">
						<!-- Accordions -->
						<div class="accordions">
							
							<div class="elements_accordions">
								@foreach($sejarah as $sejara)
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>{{$sejara->judul_sejarah}}</div></div>
									<div class="accordion_panel">
										<p>{{$sejara->detail_sejarah}}</p>
									</div>
								</div>
								@endforeach
							</div>

						</div>
						<!-- Accordions End -->
					</div>
				</div>

				<!-- Feature Video -->
				<div class="col-lg-6 feature_col">
					<div class="feature_video d-flex flex-column align-items-center justify-content-center">
<div class="feature_video_background" style="background-image:url({{asset('assets/images/video.jpg')}}"></div>
						<a class="vimeo feature_video_button" href="https://player.vimeo.com/video/99340873?title=0" title="OH, PORTUGAL - IN 4K - Basti Hansen - Stock Footage">
							<img src="{{asset('assets/images/play.png')}}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
