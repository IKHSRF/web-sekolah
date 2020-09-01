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
                <div class="home_slider_background"
                    style="background-image:url({{asset('assets/images/home_slider_1.jpg')}})">
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

<!-- Courses Sidebar -->
<div class="sidebar">
    <!-- Gallery -->
    <div class="sidebar_section">
        <div class="sidebar_gallery">
            <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                @foreach($gallery as $galeri)
                <li class="gallery_item">
                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+
                    </div>
                    <a class="colorbox" href="{{asset('gambar/gallery/'.$galeri->foto_galeri)}}">
                        <img src="{{asset('gambar/gallery/'.$galeri->foto_galeri)}}" alt="$galeri->nama_galeri">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
