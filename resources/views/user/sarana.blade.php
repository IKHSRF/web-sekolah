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
<!-- Popular Courses -->

<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll"
        data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Sarana & Prasarana</h2>
                </div>
            </div>
        </div>
        <div class="row courses_row">
        @foreach($sarana as $saran)                                                                             
            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="{{asset('gambar/sarana/'.$saran->foto_sarana)}}" alt="{{$saran->foto_sarana}}"></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">{{$saran->nama_sarana}}</a></h3>
                        <div class="course_text">                                   
                            <p>{{$saran->detail_sarana}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection
