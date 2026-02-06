<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="author" content="Zwork Technology">

    @include('pages.frontend.layouts.metaog')

    @include('pages.frontend.layouts.hotjar')

    @include('pages.frontend.layouts.googletagmanager')

    @include('pages.frontend.layouts.headestyle')

    @turnstileScripts()

</head>

<body>

    @include('pages.frontend.layouts.noscriptgoogletagmanager')

    <div class="page-wrapper">

        @include('pages.frontend.layouts.header')

        {{-- @include('pages.frontend.layouts.popup') --}}

        @include('pages.frontend.layouts.rightsidebar')

        <section class="banner-1-section pt_330 bg_cover overflow-hidden"
            style="background-image: url(assets/frontend/images/main-slider/banner-1.jpg);">
            <div class="line-grid-wrap">
                <span class="line-grid-1"></span>
                <span class="line-grid-2"></span>
                <span class="line-grid-3"></span>
                <span class="line-grid-4"></span>
                <span class="line-grid-5"></span>
            </div>
            <div class="banner-1-image-1 p_absolute b_0 r_0"><img
                    src="{{ asset('assets/frontend/images/main-slider/image-12.webp') }}"
                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
            </div>
            <div class="auto-container d-flex flex-column align-content-between">
                <div class="p_relative ml_lg_100">
                    <h6 class="c_light tt_u fw_black ls_13 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1.5s">
                        Welcome to Sthree</h6>
                    <h1 class="c_light tt_u mb_30 fw_black fs_176 wow fadeInUp" data-wow-delay=".2s"
                        data-wow-duration="1.5s">ENGI<span class="text_stroke">NEERS</span></h1>
                    <p class="mb-2 fs_20 c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">A
                        company that specializes in safe, dependable, <br> and FIRST CLASS construction. Excellent
                        <br>
                        building construction management services are<br> what we offer.
                    </p>
                    <div class="mb-3 d-md-none d-block"><a href="https://api.whatsapp.com/send/?phone=%2B917871313987"
                            target="_blank"
                            class="btn-1 pt_10 pb_10 pl_30 pr_30 b_radius_23 ff_sec fw_bold tt_u fs_14 ls_1">Chat
                            On Whatsapp<span></span></a></div>
                    <div class="link-btn tt_u pr_font fs_14 wow fadeInUp mb-5" data-wow-delay=".7s"
                        data-wow-duration="1.5s">
                        <a href="{{ route('about') }}" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">discorver
                            more
                            <i class="ml_10 fs_20 v_middle flaticon-right-1 p_relative t_2"></i></a>
                    </div>
                </div>
                <div class="d-flex justify-content-center w-100 mt-md-0 mt-4 position-relative mb-2"
                    style='z-index:99 !important '>
                    <div class="hero_form px-3 py-4 w-100"
                        style='background:#f4f4f3;bottom:1px !important; border-radius: 10px'>
                        <h3 class="fs-5 text-center mb-3">Hot Deal Alert! Lifetime Structural Warranty - Book a
                            Call Now!</h3>
                        <form autocomplete="off" method="POST" action="{{ route('enquiry.store') }}"
                            class="contact-validation-active">
                            @csrf
                            <div class='row col-12 m-0 p-0'>
                                <div class="form-group col-lg-3"
                                    style="margin-right: 0px !important; padding-right: 0px !important;padding-left:0px !important">
                                    <input class="left-borderRadius" type="text" name="name"
                                        placeholder="Your Name" required style="height: 50px !important;">
                                </div>
                                <div class="form-group col-lg-3"
                                    style="margin-right: 0px !important; padding-right: 0px !important; margin-left: 0px !important; padding-left: 0px !important;">
                                    <input type="text" name="phonenumber" placeholder="Mobile Number" required
                                        style="border-radius: 0px !important;  height: 50px !important;">
                                </div>
                                <div class="form-group col-lg-3"
                                    style="margin-right: 0px !important; padding-right: 0px !important; margin-left: 0px !important; padding-left: 0px !important;">
                                    <input type="text" name="address" placeholder="Your Address" required
                                        style="border-radius: 0px !important;  height: 50px !important;">
                                </div>
                                <div class="col-lg-3 form-group message-btn"
                                    style="margin-left: 0px !important; padding-left: 0px !important;padding-right:0px !important">
                                    <button type="submit" class="theme-btn-one px-3 w-100 right-borderRadius"
                                        style="Padding: 11px 0px;">Book Free
                                        Consultation</button>
                                </div>
                            </div>
                            <div class="cf-turnstile mt-20px" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <section class="dark-bg pb_110">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="image p_relative mb_30 d_iblock" style="height: 100px;">
                            <img src="{{ asset('assets/frontend/images/resource/image-1.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mt_120">
                            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>welcome to Sthree
                                Engineers
                                <h6>
                                    <h2 class="c_light fs_45 fw_black mb_40">Your Dream is Our Mission<br></h2>
                                    <p class="mb_30 fs_19  c_light">STHREE ENGINEERS is a trustworthy, dependable,
                                        and
                                        cost-effective building company. We provide the highest quality construction
                                        services. We have over 19 years of expertise in the building construction
                                        industry. If you want to create a high-rise or a housing project, you are in
                                        a
                                        perfect spot right now. </p>
                                    <p class="mb_50 fs_22 fw_medium c_light">More than 75+ Companies trusted us,
                                        Build
                                        Your Dream With What It really Cost. </p>
                                    <div class="author-box d-flex align-items-right"
                                        style="float:right; padding-right:20px;">
                                        <div class="ml_20" style="padding: 11px;">
                                            <p class="mb-0 fs_20 fw_sbold c_light">Rtn. Er. M. Senthilnathan</p>
                                            <p class="mb_20 fs_18 c_light" style="float:right;">Founder</p>
                                        </div>
                                        <div class="image mb_30 mr_20"><img class="b_radius_40"
                                                src="{{ asset('assets/frontend/images/resource/authors.png') }}">
                                        </div>
                                    </div>
                                </h6>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-grid-wrap">
                <span class="line-grid-1"></span>
                <span class="line-grid-2"></span>
                <span class="line-grid-3"></span>
                <span class="line-grid-4"></span>
                <span class="line-grid-5"></span>
            </div>
        </section>

        <section class="gray-bg pb_110 pt_100">
            <div class="auto-container">
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                        class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Services</h6>
                <h2 class="fw_black fs_45 mb_20">What we do</h2>
                <p class="mb_50 fs_18">Besides providing civil engineering services, we also provide
                    contractor services for building renovation, Interior works like modual kitchen and other
                    dectrative
                    works as well as extensive range of building
                    services. Thus, we are a one stop solution for you to build your dream building at an
                    affordable price. </p>
                <div class="swiper-container four-item-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-building"></i></div>
                                <a href="{{ route('building-construction') }}">
                                    <h4 class="service-1-title fs_23">Building Construction</h4>
                                </a>
                                <div class="service-1-image">
                                    <img src="{{ asset('assets/frontend/images/resource/1.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    <div class="service-1-read-more"><a href="javascript:void(0);"
                                            class="c_light ff_sec fw_bold fs_14 ls_1">
                                            <span class="text_j">
                                                Building exceptional structures with precision and quality
                                                craftsmanship.
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-guarantee"></i></div>
                                <a href="{{ route('project-management') }}">
                                    <h4 class="service-1-title fs_23">Project Management</h4>
                                </a>
                                <div class="service-1-image">
                                    <img src="{{ asset('assets/frontend/images/resource/5.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    <div class="service-1-read-more"><a href="javascript:void(0);"
                                            class="c_light ff_sec fw_bold fs_14 ls_1">
                                            <span class="text_j">
                                                We efficiently manage every aspect of &nbsp;your construction
                                                project.
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-interior-design"></i></div>
                                <a href="{{ route('interior-works') }}">
                                    <h4 class="service-1-title fs_23">Interior Works</h4>
                                </a>
                                <div class="service-1-image">
                                    <img src="{{ asset('assets/frontend/images/resource/2.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    <div class="service-1-read-more"><a href="javascript:void(0);"
                                            class="c_light ff_sec fw_bold fs_14 ls_1">
                                            <span class="text_j">
                                                Transform your Empty space with customized and innovative designs.
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-measure"></i></div>
                                <a href="{{ route('surveying') }}">
                                    <h4 class="service-1-title fs_23">Surveying</h4>
                                </a>
                                <div class="service-1-image">
                                    <img src="{{ asset('assets/frontend/images/resource/14.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    <div class="service-1-read-more"><a href="javascript:void(0);"
                                            class="c_light ff_sec fw_bold fs_14 ls_1">
                                            <span class="text_j">
                                                We provide Accurate land and building surveying for informed
                                                decision-making.
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-blueprint"></i></div>
                                <a href="{{ route('valuation') }}">
                                    <h4 class="service-1-title fs_23">Valuation</h4>
                                </a>
                                <div class="service-1-image">
                                    <img src="{{ asset('assets/frontend/images/resource/3.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    <div class="service-1-read-more"><a href="javascript:void(0);"
                                            class="c_light ff_sec fw_bold fs_14 ls_1">
                                            <span class="text_j">
                                                We provide accurate and reliable property valuation for your needs.
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-guarantee"></i></div>
                                <a href="{{ route('approval') }}">
                                    <h4 class="service-1-title fs_25">Approval</h4>
                                </a>
                                <div class="service-1-image">
                                    <img src="{{ asset('assets/frontend/images/resource/4.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    <div class="service-1-read-more"><a href="javascript:void(0);"
                                            class="c_light ff_sec fw_bold fs_14 ls_1">
                                            <span class="text_j">
                                                Efficient building approval services for a hassle-free construction
                                                process.
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-newspaper"></i></div>
                                <a href="{{ route('quality-survey') }}">
                                    <h4 class="service-1-title fs_23">Quantity Survey</h4>
                                </a>
                                <div class="service-1-image">
                                    <img src="{{ asset('assets/frontend/images/resource/12.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    <div class="service-1-read-more"><a href="javascript:void(0);"
                                            class="c_light ff_sec fw_bold fs_14 ls_1">
                                            <span class="text_j">
                                                Ensure the highest quality and cost-efficiency in your construction
                                                project.
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav-style-2 service-1-nav">
                        <div class="slider-control slider-button-prev4 hvr-zoom-1 hvr-zoom-1-primary"><span><i
                                    class="far fa-angle-left"></i></span></div>
                        <div class="slider-control slider-button-next4 hvr-zoom-1 hvr-zoom-1-primary"><span><i
                                    class="far fa-angle-right"></i></span> </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb_120">
            <div class="parallax-bg-wrap h_576 p_absolute t_0 l_0 r_0 o_hidden">
                <div class="parallax-bg bg_cover  p_absolute t__50 l_0 r_0 b__50" data-parallax='{"y": 30}'
                    style="background-image: url(assets/frontend/images/background/bg-6.jpg);"></div>
            </div>
            <div class="auto-container">
                <div class="row no-gutters align-items-end">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="whychooseus-1-left-box bg_white pl_50 pr_50 pt_80 pb_40 with_shadow">
                            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>OUr Key points</h6>
                            <h2 class="fw_black fs_45 mb_20">Why Choose Us</h2>
                            <p class="mb_40 fs_18">At STHREE ENGINEERS, We don't just build structures we turn our
                                clients' dreams into reality. Our mission is to provide safe, reliable, quality and
                                cost-effective construction services that consistently exceed our clients'
                                expectations.
                            </p>
                            <ul class="list-1 fs_20 fw_medium c_dark2 mb_30">
                                <li><i class="flaticon-check-mark"></i>Tailored Construction Solutions</li>
                                <li><i class="flaticon-check-mark"></i>Experienced Expertise</li>
                                <li><i class="flaticon-check-mark"></i>Timely Project Completion</li>
                                <li><i class="flaticon-check-mark"></i>Cost-Effective Solutions</li>
                                <li><i class="flaticon-check-mark"></i>Dedicated and Passionate Team</li>
                                <li><i class="flaticon-check-mark"></i>End-to-End Project Management</li>
                                <li><i class="flaticon-check-mark"></i>Innovative Eco Power Technologies</li>
                            </ul>
                            <div class="d-flex align-items-center mb_35">
                                <div class="image mr_60 p_relative">
                                    <img src="{{ asset('assets/frontend/images/resource/author-5.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                </div>
                                <div class="right-column">
                                    <h5 class="fs_14 fw_bold tt_u c_primary mt_10 mb_10">call for contractor now
                                    </h5>
                                    <div class="fs_30 fw_bold c_dark"><a class="c_dark"
                                            href="tel:+917871313987">(+91)
                                            78713 13987</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="whychooseus-right-box"
                            style="background-image: url(assets/frontend/images/resource/image-14.jpg);">
                            <div class="">
                                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                        class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Bigger, Better,
                                    Faster
                                </h6>
                                <h2 class="c_light fs_45 fw_black mb_20">Leading Way In Civil <br> Construction
                                </h2>
                                <p class="mb_20 fs_16 c_light p_relative">Bring to the table win-win survival
                                    strategies
                                    to ensure
                                    proactive domination. At the end of the day, going forward, a new normal that
                                    has
                                    evolved.</p>
                                <a href="{{ route('contact') }}"
                                    class="c_light ff_sec fw_bold tt_u fs_14 ls_1 p_relative">request
                                    a call back <i class="ml_10 fs_20 v_middle flaticon-right-1"></i></a>
                                <div class="p_absolute r_0 t__35 p_33 bg_primary"><a
                                        href="https://youtu.be/uop7muARSno" class="video-btn-1 ripple"
                                        data-fancybox="video-1" data-caption=""><i
                                            class="flaticon-play-button"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt_110">
            <div class="h_576 p_absolute t_0 l_0 r_0 bg_dark"></div>
            <div class="auto-container">
                <div class="d-flex flex-wrap justify-content-lg-between">
                    <div>
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>our work</h6>
                        <h2 class="c_light fs_45 fw_black mb_40">Explore Recent Projects</h2>
                    </div>
                    <div class="link-btn mb_30">
                        <a href="{{ route('project') }}"
                            class="btn-1 pt_18 pb_15 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1">view
                            all projects <i class="flaticon-fast-forward"></i> <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="auto-container full-width ps-4 pe-4">
                <div class="swiper-container four-item-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-1-column wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                <div class="project-1-block">
                                    <div class="project-1-image" style="height: 375px !important;">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/4.webp') }}"
                                            alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-1-column wow fadeInDown" data-wow-delay=".2s"
                                data-wow-duration="1.5s">
                                <div class="project-1-block">
                                    <div class="project-1-image" style="height: 375px !important;">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/2.webp') }}"
                                            alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-1-column wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                <div class="project-1-block">
                                    <div class="project-1-image" style="height: 375px !important;">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/3.webp') }}"
                                            alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-1-column wow fadeInDown" data-wow-delay=".2s"
                                data-wow-duration="1.5s">
                                <div class="project-1-block">
                                    <div class="project-1-image" style="height: 375px !important;">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/1.webp') }}"
                                            alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="project-1-bottom-title text_stroke" data-parallax='{"x": -50}'>&nbsp;&nbsp;STHREE ENGINEERS
            </h1>
        </section>

        <section class="pb_90">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="image mb_30"><img
                                src="{{ asset('assets/frontend/images/resource/service-8.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>About company</h6>
                        <h2 class="fw_black fs_45 mb_45">We Provide the Guaranteed <br> Quality in Construction
                        </h2>
                        <p class="mb_45">Turning Dreams into Reality with Exceptional Construction Solutions</p>
                        <p class="mb_45">We turn dreams into reality with exceptional construction solutions. With
                            over
                            19 years of expertise, we deliver safe, reliable, quality and cost-effective projects
                            that
                            surpass
                            expectations. From custom homes to innovative commercial spaces, our attention to detail
                            ensures dreams take shape with precision and excellence.</p>
                        <div class="row">
                            <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                <div class="d-flex align-items-center mb_10">
                                    <i class="flaticon-building-1 theme-color fs_65 w_65 mr_15"></i>
                                    <h4 class="fs_22 mb_0">Most Reliable</h4>
                                </div>
                                <p class="fs_17 mb_30">More than 75+ Companies trusted us.</p>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                <div class="d-flex align-items-center mb_10">
                                    <i class="flaticon-budget theme-color fs_65 w_65 mr_15"></i>
                                    <h4 class="fs_22 mb_0">Cost Effective</h4>
                                </div>
                                <p class="fs_17 mb_30">Build Your Dream With What It really Cost.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt_120 pb_90 bg_cover"
            style="background-image:url(assets/frontend/images/background/bg-3.jpg)">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Testimonials</h6>
                        <h2 class="c_light fs_45 fw_black mb_40">What our clients <br> say about us</h2>
                        <div class="slider-nav-style-2 testimonial-1-nav ps-lg-5">
                            <div class="slider-control slider-button-prev2 hvr-zoom-1 hvr-zoom-1-primary rotate_180">
                                <span><i class="flaticon-right-1"></i></span>
                            </div>
                            <div class="slider-control slider-button-next2 hvr-zoom-1 hvr-zoom-1-primary"><span><i
                                        class="flaticon-right-1"></i></span> </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="swiper-container two-item-carousel">
                            <div class="swiper-wrapper">
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">Today best experience for my new House
                                                construction Discussion & ideas And
                                                planning how to plan quality construction and perfect solutions for
                                                all
                                                construction need . best consultant in construction industry</div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">The team at Sthree Engineering was a
                                                pleasure to work with. Their open
                                                communication and willingness to address concerns made for a
                                                stress-free
                                                project. </div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">Their team was fantastic to work with.
                                                They
                                                listened to my ideas and
                                                preferences, and their attention to detail was commendable. The
                                                quality
                                                of
                                                their construction work was outstanding, and they completed the
                                                project
                                                on
                                                time</div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">Professionally Good in work,
                                                completion of
                                                project on proper time, Future
                                                vision Engineering.. apart from that Kind and Reliable.....</div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">Interior & Exterior construction is
                                                innovative like Babu road site, Quality
                                                construction & approach easily </div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
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

        <div class="pb_20 pt_20">
            <div class="brand-logo-sec-border"></div>
            <div class="text-center">
                <h5
                    class="ff_sec fw_bold tt_u fs_14 ls_1 c_primary text-center mb_45 bg_light pl_30 pr_30 p_relative d_iblock">
                    We worked with royal clients</h5>
            </div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-1.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-2.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-4.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-3.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-4.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="map-1-section">
            <div class="p_absolute t_0 r_0 b_0 l_0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.323687281428!2d78.69616270998624!3d10.786501989318516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf522449c4b13%3A0x9682228f66a04612!2sSTHREE%20ENGINEERS!5e0!3m2!1sen!2sin!4v1690825305818!5m2!1sen!2sin"
                    width="600" height="550" frameborder="0" style="border:0; width: 100%; height: 100%"
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="auto-container">
                <div class="contact-info-1-box">
                    <h4 class="fs_20 c_light mb_10">Office Address</h4>
                    <span class="w_20 h_2 bg_light mr_10 d_iblock mb_20"></span>
                    <p class="c_light mb_25">43F, 1st Floor, Pudukkottai Main Road, Subramaniyapuram, Upstairs
                        Canara
                        Bank ATM, Trichy, Tamilnadu, India - 620 020.</p>
                    <p class="c_light">Phone : <a href="tel:+917871313987">(+91) 78713 13987</a> </p>
                </div>
            </div>
        </section>

        @include('pages.frontend.layouts.footer')

        @include('pages.frontend.layouts.script')

        @include('pages.frontend.layouts.backtotop')

    </div>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "https://www.sthreeengineers.com/",
    "name": "Sthree Engineers | Premier Construction Company in Trichy",
    "description": "Trustworthy, dependable, affordable, and cost-effective building solutions with 19 years of experience in Building Construction, Project Management, and Interior Works.",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://www.sthreeengineers.com/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "url": "https://www.sthreeengineers.com/",
    "inLanguage": "en-US",
    "primaryImageOfPage": "https://www.sthreeengineers.com/assets/images/logo.png",
    "isPartOf": {"@id": "https://www.sthreeengineers.com/#organization"}
  },
  {
    "@context": "https://schema.org",
    "@type": "ConstructionCompany",
    "@id": "https://www.sthreeengineers.com/#organization",
    "name": "Sthree Engineers",
    "url": "https://www.sthreeengineers.com/",
    "telephone": "+91-78713-13987",
    "email": "admin@sthreeengineers.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "43F, 1st Floor, Pudukottai Main Road, Subramaniyapuram, Upstair Canara Bank ATM",
      "addressLocality": "Trichy",
      "addressRegion": "Tamilnadu",
      "postalCode": "620020",
      "addressCountry": "IN"
    },
    "areaServed": [
      {"@type": "City", "name": "Tiruchirappalli"},
      {"@type": "City", "name": "Perambalur"}
    ]
  }
</script>

</body>

</html>
