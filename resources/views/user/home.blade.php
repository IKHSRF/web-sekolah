@extends('layouts.user.main')

@section('title', 'SMK WIKRMA BANJARMASIN')

@section('content')
<!-- Home -->

<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">
            @foreach($banner as $banne)
            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{asset('gambar/banner/'.$banne)}})">
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
            @endforeach
        </div>
    </div>

    <!-- Home Slider Nav -->

    <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>

<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">SMK WIKRAMA 1 BANJARMASIN</h2>
                    <div class="section_subtitle">
                        <p>SMK Wikrama 1 Banjarmasin adalah salah satu sekolah menengah kejuruan di Kabupaten Jepara di bidang Teknologi Informatika.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row features_row">

            <!-- Features Item -->
            <div class="col-lg-4 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="{{asset('assets/images/icon_1.png')}}" alt=""></div>
                    <h3 class="feature_title">Ilmu yang Amaliah</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-4 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="{{asset('assets/images/icon_2.png')}}" alt=""></div>
                    <h3 class="feature_title">Amal yang Ilmiah</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-4 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="{{asset('assets/images/icon_3.png')}}" alt=""></div>
                    <h3 class="feature_title">Akhlakul Karimah</h3>
                    <div class="feature_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

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
                    <div class="course_image"><img src="{{asset('gambar/sarana/.$saran->foto_sarana')}}" alt="{{$saran->foto_sarana}}"></div>
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



<!-- Team -->

<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="{{asset('assets/images/team_background.jpg')}}"
        data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">The Best Teacher</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                            Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row team_row">

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
