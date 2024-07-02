@extends('layouts.guest')

@section('content')

<!-- banner -->
<section class="banner-1-section pt_240 pb_140 bg_cover overflow-hidden" style="background-image: url(assets/frontend/images/background/bg-7.jpg);">
    <div class="line-grid-wrap">
        <span class="line-grid-1"></span>
        <span class="line-grid-2"></span>
        <span class="line-grid-3"></span>
        <span class="line-grid-4"></span>
        <span class="line-grid-5"></span>
    </div>
    <div class="banner-1-image-1 p_absolute b_0 r_0"><img src="{{ asset('assets/frontend/images/main-slider/image-2.png') }}" alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy"></div>
    <div class="auto-container">
        <div class="p_relative text-center">
            <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Our
                Projects</h1>
            <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
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
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>our work</h6>
                <h2 class="fs_45 fw_black">Explore Our Projects</h2>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sortable-masonry">
                    <div class="items-container row" style="position: relative; height: 1065px;">
                        <div class="masonry-item all cat-1 col-lg-4 col-md-6" style="position: absolute; left: 0px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/1.jpeg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/1.jpeg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Mr.Logan Athan, G+3 Style</p>
                                        <h4 class="project-1-title">New Residential House, 4500sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/3.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/3.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Mr.Beerahamed, Vivekanand Nagar</p>
                                        <h4 class="project-1-title">House Renovation, 1200sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/4.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/4.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Mr.Beerahamed, Vivekanand Nagar</p>
                                        <h4 class="project-1-title">House Renovation, 1200sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/7.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/7.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Mr.Aneez, G+1 Style</p>
                                        <h4 class="project-1-title">New Residential House, 1500sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/8.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/8.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Mr.Aneez, G+1 Style</p>
                                        <h4 class="project-1-title">New Residential House, 1500sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/6.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/6.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Mr.?, Palpannai</p>
                                        <h4 class="project-1-title">Residential House, ?sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/5.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/5.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Mr.?, Palpannai</p>
                                        <h4 class="project-1-title">Residential House, ?sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/9.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/9.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Mr.?, Goa</p>
                                        <h4 class="project-1-title">Hospital, ?sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/10.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/10.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">M/s.?, Goa</p>
                                        <h4 class="project-1-title">Hospital, ?sqft</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-2 col-lg-4 col-md-6" style="position: absolute; left: 400px; top: 0px;">
                            <div class="project-1-block alt">
                                <div class="project-1-image">
                                    <img src="{{ asset('assets/frontend/images/project/new/11.jpg') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/new/11.jpg') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">M/s.?, Goa</p>
                                        <h4 class="project-1-title">Hospital, ?sqft</h4>
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
