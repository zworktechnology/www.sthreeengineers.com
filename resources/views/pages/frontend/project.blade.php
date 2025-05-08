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
                    src="{{ asset('assets/frontend/images/main-slider/image-2.png') }}"
                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
            </div>
            <div class="auto-container">
                <div class="p_relative text-center">
                    <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        Our
                        Projects</h1>
                    <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s"
                        data-wow-duration="1.5s">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="ml_10 mr_10">/</li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="pt_110 pb_90">
            <div class="auto-container">
                <div class="d-flex justify-content-between align-items-end">
                    <div class="mb_40">
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>our work</h6>
                        <h2 class="fs_45 fw_black">Explore Our Projects</h2>
                    </div>
                </div>
            </div>
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sortable-masonry">
                            <div class="items-container row" style="position: relative; height: 1065px;">
                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <!-- Video Element -->
                                            <video autoplay muted loop playsinline controls
                                                style="width: 100%; height: auto; border-radius: 10px;">
                                                <source
                                                    src="{{ asset('assets/frontend/images/project/project_images/1.mp4') }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>

                                            <!-- Overlay with video popup -->
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/1.mp4') }}"
                                                    class="project-1-icon" data-fancybox="video-gallery">
                                                    <i class="flaticon-zoom"></i>
                                                </a>
                                            </div>

                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mrs. Sudha Sobana, <br>Cantonment - Trichy
                                                </p>
                                                <h4 class="project-1-title">Room Interior, 149sqft</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/14.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/14.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr.Anbalagan, <br> Subramaniyapuram -
                                                    Trichy</p>
                                                <h4 class="project-1-title">Interior</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/13.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/13.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr.Anbalagan, <br> Subramaniyapuram -
                                                    Trichy</p>
                                                <h4 class="project-1-title">Residential House, 1,450sqft (2nd Floor)
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/21.jpg') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/13.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr.Anbalagan, <br> Subramaniyapuram -
                                                    Trichy</p>
                                                <h4 class="project-1-title">Residential House, 1,450sqft (2nd Floor)
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/15.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/15.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr.Anbalagan,<br> Subramaniyapuram - Trichy
                                                </p>
                                                <h4 class="project-1-title">Interior</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/5.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/5.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr.Jerison, Dalmiapuram - Ariyalur</p>
                                                <h4 class="project-1-title">Residential House, 1,025sqft</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/17.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/17.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr.Beerahamed, MK Kottai - Trichy</p>
                                                <h4 class="project-1-title">House Renovation, 1200sqft</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/4.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/4.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr.Ram Kumar, Thirumanur - Ariyalur</p>
                                                <h4 class="project-1-title">Residential House, 1,750sqft</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/18.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/18.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr. Mansoor, Kattumanam - E - Trade
                                                    <br>Ariyamangalam - Trichy
                                                </p>
                                                <h4 class="project-1-title">Office interior, 900sqft</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/19.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/18.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr. Mansoor, Kattumanam - E - Trade
                                                    <br>Ariyamangalam - Trichy
                                                </p>
                                                <h4 class="project-1-title">Office interior, 900sqft</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                    style="position: absolute; left: 400px; top: 0px;">
                                    <div class="project-1-block alt">
                                        <div class="project-1-image">
                                            <img src="{{ asset('assets/frontend/images/project/project_images/20.webp') }}"
                                                alt="">
                                            <div class="project-1-overlay">
                                                <a href="{{ asset('assets/frontend/images/project/project_images/18.webp') }}"
                                                    class="project-1-icon" data-fancybox="project-1"><i
                                                        class="flaticon-zoom"></i></a>

                                            </div>
                                            <div class="project-1-content">
                                                <p class="project-1-cat">Mr. Mansoor, Kattumanam - E - Trade
                                                    <br>Ariyamangalam - Trichy
                                                </p>
                                                <h4 class="project-1-title">Office interior, 900sqft</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-wrapper pagination-wrapper-left">
                    <ul class="pg-pagination">
                        <li class="active"><a href="{{ route('project') }}">1</a></li>
                        <li><a href="{{ route('project2') }}">2</a></li>
                    </ul>
                </div>
            </div>


        </section>

        @include('pages.frontend.layouts.footer')

        @include('pages.frontend.layouts.script')

        @include('pages.frontend.layouts.backtotop')

    </div>

</body>

</html>
