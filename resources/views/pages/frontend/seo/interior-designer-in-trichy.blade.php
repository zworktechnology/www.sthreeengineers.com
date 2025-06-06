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
                    src="{{ asset('assets/frontend/images/resource/building3.png') }}" alt=""></div>
            <div class="auto-container">
                <div class="p_relative text-center">
                    <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        Interior
                        Designer In Trichy</h1>
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
                            Are you seeking expert interior designers in Trichy to transform your space? Look no further
                            than Sthree Engineers.
                            Our dedicated interior design team is committed to bringing your vision to life with
                            creativity, precision, and flair.
                        </p>
                        <div class="col-12 text-center mb_30">
                            <img src="{{ asset('assets/frontend/images/gallery/gallery-9.webp') }}"
                                style="width: 750px;" alt="interior design">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="projectdetails-1-text mb_30">
                            <h5>About Us</h5>
                            <p>
                                Sthree Engineers is more than just a construction company - we're your trusted partners
                                in design excellence.
                                With a specialized interior designer in Trichy team at your service,<a
                                    href="{{ route('service') }}" style="color: blue"> we offer comprehensive solutions
                                </a> for all your interior design needs.
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
                    <div class="col-lg-7">
                        <div class="mb_30">
                            <p>
                                <b>Design :</b>
                                Our interior designer in Trichy team brings innovation and expertise to every project,
                                crafting bespoke designs tailored to your preferences and lifestyle.
                            </p>
                            <p>
                                <b>Execution :</b>
                                From concept to completion, our skilled craftsmen ensure flawless execution, bringing
                                your vision to reality with meticulous attention to detail.
                            </p>
                            <p>
                                <b>Consulting :</b>
                                Need guidance on design decisions? Our experienced interior designer in Trichy team
                                provides expert consulting services, helping you make informed choices every step of the
                                way.
                            </p>
                            <p>
                                <b>Site Coordination :</b>
                                We understand the importance of seamless coordination during the construction process.
                                Our dedicated site coordination team ensures smooth workflow and timely project
                                delivery.
                            </p>
                        </div>
                    </div>
                    <div class="col-5 text-center mb_20" style="width: 325px;">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-10.webp') }}" class="mt_50 ml_20"
                            style="width: 800px;" alt="interior designer">
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 text-center mt_30" style="width: 350px;">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-11.webp') }}" style="width: 350px;"
                            class="mt_20" alt="interior designer in trichy">
                    </div>
                    <div class="col-lg-7">
                        <h4 class="fw_bold fs_28 mb_20 mt_20">Why Choose Sthree Engineers?</h4>
                        <p>
                            <b>Expertise :</b>
                            With a highly skilled interior designer in Trichy team, we deliver unparalleled design
                            solutions tailored to your needs.
                        </p>
                        <p>
                            <b>Quality : </b>
                            We are committed to excellence in every aspect of our work, ensuring superior quality and
                            craftsmanship in every <a href="{{ route('project') }}" style="color: blue">project</a>.
                        </p>
                        <p>
                            <b>Customer Satisfaction :</b>
                            Your satisfaction is our priority. We work closely with you to understand your vision and
                            exceed your expectations.
                        </p>
                        <p>
                            <b>Reliability :</b>
                            Trust Sthree Engineers for reliable service, timely delivery, and transparent communication
                            throughout the project.
                        </p>
                    </div>

                </div>

                <h4 class="fw_bold fs_28 mt_30 mb_10">Contact Us</h4>
                <p>
                    Transform your space with Sthree Engineers and experience the difference our interior designer in
                    Trichy team can make. Get in touch with us today to <a href="{{ route('contact') }}"
                        style="color: blue">discuss your project requirements</a> and embark on a journey of design
                    excellence.
                </p>
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{ asset('assets/frontend/images/gallery/gallery-12.webp') }}" style="width: 500px;"
                            alt="interior design works">
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
