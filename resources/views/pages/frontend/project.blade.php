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
    <div class="banner-1-image-1 p_absolute b_0 r_0"><img src="{{ asset('assets/frontend/images/main-slider/image-2.png') }}" alt=""></div>
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

<!-- project -->
<section class="pt_110 pb_90">
    <div class="auto-container">
        <div class="d-flex justify-content-between align-items-end">
            <div class="mb_40">
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>our work</h6>
                <h2 class="fs_35 fw_black">K.K Nagar Project</h2>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <!--Filter-->
                <!-- <div class="filters alt">
						<ul class="filter-tabs filter-btns">
							<li class="filter active" data-role="button" data-filter=".all">All</li>
							<li class="filter" data-role="button" data-filter=".cat-1">Upcoming</li>
							<li class="filter" data-role="button" data-filter=".cat-2">Ongoing</li>
							<li class="filter" data-role="button" data-filter=".cat-3">Completed</li>
						</ul>
					</div> -->                
                <!--Sortable Galery-->

                <div class="sortable-masonry">
                    <div class="items-container row">
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/kknagar/1.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/kknagar/1.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">K.K Nagar Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/kknagar/2.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/kknagar/2.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">K.K Nagar Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/kknagar/3.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/kknagar/3.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">K.K Nagar Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/kknagar/4.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/kknagar/4.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">K.K Nagar Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="fs_35 fw_black mb_40">Gunaseelam Project</h4>
                <div class="sortable-masonry">
                    <div class="items-container row">
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/gunaseelam/1.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/gunaseelam/1.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Gunaseelam Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/gunaseelam/2.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/gunaseelam/2.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Gunaseelam Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/gunaseelam/3.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/gunaseelam/3.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Gunaseelam Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/gunaseelam/4.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/gunaseelam/4.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">Gunaseelam Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="fs_35 fw_black mb_40"> Mr. Sajith Project</h4>
                <div class="sortable-masonry">
                    <div class="items-container row">
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/sajith/1.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/sajith/1.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Mr. Sajith Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="fs_35 fw_black mb_40"> Vivekanandha Nagar Project</h4>
                <div class="sortable-masonry">
                    <div class="items-container row">
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/vivekanandha nagar/1.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/vivekanandha nagar/1.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Top View</p>
                                        <h4 class="project-1-title">Vivekanandha Nagar Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/vivekanandha nagar/2.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/vivekanandha nagar/2.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Vivekanandha Nagar Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/vivekanandha nagar/3.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/vivekanandha nagar/3.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Vivekanandha Nagar Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/vivekanandha nagar/4.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/vivekanandha nagar/4.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">Vivekanandha Nagar Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="fs_35 fw_black mb_40"> Office Interior Project</h4>
                <div class="sortable-masonry">
                    <div class="items-container row">
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/office interior/1.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/office interior/1.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Office Interior Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/office interior/2.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/office interior/2.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">Office Interior Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/office interior/3.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/office interior/3.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">Office Interior Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/office interior/4.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/office interior/4.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Office Interior Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="fs_35 fw_black mb_40"> Ramyas Hotel Project</h4>
                <div class="sortable-masonry">
                    <div class="items-container row">
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/ramyas hotel/1.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/ramyas hotel/1.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Top View</p>
                                        <h4 class="project-1-title">Ramyas Hotel Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/ramyas hotel/2.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/ramyas hotel/2.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Top View</p>
                                        <h4 class="project-1-title">Ramyas Hotel Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/ramyas hotel/3.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/ramyas hotel/3.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Side View</p>
                                        <h4 class="project-1-title">Ramyas Hotel Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/ramyas hotel/4.webp') }}" alt="">
                                    <div class="project-1-overlay">
                                        <a href="{{ asset('assets/frontend/images/project/ramyas hotel/4.webp') }}" class="project-1-icon" data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Front View</p>
                                        <h4 class="project-1-title">Ramyas Hotel Project</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="auto-container">
        <div class="d-flex justify-content-between align-items-end">
            <div class="mb_40">
                <h2 class="fs_45 fw_black">Explore Recent Project Video</h2>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sortable-masonry">
                    <div class="items-container row">
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/1.webp') }}" alt="">
                                    <div class="p_absolute r_30 b_30"><a href="https://youtu.be/uop7muARSno?si=abi7jxqP9UKBy85z" class="video-btn-1 alt ripple" data-fancybox="video-1" data-caption=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/2.webp') }}" alt="">
                                    <div class="p_absolute r_30 b_30"><a href="https://youtu.be/a0iPZXgrQf4?si=ospw_9S687BlrvcC" class="video-btn-1 alt ripple" data-fancybox="video-1" data-caption=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/3.webp') }}" alt="">
                                    <div class="p_absolute r_30 b_30"><a href="https://youtu.be/V-wG41gDY0Q?si=MxPeh5SXrk7mtcFf" class="video-btn-1 alt ripple" data-fancybox="video-1" data-caption=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/20.webp') }}" alt="">
                                    <div class="p_absolute r_30 b_30"><a href="https://youtu.be/11qWPK1gZds?si=LAT4wkvpchn2tlwA" class="video-btn-1 alt ripple" data-fancybox="video-1" data-caption=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item all cat-1 col-lg-3 col-md-6">
                            <div class="project-1-block alt">
                                <div class="project-1-image" style="height: 200px !important;">
                                    <img src="{{ asset('assets/frontend/images/project/89.webp') }}" alt="">
                                    <div class="p_absolute r_30 b_30"><a href="https://youtu.be/Tfb7K1-rdsw?si=ToePy5PT8zc84Wmg" class="video-btn-1 alt ripple" data-fancybox="video-1" data-caption=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</section>

@endsection