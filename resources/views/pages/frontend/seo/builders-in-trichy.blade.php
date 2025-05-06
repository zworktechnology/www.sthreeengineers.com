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
            style="background-image: url(assets/frontend/images/background/bg-4.jpg);">
            <div class="line-grid-wrap">
                <span class="line-grid-1"></span>
                <span class="line-grid-2"></span>
                <span class="line-grid-3"></span>
                <span class="line-grid-4"></span>
                <span class="line-grid-5"></span>
            </div>
            <div class="banner-1-image-1 p_absolute b_0 r_0"><img
                    src="{{ asset('assets/frontend/images/resource/building3.png') }}" alt="">
            </div>
            <div class="auto-container">
                <div class="p_relative text-center">
                    <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        Builders
                        In Trichy</h1>
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
                            We take pride in being the leading builders in Trichy.
                            With a legacy of excellence spanning years, we bring innovation, reliability, and quality
                            craftsmanship to every project we undertake.
                        </p>
                        <div class="col-12 text-center mb_30">
                            <img src="{{ asset('assets/frontend/images/gallery/gallery-50.webp') }}"
                                style="width: 750px;" alt="builder near me">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="projectdetails-1-text mb_30">
                            <h5>About Us</h5>
                            <p>
                                Sthree Engineers is a renowned name in the construction industry, known for our
                                unwavering commitment to excellence.
                                As builders in Trichy, we specialize in a <a href="{{ route('building-construction') }}"
                                    style="color: blue"> wide range of construction </a> projects, catering to diverse
                                sectors with precision and expertise.
                            </p>
                        </div>
                    </div>
                </div>

                <h4 class="fw_bold fs_28 mb_20">Our Services</h4>
                <div class="projectdetails-1-text mb_30">
                    <p> As your trusted builders in Trichy, we offer an extensive array of services tailored to meet the
                        unique needs of our clients:</p>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="mb_30">
                            <p>
                                <b>Residential Buildings :</b>
                                From custom homes to residential complexes, we specialize in creating living spaces that
                                reflect your style and comfort.
                            </p>
                            <p>
                                <b>Commercial Buildings :</b>
                                Whether it's office buildings, retail spaces, or commercial complexes, we have the
                                expertise to bring your commercial vision to life.
                            </p>
                            <p>
                                <b>Industrial Construction :</b>
                                Our proficiency extends to industrial projects, providing comprehensive solutions for
                                factories, warehouses, and manufacturing facilities.
                            </p>
                            <p>
                                <b>Institutional Buildings :</b>
                                We have the capabilities to construct institutional buildings such as schools, colleges,
                                and healthcare facilities, fostering environments conducive to growth and development.
                            </p>
                            <p>
                                <b>Religious Buildings :</b>
                                Entrust us with the construction of religious structures, ensuring the sanctity and
                                architectural integrity of your sacred spaces.
                            </p>
                            <p>
                                <b>Roads and Bridges :</b>
                                Contributing to the infrastructure development of Trichy, we specialize in the
                                construction of roads, bridges, and transportation networks.
                            </p>
                        </div>
                    </div>
                    <div class="col-5 text-center mb_20" style="width: 325px;">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-48.webp') }}" class="mt_50 ml_20"
                            style="width: 800px;" alt="building plan approval">
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 text-center mt_30" style="width: 350px;">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-49.webp') }}" style="width: 350px;"
                            class="mt_20" alt="building contractor">
                    </div>
                    <div class="col-7">
                        <h4 class="fw_bold fs_28 mb_20 mt_20">Why Choose Sthree Engineers?</h4>
                        <p>
                            <b>Exceptional Quality :</b>
                            As <a href="{{ route('index') }}" style="color: blue">leading builders in Trichy </a>, we
                            uphold the highest standards of quality in every project we undertake, ensuring longevity
                            and durability.
                        </p>
                        <p>
                            <b>Client-Centric Approach : </b>
                            We prioritize client satisfaction, working closely with our clients to understand their
                            needs and deliver solutions that exceed expectations.
                        </p>
                        <p>
                            <b>Innovation and Efficiency :</b>
                            Leveraging the latest technologies and construction practices, we optimize efficiency
                            without compromising on quality, ensuring timely completion of projects.
                        </p>
                        <p>
                            <b>Proven Track Record :</b>
                            With a portfolio of successful projects and satisfied clients, we have earned a reputation
                            as the builders in Trichy you can trust.
                        </p>
                    </div>

                </div>

                <h4 class="fw_bold fs_28 mt_30 mb_10">Contact Us</h4>
                <p>
                    Ready to embark on your next construction project? Get in touch with us today to <a
                        href="{{ route('contact') }}" style="color: blue"> discuss your requirements </a> and experience
                    the unparalleled craftsmanship and professionalism that sets Sthree Engineers apart as the premier
                    builders in Trichy.
                </p>
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-47.webp') }}" style="width: 500px;"
                            alt="builders in trichy">
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

