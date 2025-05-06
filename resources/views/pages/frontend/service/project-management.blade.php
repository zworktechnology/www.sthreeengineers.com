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

</head>

<body>

    @include('pages.frontend.layouts.noscriptgoogletagmanager')

    <div class="page-wrapper">

        @include('pages.frontend.layouts.header')

        @include('pages.frontend.layouts.rightsidebar')

        <section class="banner-1-section pt_240 pb_140 bg_cover overflow-hidden"
            style="background-image: url(assets/frontend/images/background/bg-7.jpg);">
            <div class="line-grid-wrap">
                <span class="line-grid-1"></span>
                <span class="line-grid-2"></span>
                <span class="line-grid-3"></span>
                <span class="line-grid-4"></span>
                <span class="line-grid-5"></span>
            </div>
            <div class="banner-1-image-1 p_absolute b_0 r_0"><img
                    src="{{asset('assets/frontend/images/main-slider/image-2.png')}}"
                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
            </div>
            <div class="auto-container">
                <div class="p_relative text-center">
                    <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        Project Management</h1>
                    <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s"
                        data-wow-duration="1.5s">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="ml_10 mr_10">/</li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li class="ml_10 mr_10">/</li>
                        <li>Project Management</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="pb_110 pt_100">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">Project Management</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/9.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        Efficiently plan, execute, and oversee construction projects with our
                                        comprehensive civil project management services.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">Documentation</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/1.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        Streamline your project with comprehensive documentation services. Organized
                                        records for smooth operations.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">BOQ Preparation</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/2.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        Accurate BOQs prepared to detail. Ensuring transparency and precision in
                                        project cost estimation.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">Time Management</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/3.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        Time is money. Our experts optimize project schedules for timely and
                                        efficient delivery.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">Bill Certification</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/5.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        Trust us for accurate bill certification services. Ensuring fair and
                                        transparent financial transactions.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">Cost Management</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/4.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        Keep costs in check with our meticulous cost management strategies.
                                        Maximizing value for your investments.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">Rate Analysis</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/6.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        In-depth rate analysis for informed decision-making. Achieve cost-effective
                                        project outcomes.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">Quality & Cost Audit</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/7.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        Rigorous audits for quality and cost-effectiveness. Continuous improvement
                                        for project excellence.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="service-1-block alt">
                            <h4 class="service-1-title fs_25">Project Consultation</h4>
                            <div class="service-1-image">
                                <img src="{{asset('assets/frontend/images/resource/Project_Management/8.jpg')}}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                <div class="service-1-read-more"><a href="javascript:void(0);"
                                        class="c_light ff_sec fw_bold fs_14 ls_1">
                                        Consult with our experts for project success. Invaluable insights and
                                        guidance throughout your venture.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="parallax-bg-wrap b_0 p_absolute t_0 l_0 r_0 o_hidden">
                <div class="parallax-bg bg_cover  p_absolute t__50 l_0 r_0 b__50" data-parallax='{"y": 30}'
                    style="background-image: url(assets/frontend/images/background/bg-6.jpg);"></div>
            </div>
            <div class="auto-container">
                <div class="row no-gutters align-items-end">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="whychooseus-right-box"
                            style="background-image: url(assets/frontend/images/resource/image-2.jpg);">
                            <div class="">
                                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                        class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Bigger, Better,
                                    Faster </h6>
                                <h2 class="c_light fs_45 fw_black mb_18">Leading Way In Civil <br> Construction</h2>
                                <p class="mb_20 fs_16 c_light p_relative">Bring to the table win-win survival
                                    strategies to ensure
                                    proactive domination. At the end of the day, going forward, a new normal that
                                    has evolved.</p>
                                <a href="{{ route('contact') }}"
                                    class="c_light ff_sec fw_bold tt_u fs_14 ls_1 p_relative">request a call back <i
                                        class="ml_10 fs_20 v_middle flaticon-right-1"></i></a>
                                <div class="p_absolute r_0 t__35 p_33 bg_primary"><a href="https://youtu.be/uop7muARSno"
                                        class="video-btn-1 ripple" data-fancybox="video-1" data-caption=""><i
                                            class="flaticon-play-button"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('pages.frontend.layouts.footer')

        @include('pages.frontend.layouts.script')

        @include('pages.frontend.layouts.backtotop')
        
    </div>

</body>

</html>
