{{-- @extends('layouts.guest')

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
                <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Our
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
                            <div class="masonry-item all cat-1 col-lg-4 col-md-6"
                                style="position: absolute; left: 0px; top: 0px;">
                                <div class="project-1-block alt">
                                    <div class="project-1-image">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/11.webp') }}"
                                            alt="">
                                        <div class="project-1-overlay">
                                            <a href="{{ asset('assets/frontend/images/project/project_images/11.webp') }}"
                                                class="project-1-icon" data-fancybox="project-1"><i
                                                    class="flaticon-zoom"></i></a>

                                        </div>
                                        <div class="project-1-content">
                                            <p class="project-1-cat">Mr.Gobi, Trichy</p>
                                            <h4 class="project-1-title">Residential House, 8,500sqft (3 Floors)</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                style="position: absolute; left: 400px; top: 0px;">
                                <div class="project-1-block alt">
                                    <div class="project-1-image">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/6.webp') }}"
                                            alt="">
                                        <div class="project-1-overlay">
                                            <a href="{{ asset('assets/frontend/images/project/project_images/6.webp') }}"
                                                class="project-1-icon" data-fancybox="project-1"><i
                                                    class="flaticon-zoom"></i></a>

                                        </div>
                                        <div class="project-1-content">
                                            <p class="project-1-cat">Mr.Ganeshan, Vadugakudi - Thanjavur</p>
                                            <h4 class="project-1-title">Commercial & Residential House, 1,250sqft</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                style="position: absolute; left: 400px; top: 0px;">
                                <div class="project-1-block alt">
                                    <div class="project-1-image">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/9.webp') }}"
                                            alt="">
                                        <div class="project-1-overlay">
                                            <a href="{{ asset('assets/frontend/images/project/project_images/9.webp') }}"
                                                class="project-1-icon" data-fancybox="project-1"><i
                                                    class="flaticon-zoom"></i></a>

                                        </div>
                                        <div class="project-1-content">
                                            <p class="project-1-cat">Mr.Gobi, Trichy</p>
                                            <h4 class="project-1-title">Interior</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                style="position: absolute; left: 400px; top: 0px;">
                                <div class="project-1-block alt">
                                    <div class="project-1-image">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/10.webp') }}"
                                            alt="">
                                        <div class="project-1-overlay">
                                            <a href="{{ asset('assets/frontend/images/project/project_images/10.webp') }}"
                                                class="project-1-icon" data-fancybox="project-1"><i
                                                    class="flaticon-zoom"></i></a>

                                        </div>
                                        <div class="project-1-content">
                                            <p class="project-1-cat">Mr.Chandran, Karumandapam - Trichy</p>
                                            <h4 class="project-1-title">Residential House, 1,200sqft</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                style="position: absolute; left: 400px; top: 0px;">
                                <div class="project-1-block alt">
                                    <div class="project-1-image">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/12.webp') }}"
                                            alt="">
                                        <div class="project-1-overlay">
                                            <a href="{{ asset('assets/frontend/images/project/project_images/12.webp') }}"
                                                class="project-1-icon" data-fancybox="project-1"><i
                                                    class="flaticon-zoom"></i></a>

                                        </div>
                                        <div class="project-1-content">
                                            <p class="project-1-cat">M/s.Philomenal, <br> Dheeran Nagar - Trichy</p>
                                            <h4 class="project-1-title">House Renovation, 2,000sqft</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                style="position: absolute; left: 400px; top: 0px;">
                                <div class="project-1-block alt">
                                    <div class="project-1-image">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/3.webp') }}"
                                            alt="">
                                        <div class="project-1-overlay">
                                            <a href="{{ asset('aassets/frontend/images/project/project_images/3.webp') }}"
                                                class="project-1-icon" data-fancybox="project-1"><i
                                                    class="flaticon-zoom"></i></a>

                                        </div>
                                        <div class="project-1-content">
                                            <p class="project-1-cat">Mr.Pandiyan, Ariyamangalam - Trichy</p>
                                            <h4 class="project-1-title">Residential House, 1,200sqft</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                style="position: absolute; left: 400px; top: 0px;">
                                <div class="project-1-block alt">
                                    <div class="project-1-image">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/1.webp') }}"
                                            alt="">
                                        <div class="project-1-overlay">
                                            <a href="{{ asset('assets/frontend/images/project/project_images/1.webp') }}"
                                                class="project-1-icon" data-fancybox="project-1"><i
                                                    class="flaticon-zoom"></i></a>

                                        </div>
                                        <div class="project-1-content">
                                            <p class="project-1-cat">Mr.Anish, K.K Nagar - Trichy</p>
                                            <h4 class="project-1-title">Residential House, 1,100sqft (1st Floor)</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="masonry-item all cat-2 col-lg-4 col-md-6"
                                style="position: absolute; left: 400px; top: 0px;">
                                <div class="project-1-block alt">
                                    <div class="project-1-image">
                                        <img src="{{ asset('assets/frontend/images/project/project_images/2.webp') }}"
                                            alt="">
                                        <div class="project-1-overlay">
                                            <a href="{{ asset('assets/frontend/images/project/project_images/2.webp') }}"
                                                class="project-1-icon" data-fancybox="project-1"><i
                                                    class="flaticon-zoom"></i></a>

                                        </div>
                                        <div class="project-1-content">
                                            <p class="project-1-cat">Mr.Mohammed Siraj, <br>Big Bazaar Street - Trichy</p>
                                            <h4 class="project-1-title">Commercial & Residential House, 1200sqft</h4>
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
@endsection --}}
