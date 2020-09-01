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


<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg"
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
           
        </div>
    </div>
</div>

<!-- Latest News -->

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Latest News</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                            Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row news_row">
            <div class="col-lg-7 news_col">

                <!-- News Post Large -->
                <div class="news_post_large_container">
                    <div class="news_post_large">
                        <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                        <div class="news_post_large_title"><a href="blog_single.html">Here’s What You Need to
                                Know About Online Testing for the ACT and SAT</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">admin</a></li>
                                <li><a href="#">november 11, 2017</a></li>
                            </ul>
                        </div>
                        <div class="news_post_text">
                            <p>Policy analysts generally agree on a need for reform, but not on which path
                                policymakers should take. Can America learn anything from other nations...</p>
                        </div>
                        <div class="news_post_link"><a href="blog_single.html">read more</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 news_col">
                <div class="news_posts_small">

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Home-based business
                                insurance issue (Spring 2017 - 2018)</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">admin</a></li>
                                <li><a href="#">november 11, 2017</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">2018 Fall Issue: Credit
                                Card Comparison Site Survey (Summer 2018)</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">admin</a></li>
                                <li><a href="#">november 11, 2017</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Cuentas de cheques
                                gratuitas una encuesta de Consumer Action</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">admin</a></li>
                                <li><a href="#">november 11, 2017</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Troubled borrowers have
                                fewer repayment or forgiveness options</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">admin</a></li>
                                <li><a href="#">november 11, 2017</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg"
        data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Newsletter Content -->
                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">sign up for news and offers</div>
                        <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we
                            offer</div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="#" id="newsletter_form"
                            class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                            <button type="submit" class="newsletter_button">subscribe</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
