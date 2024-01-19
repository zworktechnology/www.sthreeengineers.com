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
                    <div class="blog-1-image"><img src="{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}" alt=""></div>
                    <div class="blog-1-lower-content-alt2 p_relative">
                        <div class="d-flex mb_15">
                            <p class="fs_22 fw_bold c_primary mr_40">{{ date('d M Y',strtotime($data->blog_date)) }}</p>
                            <p class="blog-1-post-meta"> {{ $data->writer_name }} </p>
                        </div>
                        <h4 class="blog-1-title mb_15 fw_black fs_34 lh_35">{{ $data->title }}</h4>
                        <p class="mb_30">{!! $data->blog_content !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="sidebar">
                    <!--Blog Category Widget-->
                    <div class="sidebar-widget sidebar-blog-category">
                        <div class="sidebar-title">
                            <h2>Categories</h2>
                        </div>
                        <ul class="cat-list">
                            @foreach($masterblogdata as $master)
                            <li><a href="#">{{ $master->master_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Popular Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h2>Recent news</h2>
                        </div>

                        <article class="post">
                            <figure class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}" alt=""></a></figure>
                            <div class="text"><a href="{{ route('read-blog', ['title' => $data->slug_url, 'id' => $data->random_id]) }}">{{ $data->title }}</a></div>
                            <div class="post-info">{{ $data->blog_date }}</div>
                        </article>

                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>


@endsection
