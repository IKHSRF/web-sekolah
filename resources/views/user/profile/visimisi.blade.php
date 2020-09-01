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

<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="counter_content">
                    <h2 class="counter_title">Visi</h2>
                    <div class="counter_text">
                        @foreach ($motto as $mott)
                        <p>{{$loop->iteration}}. {{$mott->visi}}</p>
                        @endforeach
                    </div>
                </div>
                <div class="counter_content">
                    <h2 class="counter_title">Misi</h2>
                    <div class="counter_text">
                        @foreach ($motto as $mott)
                        <p>{{$loop->iteration}}. {{$mott->misi}}</p>
                        @endforeach
                    </div>
                </div>
                <div class="counter_content">
                    <h2 class="counter_title">Moto</h2>
                    <div class="counter_text">
                        @foreach ($motto as $mott)
                        <p>{{$mott->motto}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Events -->

<div class="events">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Upcoming events</h2>
                    <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                            Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row events_row">

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_left">
                    <div class="event_image"><img src="images/event_1.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">21</div>
                                <div class="event_month trans_200">Aug</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Which Country Handles Student Debt?</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 -
                                        19.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New
                                        York City</span></div>
                                <div class="event_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which
                                        path...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_mid">
                    <div class="event_image"><img src="images/event_2.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">27</div>
                                <div class="event_month trans_200">Aug</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Repaying your student loans (Winter
                                    2017-2018)</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 -
                                        17.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25
                                        Brooklyn City</span></div>
                                <div class="event_text">
                                    <p>This Consumer Action News issue covers topics now being debated before...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_right">
                    <div class="event_image"><img src="images/event_3.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">01</div>
                                <div class="event_month trans_200">Sep</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Alternative data and financial inclusion</a>
                            </div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 -
                                        18.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New
                                        York City</span></div>
                                <div class="event_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which
                                        path...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Team -->

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

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_1.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                        <div class="team_subtitle">Marketing & Management</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_2.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">William James</a></div>
                        <div class="team_subtitle">Designer & Website</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_3.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">John Tyler</a></div>
                        <div class="team_subtitle">Quantum mechanics</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_4.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Veronica Vahn</a></div>
                        <div class="team_subtitle">Math & Physics</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

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
