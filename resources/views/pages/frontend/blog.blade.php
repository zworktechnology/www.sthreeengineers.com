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
            <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Blog</h1>
            <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="ml_10 mr_10">/</li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">

            @foreach($data as $datas)
                <div class="col-lg-4">
                    <div class="blog-1-block mb_40 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                        <div class="blog-1-image hvr-img-zoom-1"><img src="{{ asset('assets/backend/blog/blog_image/' . $datas->blog_image) }}" alt=""></div>
                        <div class="blog-1-lower-content-alt p_relative">
                            <h4 class="blog-1-title mb_15 fs_34 lh_35">
                                <a href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}" style="word-spacing: 5px;">{{ $datas->title }}</a>
                            </h4>
                            <p style="text-align: justify;">{{ $datas->short_content }}</p>
                            <div class=""><a class="ff_sec fw_bold tt_u fs_14 ls_1 c_primary pr_30 p_relative z_1" href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}">continue reading</a></div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>


@endsection