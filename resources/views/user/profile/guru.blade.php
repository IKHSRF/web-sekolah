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

<!-- Popular Courses -->
<!-- Team -->

<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="{{asset('assets/images/team_background.jpg')}}"
        data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">The Best Tutors in Town</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                            Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row team_row">

            <!-- Team Item -->
            @foreach($guru as $gur)
            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                 <div class="team_item">
                    <div class="team_image"><img src="{{asset('gambar/guru/'.$gur->foto_guru)}}" alt=""></div>
                    <div class="team_body">
                        <div class="team_title">{{$gur->nama_guru}}</div>
                        <div class="team_subtitle">{{$gur->jabatan}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
