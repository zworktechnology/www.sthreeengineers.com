<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="author" content="Zwork Technology">
    <meta name="robots" content="noindex, follow">
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
            style="background-image: url(assets/frontend/images/background/bg-4.jpg);">
            <div class="line-grid-wrap">
                <span class="line-grid-1"></span>
                <span class="line-grid-2"></span>
                <span class="line-grid-3"></span>
                <span class="line-grid-4"></span>
                <span class="line-grid-5"></span>
            </div>
            <div class="banner-1-image-1 p_absolute b_0 r_0"><img
                    src="{{ asset('assets/frontend/images/resource/building3.png') }}" alt=""></div>
            <div class="auto-container">
                <div class="p_relative text-center">
                    <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        Home Interior Designer</h1>
                    <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s"
                        data-wow-duration="1.5s">
                        <li><a href="{{ route('index') }}">Home</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="projectdetails-1-section pt_70 pb_90">
            <div class="container">

                <div class="sec-title-area mb_10">
                    <div class="row ">
                        <p class="mb_30">
                            At Sthree Engineers, we take pride in transforming houses into dream homes through our
                            expert home interior design services.
                            As your dedicated home <a href="{{ route('interior-works') }}" style="color: blue"> interior
                                designer </a>, we bring creativity, functionality, and style together to create spaces
                            that truly reflect your personality and lifestyle.
                        </p>
                        <div class="col-12 text-center mb_30">
                            <img src="{{ asset('assets/frontend/images/gallery/gallery-13.webp') }}"
                                style="width: 750px;" alt="interior design">
                        </div>
                    </div>
                </div>

                <h4 class="fw_bold fs_28 mb_20">Our Home Interior Design Services</h4>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="mb_30">
                            <p>
                                <b>Personalized Consultation :</b>
                                Our journey begins with a personalized consultation where we delve into your vision,
                                preferences, and lifestyle. We pay meticulous attention to every detail to ensure that
                                the final design aligns perfectly with your aspirations.
                            </p>
                            <p>
                                <b>Space Planning and Layout :</b>
                                Efficient space planning is crucial for creating a harmonious home environment. Our home
                                interior designers excel in optimizing space utilization, ensuring that each room is not
                                only aesthetically pleasing but also functional and practical.
                            </p>
                            <p>
                                <b>Customized Furniture and Fixtures :</b>
                                Elevate your home with bespoke furniture and fixtures that are tailored to your taste.
                                Our home interior designer team collaborates with skilled craftsmen to bring your unique
                                design ideas to life, creating one-of-a-kind pieces that enhance the overall ambiance of
                                your home.
                            </p>
                            <p>
                                <b>Color Palette and Material Selection :</b>
                                Choosing the right color palette and materials is fundamental to achieving a cohesive
                                design. Our <a href="{{ route('index') }}" style="color: blue"> experienced home
                                    interior </a> designers guide you through the selection process, considering factors
                                such as durability, aesthetics, and personal preferences.
                            </p>
                            <p>
                                <b>Lighting Design :</b>
                                Lighting can significantly impact the mood and atmosphere of a space. Our home interior
                                designer team carefully plans and implements lighting solutions that enhance the beauty
                                of your home, creating a perfect balance between functionality and ambiance.
                            </p>
                        </div>
                    </div>
                    <div class="col-5 text-center mb_20" style="width: 325px;">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-14.webp') }}" class="mt_50 ml_20"
                            style="width: 900px; height: 500px;" alt="interior design work">
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 text-center mt_30" style="width: 350px;">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-15.webp') }}" style="width: 350px;"
                            class="mt_10" alt="interior designer">
                    </div>
                    <div class="col-md-7">
                        <h4 class="fw_bold fs_28 mb_20 mt_20">Why Choose Sthree Engineers?</h4>
                        <p>
                            <b>Expertise :</b>
                            Our team of seasoned home interior designers brings a wealth of experience and creativity to
                            every project.
                        </p>
                        <p>
                            <b>Client-Centric Approach : </b>
                            We prioritize your vision and preferences, ensuring that the final design exceeds your
                            expectations.
                        </p>
                        <p>
                            <b>Quality Craftsmanship :</b>
                            From furniture to fixtures, we collaborate with skilled artisans to deliver high-quality,
                            custom-made pieces.
                        </p>
                        <p>
                            <b>Attention to Detail :</b>
                            It's the little details that make a big difference. Our meticulous attention to detail sets
                            us apart as your trusted home interior designer.
                        </p>
                    </div>

                </div>

                <h4 class="fw_bold fs_28 mt_30 mb_10">Contact Us</h4>
                <p>
                    Transform your home into a masterpiece with Us, where innovative design meets unparalleled
                    craftsmanship. Contact us today to <a href="{{ route('contact') }}" style="color: blue"> schedule
                        your consultation </a> a dedicated home interior designer who will turn your dream home into a
                    reality.
                </p>
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-16.webp') }}" style="width: 500px;"
                            alt="home interior designer">
                    </div>
                </div>
            </div>
        </section>

        @include('pages.frontend.layouts.footer')

        @include('pages.frontend.layouts.script')

        @include('pages.frontend.layouts.backtotop')

    </div>

</body>

</html>
