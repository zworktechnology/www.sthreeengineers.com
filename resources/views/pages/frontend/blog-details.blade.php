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
            <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Blog Details</h1>
            <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="ml_10 mr_10">/</li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</section>

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-9 pe-lg-5">
                <div>
                    <div class="blog-1-image"><img src="{{ asset('assets/frontend/images/blog/blog-12.jpg') }}" alt=""></div>
                    <div class="blog-1-lower-content-alt2 p_relative">
                        <div class="d-flex mb_15">
                            <p class="fs_22 fw_bold c_primary mr_40">22 Feb. 2022</p>
                            <p class="blog-1-post-meta">By : Admin <span class="ml_5 mr_5">/</span> Comments 2</p>
                        </div>
                        <h4 class="blog-1-title mb_15 fw_black fs_34 lh_35">How to hire a Contractor Home Renovation</h4>
                        <p class="mb_30">Our objective at homelane is to bring together our visitor's societies and spirits with our own, communicating enthusiasm and liberality in the food we share. Our objective at homelane is to bring together our visitor's societies and spirits with our own, communicating enthusiasm and liberality in the food we share. Our objective at homelane is to bring.</p>
                        <h4 class="blog-1-title mb_25 fs_32 fw_black lh_35">Two Column Text Sample</h4>
                        <div class="row mb_30">
                            <div class="col-lg-6">
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                            </div>
                            <div class="col-lg-6">
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                            </div>
                        </div>
                        <p class="mb_50">Here is main text quis nostrud exercitation ullamco laboris nisi here is itealic text ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <a href="#" class="td_underline">here is link</a> cupidatat non proident, sunt in culpa.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="sidebar">
                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required="">
                                <button type="submit"><span class="fal fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                    <!--Blog Category Widget-->
                    <div class="sidebar-widget sidebar-blog-category">
                        <div class="sidebar-title">
                            <h2>Categories</h2>
                        </div>
                        <ul class="cat-list">
                            <li><a href="#">Home Construction</a></li>
                            <li><a href="#">General Construction</a></li>
                            <li><a href="#">Roof Renovation</a></li>
                            <li><a href="#">Company Profile</a></li>
                            <li><a href="#">Constrcution Projects</a></li>
                            <li><a href="#">Constrcution Projects</a></li>
                            <li><a href="#">Roof Gutter</a></li>
                        </ul>
                    </div>
                    <!-- Popular Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h2>Recent news</h2>
                        </div>

                        <article class="post">
                            <figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/frontend/images/blog/blog-16.jpg') }}" alt=""></a></figure>
                            <div class="text"><a href="blog-detail.html">Know the secreat of buildnox Work ...</a></div>
                            <div class="post-info">22 Jan. 2022</div>
                        </article>

                        <article class="post">
                            <figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/frontend/images/blog/blog-17.jpg') }}" alt=""></a></figure>
                            <div class="text"><a href="blog-detail.html">Know the secreat of buildnox Work ...</a></div>
                            <div class="post-info">22 Nov. 2021</div>
                        </article>

                        <article class="post">
                            <figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/frontend/images/blog/blog-18.jpg') }}" alt=""></a></figure>
                            <div class="text"><a href="blog-detail.html">Know the secreat of buildnox Work ...</a></div>
                            <div class="post-info">22 Nov. 2021</div>
                        </article>

                        <article class="post">
                            <figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/frontend/images/blog/blog-19.jpg') }}" alt=""></a></figure>
                            <div class="text"><a href="blog-detail.html">Know the secreat of buildnox Work ...</a></div>
                            <div class="post-info">22 Nov. 2021</div>
                        </article>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>


@endsection