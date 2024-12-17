<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="author" content="Zwork Technology">
    <meta name="description"
        content="Our Construction Company in Trichy creates homes filled with love, joy, and memories, transforming dreams into cherished realities for every family.">
    <meta name="keywords"
        content="building construction, valuation, interior works, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, Interior designer in trichy, Construction company in trichy, home interior design">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sthreeengineers.com/">
    <meta property="og:title" content="The Best Solution For Your All Construction Needs">
    <meta property="og:description"
        content="A construction company that specializes in safe, dependable, and economical construction. Excellent building services are what we offer.">
    <meta property="og:image"
        content="https://www.sthreeengineers.com/assets/frontend/images/resource/Building_Construction/2.jpg"
        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">

    <!-- Page Title -->
    <title>Sthree Engineers | The Key For All Your Construction Needs</title>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NTTZ597K');
    </script>

    <!-- Stylesheets -->
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">

    <!-- Responsive File -->
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">

    <!-- Color File -->
    <link href="{{ asset('assets/frontend/css/color.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2?family=Barlow:wght@400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">
    <meta name="google-site-verification" content="FDnTIW-R603CPgGZZssDsVNFWbObl20LqHwCrJrq2B8" />

    <style>
        /* Modal background */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        /* Modal content */
        .modal-content {
            margin: 10% auto;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Image inside modal */
        .modal-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>

</head>

<body>

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NTTZ597K" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

    <div class="page-wrapper">

        {{-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div> --}}

        <header class="main-header header-style-one">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container d-flex align-items-center justify-content-between">
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('index') }}"><img
                                        src="{{ asset('assets/frontend/images/logo-light.png') }}" alt=""
                                        style="height: 80px;"></a>
                            </div>
                        </div>
                        <div class="right-column d-flex align-items-center">
                            <div class="nav-outer">
                                <div class="mobile-nav-toggler"><img
                                        src="{{ asset('assets/frontend/images/icons/menu.svg') }}" alt=""></div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation">
                                            <li><a href="{{ route('index') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li class="dropdown"><a href="{{ route('service') }}">Services</a>
                                                <ul>
                                                    <li><a href="{{ route('construction') }}">Building Construction </a>
                                                    </li>
                                                    <li><a href="{{ route('project_management') }}">Project Management
                                                            (PMC)</a></li>
                                                    <li><a href="{{ route('valuation') }}">Valuation</a></li>
                                                    <li><a href="{{ route('survey') }}">Surveying</a></li>
                                                    <li><a href="{{ route('interior') }}">Interior Works</a></li>
                                                    <li><a href="{{ route('approval') }}">Approval</a></li>
                                                    <li><a href="{{ route('quality_survey') }}">Quantity Survey</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('blog') }}">Blog</a></li>
                                            <li><a href="{{ route('project') }}">Projects</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                            <div class="header-link-btn ml_30"><a
                                    href="https://api.whatsapp.com/send/?phone=%2B917871313987" target="_blank"
                                    class="btn-1 pt_10 pb_10 pl_30 pr_30 b_radius_23 ff_sec fw_bold tt_u fs_14 ls_1">Chat
                                    On Whatsapp<span></span></a></div>
                            <div class="sidemenu-nav-toggler mr_30 ml_30"><img
                                    src="{{ asset('assets/frontend/images/icons/menu.svg') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header dark-bg">
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="inner-container d-flex align-items-center justify-content-between">
                            <div class="logo-box">
                                <div class="logo"><a href="{{ route('index') }}"><img
                                            src="{{ asset('assets/frontend/images/logo-light.png') }}" alt=""
                                            style="height: 70px;"></a></div>
                            </div>
                            <div class="right-column d-flex align-items-center">
                                <div class="nav-outer">
                                    <div class="mobile-nav-toggler"><img
                                            src="{{ asset('assets/frontend/images/icons/menu.svg') }}" alt="">
                                    </div>
                                    <nav class="main-menu navbar-expand-md navbar-light">

                                    </nav>
                                </div>
                                <div class="header-link-btn ml_30"><a
                                        href="https://api.whatsapp.com/send/?phone=%2B917871313987" target="_blank"
                                        class="btn-1 pt_10 pb_10 pl_30 pr_30 b_radius_23 ff_sec fw_bold tt_u fs_14 ls_1">Chat
                                        On Whatsapp<span></span></a></div>
                                <div class="sidemenu-nav-toggler mr_30 ml_30"><img
                                        src="{{ asset('assets/frontend/images/icons/menu.svg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="fal fa-times"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ route('index') }}"><img
                                src="{{ asset('assets/frontend/images/logo-light.png') }}" alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="https://www.facebook.com/sthreeengineers" target="_blank"><span
                                        class="fab fa-facebook-square"></span></a></li>
                            <li><a href="https://www.instagram.com/sthreeengineers" target="_blank"><span
                                        class="fab fa-instagram"></span></a></li>
                            <li><a href="https://www.youtube.com/@sthreeengineers" target="_blank"><span
                                        class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>


        {{-- <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <img src="{{ asset('assets/frontend/images/aug15.png') }}" alt="Happy 78th Independence Day">
            </div>
        </div> --}}

        <section class="hidden-sidebar close-sidebar">
            <div class="wrapper-box">
                <div class="hidden-sidebar-close"><span class="fal fa-times"></span></div>
                <div class="logo"><a href="#"><img src="{{ asset('assets/frontend/images/logo-light.png') }}"
                            alt=""></a></div>
                <div class="content">
                    <div class="about-widget-two sidebar-widget">
                        <h3>The perfect solution for all your construction needs </h3>
                        <div class="text">Trustworthy, dependable, affordable and cost-effective building solutions with
                            19 years of experience in the industry. Build your high-rise or housing project with
                            confidence.</div>
                    </div>
                    <!-- Contact Widget -->
                    <div class="sidebar-contact-info mb_40">
                        <h4 class="fs_22 fw_medium mb_20">Conatct Us</h4>
                        <ul>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/icons/icon-7__mapmarker.png') }}"
                                            alt="">
                                    </div>
                                    <div class="text">
                                        <p><span class="theme-color">Registered Office:</span> 43F, 1st Floor,
                                            Pudukottai Main Road, Subramaniyapuram, Upstair Canara Bank ATM, Trichy,
                                            Tamilnadu, India - 620 020.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/icons/icon-7__mapmarker.png') }}"
                                            alt="">
                                    </div>
                                    <div class="text">
                                        <p><span class="theme-color">Branch Office:</span> 17/F, kamban Street, Attur
                                            Main Road, Perambalur, Tamilnadu, India - 621 212.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/icons/icon-10__clock.png') }}"
                                            alt="">
                                    </div>
                                    <div class="text">
                                        <p>Monday - Saturday (09.00 AM - 08.00 PM)</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/icons/icon-8__envelop.png') }}"
                                            alt="">
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:admin@sthreeengineers.com">admin@sthreeengineers.com</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/frontend/images/icons/icon-9__phone.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:+917871313987">(+91) 78713 13987</a></p>
                                    </div>
                                </div>
                            </li>

                            <div>
                                <ul class="footer-social-media mt_70">
                                    <li><a class="hvr-zoom-1 hvr-zoom-1-primary"
                                            href="https://www.facebook.com/sthreeengineers" target="_blank">
                                            <i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="hvr-zoom-1 hvr-zoom-1-primary"
                                            href="https://www.linkedin.com/company/sthreeengineers" target="_blank">
                                            <i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a class="hvr-zoom-1 hvr-zoom-1-primary"
                                            href="https://www.instagram.com/sthreeengineers" target="_blank">
                                            <i class="fab fa-instagram"></i></a></li>
                                    <li><a class="hvr-zoom-1 hvr-zoom-1-primary"
                                            href="https://www.youtube.com/@sthreeengineers" target="_blank">
                                            <i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>


        </section>

        <!-- banner -->
        <section class="banner-1-section pt_330 pb_120 bg_cover overflow-hidden"
            style="background-image: url(assets/frontend/images/main-slider/banner-1.jpg);">
            <div class="line-grid-wrap">
                <span class="line-grid-1"></span>
                <span class="line-grid-2"></span>
                <span class="line-grid-3"></span>
                <span class="line-grid-4"></span>
                <span class="line-grid-5"></span>
            </div>
            <div class="banner-1-image-1 p_absolute b_0 r_0"><img
                    src="{{ asset('assets/frontend/images/main-slider/image-123.png') }}"
                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
            </div>
            <!-- <div class="banner-1-image-2" data-parallax='{"x": -50}'><img src="assets/images/main-slider/image-4.png" alt=""></div>                 -->
            <div class="auto-container">
                <div class="p_relative ml_lg_100">
                    <h6 class="c_light tt_u fw_black ls_13 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1.5s">
                        Welcome to Sthree</h6>
                    <h1 class="c_light tt_u mb_30 fw_black fs_176 wow fadeInUp" data-wow-delay=".2s"
                        data-wow-duration="1.5s">ENGI<span class="text_stroke">NEERS</span></h1>
                    <p class="mb_40 fs_20 c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">A
                        company that specializes in safe, dependable, <br> and FIRST CLASS construction. Excellent <br>
                        building construction management services are<br> what we offer. </p>
                    <div class="link-btn tt_u pr_font fs_14 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1.5s">
                        <a href="{{ route('about') }}" class="c_light ff_sec fw_bold tt_u fs_14 ls_1">discorver more <i
                                class="ml_10 fs_20 v_middle flaticon-right-1 p_relative t_2"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- welcome -->
        <section class="dark-bg pb_110">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="image p_relative mb_30 d_iblock">
                            <img src="{{ asset('assets/frontend/images/resource/image-1.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            <!-- <div class="shape-1 p_absolute r_0 b_0"><img src="assets/images/shape/shape-1.png" alt=""></div>-->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mt_120">
                            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>welcome to Sthree Engineers
                                <h6>
                                    <h2 class="c_light fs_45 fw_black mb_40">Your Dream is Our Mission<br></h2>
                                    <p class="mb_30 fs_19  c_light">STHREE ENGINEERS is a trustworthy, dependable, and
                                        cost-effective building company. We provide the highest quality construction
                                        services. We have over 19 years of expertise in the building construction
                                        industry. If you want to create a high-rise or a housing project, you are in a
                                        perfect spot right now. </p>
                                    <p class="mb_50 fs_22 fw_medium c_light">More than 75+ Companies trusted us, Build
                                        Your Dream With What It really Cost. </p>
                                    <div class="author-box d-flex align-items-right"
                                        style="float:right; padding-right:20px;">
                                        <div class="ml_20" style="padding: 11px;">
                                            <p class="mb-0 fs_20 fw_sbold c_light">Lion. Er. M. Senthilnathan</p>
                                            <p class="mb_20 fs_18 c_light" style="float:right;">Founder</p>
                                        </div>
                                        <div class="image mb_30 mr_20"><img class="b_radius_40"
                                                src="{{ asset('assets/frontend/images/resource/authors.png') }}"></div>
                                    </div>
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

        <!-- services -->
        <section class="gray-bg pb_110 pt_100">
            <div class="auto-container">
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                        class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Services</h6>
                <h2 class="fw_black fs_45 mb_20">What we do</h2>
                <p class="mb_50 fs_18">Besides providing civil engineering services, we also provide
                    contractor services for building renovation, Interior works like modual kitchen and other dectrative
                    works as well as extensive range of building
                    services. Thus, we are a one stop solution for you to build your dream building at an
                    affordable price. </p>
                <div class="swiper-container four-item-carousel">
                    <div class="swiper-wrapper">
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-building"></i></div>
                                <a href="{{ route('construction') }}">
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
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-guarantee"></i></div>
                                <a href="{{ route('project_management') }}">
                                    <h4 class="service-1-title fs_23">Project Management</h4>
                                </a>
                                <div class="service-1-image">
                                    <img src="{{ asset('assets/frontend/images/resource/5.jpg') }}"
                                        alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    <div class="service-1-read-more"><a href="javascript:void(0);"
                                            class="c_light ff_sec fw_bold fs_14 ls_1">
                                            <span class="text_j">
                                                We efficiently manage every aspect of &nbsp;your construction project.
                                            </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-interior-design"></i></div>
                                <a href="{{ route('interior') }}">
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
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-measure"></i></div>
                                <a href="{{ route('survey') }}">
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
                        <!-- Slide Item -->
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
                        <!-- Slide Item -->
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
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="service-1-block">
                                <div class="service-1-shape"></div>
                                <div class="service-1-icon"><i class="flaticon-newspaper"></i></div>
                                <a href="{{ route('quality_survey') }}">
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

        <!-- whychoose us -->
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
                                cost-effective construction services that consistently exceed our clients' expectations.
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
                                    <h5 class="fs_14 fw_bold tt_u c_primary mt_10 mb_10">call for contractor now</h5>
                                    <div class="fs_30 fw_bold c_dark"><a class="c_dark" href="tel:+917871313987">(+91)
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
                                        class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Bigger, Better, Faster
                                </h6>
                                <h2 class="c_light fs_45 fw_black mb_20">Leading Way In Civil <br> Construction</h2>
                                <p class="mb_20 fs_16 c_light p_relative">Bring to the table win-win survival strategies
                                    to ensure
                                    proactive domination. At the end of the day, going forward, a new normal that has
                                    evolved.</p>
                                <a href="{{ route('contact') }}"
                                    class="c_light ff_sec fw_bold tt_u fs_14 ls_1 p_relative">request
                                    a call back <i class="ml_10 fs_20 v_middle flaticon-right-1"></i></a>
                                <div class="p_absolute r_0 t__35 p_33 bg_primary"><a href="https://youtu.be/uop7muARSno"
                                        class="video-btn-1 ripple" data-fancybox="video-1" data-caption=""><i
                                            class="flaticon-play-button"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- project -->
        <section class="pt_110">
            <div class="h_576 p_absolute t_0 l_0 r_0 bg_dark"></div>
            <div class="auto-container">
                <div class="d-flex flex-wrap justify-content-lg-between">
                    <div>
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>our work</h6>
                        <h2 class="c_light fs_45 fw_black mb_40">Explore Recent Projects</h2>
                    </div>
                    <div class="link-btn mb_30"><a href="{{ route('project') }}"
                            class="btn-1 pt_18 pb_15 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1">view all
                            projects <i class="flaticon-fast-forward"></i> <span></span></a></div>
                </div>
            </div>
            <div class="auto-container full-width ps-4 pe-4">
                <div class="swiper-container four-item-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-1-column wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                <div class="project-1-block">
                                    <div class="project-1-image" style="height: 375px !important;">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/5.webp') }}"
                                            alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-1-column wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                                <div class="project-1-block">
                                    <div class="project-1-image" style="height: 375px !important;">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/6.webp') }}"
                                            alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div class="project-1-column wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                                <div class="project-1-block">
                                    <div class="project-1-image" style="height: 375px !important;">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/3.webp') }}"
                                            alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="project-1-bottom-title text_stroke" data-parallax='{"x": -50}'>&nbsp;&nbsp;STHREE ENGINEERS</h1>
        </section>

        <!-- about -->
        <section class="pb_90">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="image mb_30"><img src="{{ asset('assets/frontend/images/resource/service-8.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>About company</h6>
                        <h2 class="fw_black fs_45 mb_45">We Provide the Guaranteed <br> Quality in Construction</h2>
                        <p class="mb_45">Turning Dreams into Reality with Exceptional Construction Solutions</p>
                        <p class="mb_45">We turn dreams into reality with exceptional construction solutions. With over
                            19 years of expertise, we deliver safe, reliable, quality and cost-effective projects that
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

        <!-- testimonial -->
        <section class="pt_120 pb_90 bg_cover" style="background-image:url(assets/frontend/images/background/bg-3.jpg)">
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
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                            <div class="testimonials-1-desc">Today best experience for my new House
                                                construction Discussion & ideas And
                                                planning how to plan quality construction and perfect solutions for all
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
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                            <div class="testimonials-1-desc">The team at Sthree Engineering was a
                                                pleasure to work with. Their open
                                                communication and willingness to address concerns made for a stress-free
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
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                            <div class="testimonials-1-desc">Their team was fantastic to work with. They
                                                listened to my ideas and
                                                preferences, and their attention to detail was commendable. The quality
                                                of
                                                their construction work was outstanding, and they completed the project
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
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                            <div class="testimonials-1-desc">Professionally Good in work, completion of
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
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
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

        <!-- brand logo -->
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
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-1.png') }}" alt=""></div>
                    </div>
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-2.png') }}" alt=""></div>
                    </div>
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-4.png') }}" alt=""></div>
                    </div>
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-3.png') }}" alt=""></div>
                    </div>
                    <div class="col-xl-2-5 col-lg-4 col-md-4">
                        <div class="client-logo-1-image mb_20"><img
                                src="{{ asset('assets/frontend/images/clients-logo/brand-logo-4.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- map -->
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
                    <p class="c_light mb_25">43F, 1st Floor, Pudukkottai Main Road, Subramaniyapuram, Upstairs Canara
                        Bank ATM, Trichy, Tamilnadu, India - 620 020.</p>
                    <p class="c_light">Phone : <a href="tel:+917871313987">(+91) 78713 13987</a> </p>
                </div>
            </div>
        </section>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user visits the page, open the modal
            window.onload = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        @include('components.guest.footer')
