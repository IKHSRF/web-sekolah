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
<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To Unicat E-Learning</h2>
						<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu Vestibulum</p></div>
					</div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_left">
                    @foreach($mading as $madin)
					<div class="about_item">
						<div class="about_item_image"><img src="{{asset('gambar/mading/'.$madin->foto_mading)}}" alt=""></div>
						<div class="about_item_title">{{$madin->nama_mading}}</div>
						<div class="about_item_text">
							<p>{{$madin->detail_mading}}</p>
						</div>
                    </div>
                    @endforeach
				</div>

			</div>
		</div>
	</div>

@endsection
