@extends('layouts.guest')

@section('content')

<section class="banner-1-section pt_240 pb_140 bg_cover overflow-hidden" style="background-image: url(assets/frontend/images/background/bg-7.jpg);">
    <div class="line-grid-wrap">
        <span class="line-grid-1"></span>
        <span class="line-grid-2"></span>
        <span class="line-grid-3"></span>
        <span class="line-grid-4"></span>
        <span class="line-grid-5"></span>
    </div>
    <div class="banner-1-image-1 p_absolute b_0 r_0"><img src="{{ asset('assets/frontend/images/main-slider/image-2.png') }}" alt=""></div>
    <div class="auto-container">
        <div class="p_relative text-center">
            <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">About Us</h1>
            <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="ml_10 mr_10">/</li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>

<!-- About -->
<section class="pt_160 pb_90">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <div class="p_relative">
                    <div class="image p_relative d_iblock" data-parallax='{"y": -20}'>
                        <img src="{{asset('assets/frontend/images/resource/image-11.jpg')}}" alt="">
                    </div>
                    <div class="image p_relative b_40 text-end" data-parallax='{"y": 20}'>
                        <img src="{{asset('assets/frontend/images/resource/image-34.jpg')}}" alt="">
                    </div>
                    <div class="experience-year fs_18 fw_bold ff_sec theme-bg p_absolute l_60 b_110 text-center text-light pt_30 b_radius_50 lh_20" data-parallax='{"x": 20}'><span class="fs_60 fw_black mb_25 d_iblock">19</span><br> Years <br> Experience</div>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="p_relative">
                    <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>About Company</h6>
                    <h2 class="fs_45 fw_black mb_40">STHREE ENGINEERS <br>
                        Name of Professionalism</h2>
                    <p class="mb_30 fs_20">Building excellence through innovation, sustainability, and a commitment to quality.</p>
                    <p class="mb_50 fs_18">At STHREE ENGINEERS, we believe that every project is an opportunity to turn our clients' dreams into reality. With over 19 years of experience in the industry, we have honed our skills and expertise to deliver safe, reliable, and cost-effective construction services that exceed our client's expectations. Our team is dedicated to providing the best building construction solutions. We pride ourselves on our attention to detail, quality workmanship, and timely project completion. Let us turn your dreams into reality with our expertise and dedication to excellence in construction.</p>
                    <div class="author-box d-flex align-items-center">
                        <div class="image mb_20 mr_25"><img class="b_radius_50" src="{{asset('assets/frontend/images/resource/authors.jpg')}}" alt=""></div>
                        <div class="mr_40">
                            <p class="mb-0 fs_20 fw_sbold c_dark">Lion. Er. M. Senthilnathan</p>
                            <p class="mb_20 fs_18 c_dark">Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- whychoose us -->
<section class="pt_120 bg_gray">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-7 wow fadeInUp mb_50" data-wow-delay=".2s" data-wow-duration="1.5s">
                <div class="">
                    <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Our Key points</h6>
                    <h2 class="fw_black fs_45 mb_20">Why Choose Us</h2>
                    <p class="mb_40 fs_18">At STHREE ENGINEERS, we don't just build structures we turn our clients' dreams into reality. With an impressive track record of over 19 years in the construction industry, we have become synonymous with reliability, innovation, and excellence. Our mission is to provide safe, reliable, quality and cost-effective construction services that consistently exceed our clients' expectations.</p>
                    <ul class="list-1 alt fs_20 fw_medium c_dark2 mb_30">
                        <li><i class="flaticon-check-mark"></i>Tailored Construction Solutions</li>
                        <li><i class="flaticon-check-mark"></i>Cost-Effective Solutions</li>
                        <li><i class="flaticon-check-mark"></i>Dedicated and Passionate Team</li>
                        <li><i class="flaticon-check-mark"></i>End-to-End Project Management</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                <div class="feature-image-1">
                    <img src="{{asset('assets/frontend/images/resource/image-11.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimonial -->
<section class="pt_120 pb_90 bg_cover" style="background-image: url(assets/frontend/images/background/bg-2.jpg);">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Testimonials</h6>
                <h2 class="c_light fs_45 fw_black mb_40">What they're <br> Talking About <br> Company ?</h2>
                <div class="slider-nav-style-2 testimonial-1-nav ms-lg-5">
                    <div class="slider-control slider-button-prev2 hvr-zoom-1 hvr-zoom-1-primary rotate_180"><span><i class="flaticon-right-1"></i></span></div>
                    <div class="slider-control slider-button-next2 hvr-zoom-1 hvr-zoom-1-primary"><span><i class="flaticon-right-1"></i></span> </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="swiper-container two-item-carousel">
                    <div class="swiper-wrapper">
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="testimonials-1-block">
                                <div class="testimonials-1-top-content">
                                    <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                    <div class="testimonials-1-desc">Today best experience for my new House construction Discussion & ideas And
                                        planning how to plan quality construction and perfect solutions for all
                                        construction need . best consultant in construction industry</div>
                                </div>
                                <div class="testimonials-1-author">
                                    <div class="testimonials-1-author-image"><img src="{{asset('assets/frontend/images/resource/author-9.jpg')}}" alt=""></div>
                                    <div class="testimonials-1-author-title">Our Client</div>
                                    <div class="testimonials-1-designation">Review</div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="testimonials-1-block">
                                <div class="testimonials-1-top-content">
                                    <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                    <div class="testimonials-1-desc">The team at Sthree Engineering was a pleasure to work with. Their open
                                        communication and willingness to address concerns made for a stress-free
                                        project. </div>
                                </div>
                                <div class="testimonials-1-author">
                                    <div class="testimonials-1-author-image"><img src="{{asset('assets/frontend/images/resource/author-9.jpg')}}" alt=""></div>
                                    <div class="testimonials-1-author-title">Our Client</div>
                                    <div class="testimonials-1-designation">Review</div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="testimonials-1-block">
                                <div class="testimonials-1-top-content">
                                    <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                    <div class="testimonials-1-desc">Their team was fantastic to work with. They listened to my ideas and
                                        preferences, and their attention to detail was commendable. The quality of
                                        their construction work was outstanding, and they completed the project on
                                        time</div>
                                </div>
                                <div class="testimonials-1-author">
                                    <div class="testimonials-1-author-image"><img src="{{asset('assets/frontend/images/resource/author-9.jpg')}}" alt=""></div>
                                    <div class="testimonials-1-author-title">Our Client</div>
                                    <div class="testimonials-1-designation">Review</div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="testimonials-1-block">
                                <div class="testimonials-1-top-content">
                                    <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                    <div class="testimonials-1-desc">Professionally Good in work, completion of project on proper time, Future
                                        vision Engineering.. apart from that Kind and Reliable.....</div>
                                </div>
                                <div class="testimonials-1-author">
                                    <div class="testimonials-1-author-image"><img src="{{asset('assets/frontend/images/resource/author-9.jpg')}}" alt=""></div>
                                    <div class="testimonials-1-author-title">Our Client</div>
                                    <div class="testimonials-1-designation">Review</div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="testimonials-1-block">
                                <div class="testimonials-1-top-content">
                                    <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                    <div class="testimonials-1-desc">Interior & Exterior construction is innovative like Babu road site, Quality
                                        construction & approach easily </div>
                                </div>
                                <div class="testimonials-1-author">
                                    <div class="testimonials-1-author-image"><img src="{{asset('assets/frontend/images/resource/author-9.jpg')}}assets/images/resource/author-9.jpg" alt=""></div>
                                    <div class="testimonials-1-author-title">Our Client</div>
                                    <div class="testimonials-1-designation">Review</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- funfacts -->
<section class="pb_90 pt_90 bg_gray5">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5">
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>statistics</h6>
                <h2 class="fw_black fs_45 mb_20">Know More About <br> Our Success</h2>
                <p class="mb_45">We place the utmost importance on each challenging activity.</p>
            </div>
            <div class="col-lg-7">
                <div class="ps-lg-5">
                    <div class="row row-20">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div class="fun-fact-1-block bg_light border-0">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-engineer c_dark2 fs_65 w_65 mr_15"></i>
                                    <div>
                                        <div class="fs_50 fw_bold c_primary">
                                            <span class="funfact-1-number odometer" data-count="19">00</span><span> +</span>
                                        </div>
                                        <p class="fw_bold mb_0">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div class="fun-fact-1-block bg_light border-0">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-construction c_dark2 fs_65 w_65 mr_15"></i>
                                    <div>
                                        <div class="fs_50 fw_bold c_primary">
                                            <span class="funfact-1-number odometer" data-count="75">00</span><span> +</span>
                                        </div>
                                        <p class="fw_bold mb_0">Projects Handover</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div class="fun-fact-1-block bg_light border-0">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-skyscrapers c_dark2 fs_65 w_65 mr_15"></i>
                                    <div>
                                        <div class="fs_50 fw_bold c_primary">
                                            <span class="funfact-1-number odometer" data-count="10">00</span><span> +</span>
                                        </div>
                                        <p class="fw_bold mb_0">Ongoing Project</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div class="fun-fact-1-block bg_light border-0">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-apartment c_dark2 fs_65 w_65 mr_15"></i>
                                    <div>
                                        <div class="fs_50 fw_bold c_primary">
                                            <span class="funfact-1-number odometer" data-count="15">00</span><span> +</span>
                                        </div>
                                        <p class="fw_bold mb_0">Upcoming Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection