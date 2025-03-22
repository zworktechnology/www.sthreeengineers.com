@extends('layouts.guest')

@section('content')
    <!-- banner -->
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
                src="{{ asset('assets/frontend/images/main-slider/image-2.png') }}"
                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
        </div>
        <div class="auto-container">
            <div class="p_relative text-center">
                <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Services
                </h1>
                <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s"
                    data-wow-duration="1.5s">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="ml_10 mr_10">/</li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="pb_110 pt_100">
        <div class="auto-container">
            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Services</h6>
            <h2 class="fw_black fs_45 mb_20">What we do</h2>
            <p class="mb_50 fs_18">
                Besides providing civil engineering services, we also provide
                contractor service for building renovation, Interior works like modual kitchen and other. Dectrative works
                as well as extensive range of building
                services. Thus, we are a one stop solution for you to build your dream building at an
                affordable price.
            </p>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon"><i class="flaticon-building"></i></div>
                        <a href="{{ route('civil-construction-company') }}">
                            <h4 class="service-1-title fs_25">Building Construction</h4>
                        </a>
                        <div class="service-1-image">
                            <img src="{{ asset('assets/frontend/images/resource/1.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            <div class="service-1-read-more"><a href="javascript:void(0);"
                                    class="c_light ff_sec fw_bold fs_14 ls_1">Building exceptional structures with precision
                                    and quality craftsmanship.</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon"><i class="flaticon-building"></i></div>
                        <a href="{{ route('civil-engineering-construction') }}">
                            <h4 class="service-1-title fs_25">Civil Engineering</h4>
                        </a>
                        <div class="service-1-image">
                            <img src="{{ asset('assets/frontend/images/resource/3.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            <div class="service-1-read-more"><a href="javascript:void(0);"
                                    class="c_light ff_sec fw_bold fs_14 ls_1">Building exceptional structures with precision
                                    and quality craftsmanship.</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon"><i class="flaticon-engineer"></i></div>
                        <a href="{{ route('project_management') }}">
                            <h4 class="service-1-title fs_25">Project Management</h4>
                        </a>
                        <div class="service-1-image">
                            <img src="{{ asset('assets/frontend/images/resource/5.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            <div class="service-1-read-more"><a href="javascript:void(0);"
                                    class="c_light ff_sec fw_bold fs_14 ls_1">We efficiently manage every aspect of
                                    &nbsp;your construction project.</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon"><i class="flaticon-planning"></i></div>
                        <a href="{{ route('valuation') }}">
                            <h4 class="service-1-title fs_25">Valuation</h4>
                        </a>
                        <div class="service-1-image">
                            <img src="{{ asset('assets/frontend/images/resource/13.jpg') }} "
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            <div class="service-1-read-more"><a href="javascript:void(0);"
                                    class="c_light ff_sec fw_bold fs_14 ls_1">We provide accurate and reliable property
                                    valuation for your needs.</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon"><i class="flaticon-measure"></i></div>
                        <a href="{{ route('survey') }}">
                            <h4 class="service-1-title fs_25">Surveying</h4>
                        </a>
                        <div class="service-1-image">
                            <img src="{{ asset('assets/frontend/images/resource/14.jpg') }} "
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            <div class="service-1-read-more"><a href="javascript:void(0);"
                                    class="c_light ff_sec fw_bold fs_14 ls_1">We provide Accurate land and building
                                    surveying for informed decision-making.</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon"><i class="flaticon-interior-design"></i></div>
                        <a href="{{ route('interior-design-company') }}">
                            <h4 class="service-1-title fs_25">Interior Works</h4>
                        </a>
                        <div class="service-1-image">
                            <img src="{{ asset('assets/frontend/images/resource/2.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy, interior designer in trichy">
                            <div class="service-1-read-more"><a href="javascript:void(0);"
                                    class="c_light ff_sec fw_bold fs_14 ls_1">Transform your Empty space with customized
                                    and innovative designs.</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon"><i class="flaticon-building-1"></i></div>
                        <a href="{{ route('approval') }}">
                            <h4 class="service-1-title fs_25">Approval</h4>
                        </a>
                        <div class="service-1-image">
                            <img src="{{ asset('assets/frontend/images/resource/4.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            <div class="service-1-read-more"><a href="javascript:void(0);"
                                    class="c_light ff_sec fw_bold fs_14 ls_1">Efficient building approval services for a
                                    hassle-free construction process.</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <div class="service-1-shape"></div>
                        <div class="service-1-icon"><i class="flaticon-newspaper"></i></div>
                        <a href="{{ route('quality_survey') }}">
                            <h4 class="service-1-title fs_25">Quantity Survey</h4>
                        </a>
                        <div class="service-1-image">
                            <img src="{{ asset('assets/frontend/images/resource/12.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            <div class="service-1-read-more"><a href="javascript:void(0);"
                                    class="c_light ff_sec fw_bold fs_14 ls_1">Ensure the on time completion in
                                    cost-efficiency in your construction project.</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- whychoose us -->
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
                                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Bigger, Better, Faster </h6>
                            <h2 class="c_light fs_45 fw_black mb_18">Leading Way In Civil <br> Construction</h2>
                            <p class="mb_20 fs_16 c_light p_relative">Bring to the table win-win survival strategies to
                                ensure
                                proactive domination. At the end of the day, going forward, a new normal that has evolved.
                            </p>
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
@endsection
