@extends('layouts.guest')

@section('content')
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
            <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Privacy
                Policy</h1>
            <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s"
                data-wow-duration="1.5s">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="ml_10 mr_10">/</li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</section>

<!-- About -->
<section class="pt_160 pb_90">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="p_relative">
                    <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                            class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Privacy Policy</h6>
                    <p class="mb_30 fs_20">Sthree Engineers values your privacy and is committed to protecting your
                        personal information. This policy explains how we collect, use, and safeguard your data when you
                        interact with our website.</p>
                    <p class="mb_50 fs_18"><b>Data Collection</b></br>
                        We collect personal information such as your name, contact details, and project requirements
                        when you fill out forms or inquire about our services.</p>
                    <p class="mb_50 fs_18"><b>Usage of Information</b></br>
                        The information collected is used to respond to your inquiries, provide construction services,
                        and improve our offerings.</p>
                    <p class="mb_50 fs_18"><b>Data Protection</b></br>
                        We implement secure systems to protect your data from unauthorized access, ensuring its
                        confidentiality and integrity.</p>
                    <p class="mb_50 fs_18"><b>Third-Party Sharing</b></br>
                        We do not share your information with third parties unless required to fulfill your requests or
                        comply with legal obligations.</p>
                    <p class="mb_50 fs_18"><b>Cookies</b></br>
                        Our website uses cookies to enhance user experience and analyze website traffic. You may choose
                        to disable cookies through your browser settings.</p>
                    <p class="mb_50 fs_18"><b>Your Rights</b></br>
                        You have the right to access, update, or request the deletion of your personal information.
                        Contact us for any concerns regarding your data.</p>
                    <p class="mb_50 fs_18"><b>Updates to Policy</b></br>
                        This policy may be updated periodically. Please review it regularly to stay informed.</p>
                    <p class="mb_50 fs_18">For questions or more information, contact us at +91 78713 13987</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
