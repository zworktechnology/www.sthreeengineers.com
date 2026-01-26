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
                    <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        About Us
                    </h1>
                    <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s"
                        data-wow-duration="1.5s">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="ml_10 mr_10">/</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="pt_160 pb_90">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="p_relative">
                            <div class="image p_relative d_iblock" data-parallax='{"y": -20}'>
                                <img src="{{ asset('assets/frontend/images/resource/image-11.jpg') }}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            </div>
                            <div class="image p_relative b_40 text-end" data-parallax='{"y": 20}'>
                                <img src="{{ asset('assets/frontend/images/resource/image-34.jpg') }}"
                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                            </div>
                            <div class="experience-year fs_18 fw_bold ff_sec theme-bg p_absolute l_60 b_110 text-center text-light pt_30 b_radius_50 lh_20"
                                data-parallax='{"x": 20}'><span class="fs_60 fw_black mb_25 d_iblock">19</span><br>
                                Years <br>
                                Experience</div>
                        </div>
                    </div>
                    <div class="col-lg-7 ps-lg-5">
                        <div class="p_relative">
                            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>About Company</h6>
                            <h2 class="fs_45 fw_black mb_40">STHREE ENGINEERS <br>
                                Name of Professionalism</h2>
                            <p class="mb_30 fs_20">Building excellence through innovation, sustainability, and a
                                commitment to
                                quality.</p>
                            <p class="mb_50 fs_18">At STHREE ENGINEERS, we believe that every project is an
                                opportunity to turn
                                our clients' dreams into reality. With over 19 years of experience in the industry,
                                we have
                                honed our skills and expertise to deliver safe, reliable, and cost-effective
                                construction
                                services that exceed our client's expectations. Our team is dedicated to providing
                                the best
                                building construction solutions. We pride ourselves on our attention to detail,
                                quality
                                workmanship, and timely project completion. Let us turn your dreams into reality
                                with our
                                expertise and dedication to excellence in construction.</p>
                            <div class="author-box d-flex align-items-center">
                                <div class="image mb_20 mr_25"><img class="b_radius_50"
                                        src="{{ asset('assets/frontend/images/resource/authors.png') }}"></div>
                                <div class="mr_40">
                                    <p class="mb-0 fs_20 fw_sbold c_dark">Rtn. Er. M. Senthilnathan</p>
                                    <p class="mb_20 fs_18 c_dark">Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt_120 bg_gray">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-7 wow fadeInUp mb_50" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="">
                            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Our Key points</h6>
                            <h2 class="fw_black fs_45 mb_20">Why Choose Us</h2>
                            <p class="mb_40 fs_18">At STHREE ENGINEERS, we don't just build structures we turn our
                                clients'
                                dreams into reality. With an impressive track record of over 19 years in the
                                construction
                                industry, we have become synonymous with reliability, innovation, and excellence.
                                Our mission is
                                to provide safe, reliable, quality and cost-effective construction services that
                                consistently
                                exceed our clients' expectations.</p>
                            <ul class="list-1 alt fs_20 fw_medium c_dark2 mb_30">
                                <li><i class="flaticon-check-mark"></i>Tailored Construction Solutions</li>
                                <li><i class="flaticon-check-mark"></i>Cost-Effective Solutions</li>
                                <li><i class="flaticon-check-mark"></i>Dedicated and Passionate Team</li>
                                <li><i class="flaticon-check-mark"></i>End-to-End Project Management</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="feature-image-1">
                            <img src="{{ asset('assets/frontend/images/resource/image-11.jpg') }}"
                                alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt_120 pb_90 bg_cover"
            style="background-image: url(assets/frontend/images/background/bg-2.jpg);">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Testimonials</h6>
                        <h2 class="c_light fs_45 fw_black mb_40">What they're <br> Talking About <br> Company ?</h2>
                        <div class="slider-nav-style-2 testimonial-1-nav ms-lg-5">
                            <div class="slider-control slider-button-prev2 hvr-zoom-1 hvr-zoom-1-primary rotate_180">
                                <span><i class="flaticon-right-1"></i></span>
                            </div>
                            <div class="slider-control slider-button-next2 hvr-zoom-1 hvr-zoom-1-primary"><span><i
                                        class="flaticon-right-1"></i></span> </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="swiper-container two-item-carousel">
                            <div class="swiper-wrapper">
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">Today best experience for my new House
                                                construction
                                                Discussion & ideas And
                                                planning how to plan quality construction and perfect solutions for
                                                all
                                                construction need . best consultant in construction industry</div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">The team at Sthree Engineering was a
                                                pleasure to
                                                work with. Their open
                                                communication and willingness to address concerns made for a
                                                stress-free
                                                project. </div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">Their team was fantastic to work with.
                                                They
                                                listened to my ideas and
                                                preferences, and their attention to detail was commendable. The
                                                quality of
                                                their construction work was outstanding, and they completed the
                                                project on
                                                time</div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">Professionally Good in work, completion
                                                of project
                                                on proper time, Future
                                                vision Engineering.. apart from that Kind and Reliable.....</div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide Item -->
                                <div class="swiper-slide">
                                    <div class="testimonials-1-block">
                                        <div class="testimonials-1-top-content">
                                            <div class="testimonials-1-quote"><i class="flaticon-quotation"></i>
                                            </div>
                                            <div class="testimonials-1-desc">Interior & Exterior construction is
                                                innovative
                                                like Babu road site, Quality
                                                construction & approach easily </div>
                                        </div>
                                        <div class="testimonials-1-author">
                                            <div class="testimonials-1-author-image"><img
                                                    src="{{ asset('assets/frontend/images/resource/author-9.jpg') }}assets/images/resource/author-9.jpg"
                                                    alt="building construction, valuation, approval, surveyor, builder near me, building contractor, e valuation, builders in trichy, construction company in trichy">
                                            </div>
                                            <div class="testimonials-1-author-title">Our Client</div>
                                            <div class="testimonials-1-designation">Review</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb_90 pt_90 bg_gray5">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-5">
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>statistics</h6>
                        <h2 class="fw_black fs_45 mb_20">Know More About <br> Our Success</h2>
                        <p class="mb_45">We place the utmost importance on each challenging activity.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="ps-lg-5">
                            <div class="row row-20">
                                <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                    <div class="fun-fact-1-block bg_light border-0">
                                        <div class="d-flex align-items-center">
                                            <i class="flaticon-engineer c_dark2 fs_65 w_65 mr_15"></i>
                                            <div>
                                                <div class="fs_50 fw_bold c_primary">
                                                    <span class="funfact-1-number odometer"
                                                        data-count="19">00</span><span>
                                                        +</span>
                                                </div>
                                                <p class="fw_bold mb_0">Years of Experience</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                    <div class="fun-fact-1-block bg_light border-0">
                                        <div class="d-flex align-items-center">
                                            <i class="flaticon-construction c_dark2 fs_65 w_65 mr_15"></i>
                                            <div>
                                                <div class="fs_50 fw_bold c_primary">
                                                    <span class="funfact-1-number odometer"
                                                        data-count="75">00</span><span>
                                                        +</span>
                                                </div>
                                                <p class="fw_bold mb_0">Projects Handover</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                    <div class="fun-fact-1-block bg_light border-0">
                                        <div class="d-flex align-items-center">
                                            <i class="flaticon-skyscrapers c_dark2 fs_65 w_65 mr_15"></i>
                                            <div>
                                                <div class="fs_50 fw_bold c_primary">
                                                    <span class="funfact-1-number odometer"
                                                        data-count="10">00</span><span>
                                                        +</span>
                                                </div>
                                                <p class="fw_bold mb_0">Ongoing Project</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                                    <div class="fun-fact-1-block bg_light border-0">
                                        <div class="d-flex align-items-center">
                                            <i class="flaticon-apartment c_dark2 fs_65 w_65 mr_15"></i>
                                            <div>
                                                <div class="fs_50 fw_bold c_primary">
                                                    <span class="funfact-1-number odometer"
                                                        data-count="15">00</span><span>
                                                        +</span>
                                                </div>
                                                <p class="fw_bold mb_0">Upcoming Projects</p>
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

        <section class="pt_120 pb_90">
            <div class="auto-container">
                <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                        class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>FAQ</h6>
                <h2 class="fs_45 fw_black mb_20">Frequently Ask Questions</h2>
                <p class="fs_18 mb_40">
                    Find quick answers to common inquiries about our construction services.
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <!--Accordian Box-->
                        <ul class="accordion-box alt-2 pe-lg-5">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn c_dark ff_sec fs_22 fw_bold">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    Why choose a construction company?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p class="fs_18">
                                            Choosing a construction company in Trichy ensures local expertise and
                                            personalized
                                            service tailored to the region's unique needs.
                                            With a construction company in Trichy, clients benefit from a deep
                                            understanding of
                                            local regulations, climate challenges, and cultural nuances.
                                            Moreover, a construction company in Trichy fosters strong community
                                            relationships,
                                            facilitating smoother project execution and timely completion.
                                            From residential to commercial ventures, partnering with a construction
                                            company in
                                            Trichy guarantees meticulous attention to detail, adherence to quality
                                            standards,
                                            and a commitment to customer satisfaction.
                                            Entrust your construction endeavors to a trusted construction company in
                                            Trichy for
                                            unmatched professionalism and peace of mind.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn c_dark ff_sec fs_22 fw_bold">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    How to choose a builder?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p class="fs_18">
                                            When selecting builders in Trichy, consider their reputation,
                                            experience, and
                                            portfolio.
                                            Look for builders in Trichy with a proven track record of delivering
                                            high-quality
                                            projects on time and within budget.
                                            Seek recommendations from friends, family, or online reviews to gauge
                                            customer
                                            satisfaction.
                                            Verify builders in Trichy credentials, licenses, and certifications to
                                            ensure
                                            compliance with regulations.
                                            Discuss your requirements and budget with builders in Trichy to assess
                                            their
                                            understanding and feasibility of your project.
                                            Transparent communication and a detailed contract are essential for a
                                            successful
                                            collaboration with builders in Trichy.
                                            Finally, trust your instincts and choose builders in Trichy who instill
                                            confidence
                                            and professionalism.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn c_dark ff_sec fs_22 fw_bold active">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    Why surveyor is important and how many types of surveying are there?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <p class="fs_18">
                                            The role of a surveyor is crucial in various industries, ensuring
                                            precise
                                            measurements and data collection for surveying projects.
                                            Surveyors play a vital role in quantity survey and land development,
                                            providing
                                            accurate assessments for construction projects.
                                            There are several types of surveying, including land surveying,
                                            topographic
                                            surveying, and hydrographic surveying, each tailored to specific needs.
                                            Whether it's assessing land boundaries or mapping terrain, surveyors
                                            utilize
                                            advanced techniques and equipment to deliver reliable results.
                                            In construction, quantity surveyors meticulously evaluate costs and
                                            materials,
                                            optimizing budgets and project efficiency.
                                            Their expertise is indispensable in maintaining project integrity and
                                            success.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn c_dark ff_sec fs_22 fw_bold">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    How building plans are approved and why its important?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p class="fs_18">
                                            Building plans are vital blueprints for construction projects, ensuring
                                            adherence to
                                            safety and regulatory standards.
                                            The process of plan approval involves thorough scrutiny by regulatory
                                            bodies to
                                            verify compliance with zoning laws, building codes, and environmental
                                            regulations.
                                            It's crucial for maintaining structural integrity and safeguarding
                                            occupants'
                                            well-being. Without proper approval, construction could face legal
                                            issues and
                                            compromise safety.
                                            Timely plan approval expedites the commencement of building
                                            construction,
                                            streamlining the entire process.
                                            By adhering to approval guidelines, projects progress smoothly,
                                            minimizing delays
                                            and ensuring structures meet stringent quality standards.
                                            In essence, plan approval is the cornerstone of responsible and lawful
                                            building
                                            construction.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <!--Accordian Box-->
                        <ul class="accordion-box alt-2 pe-lg-5">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn c_dark ff_sec fs_22 fw_bold">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    What is valuation and why its important?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p class="fs_18">
                                            Valuation is the process of determining the current worth of an asset or
                                            a company.
                                            It plays a crucial role in e-valuation as it assesses the financial
                                            health and
                                            potential of online businesses.
                                            Understanding valuation is important as it guides investment decisions,
                                            merger and
                                            acquisition strategies, and financial reporting.
                                            Through valuation, investors can gauge the e-valuation of digital
                                            ventures
                                            accurately, ensuring informed choices and maximizing returns.
                                            Therefore, mastering valuation methods is essential for success in the
                                            dynamic world
                                            of e-valuation.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn c_dark ff_sec fs_22 fw_bold">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    What is PMC and how it works?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p class="fs_18">
                                            PMC, or Project Management Consultancy, plays a pivotal role in the
                                            construction
                                            industry by providing project management expertise and oversight.
                                            A PMC company acts as a liaison between stakeholders, overseeing various
                                            aspects of
                                            a project from inception to completion.
                                            Their responsibilities encompass project management tasks such as
                                            scheduling,
                                            budgeting, risk assessment, and quality control.
                                            PMC companies ensure seamless coordination among contractors,
                                            architects, and
                                            clients, optimizing resources and mitigating potential issues.
                                            With their specialized knowledge and experience in the construction
                                            industry project
                                            management, PMC companies streamline operations, enhance efficiency, and
                                            deliver
                                            successful outcomes for complex construction projects.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn c_dark ff_sec fs_22 fw_bold active">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa fa-plus"></span>
                                        <span class="icon icon-minus fa fa-minus"></span>
                                    </div>
                                    How interior design makes your space to looks so gorgeous?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <p class="fs_18">
                                            Interior design by a skilled interior designer in Trichy can transform
                                            your space
                                            into a breathtaking oasis of style and functionality.
                                            Through meticulous planning and creative vision, interior works
                                            seamlessly blend
                                            aesthetics with practicality, enhancing the beauty and comfort of your
                                            home.
                                            From selecting the perfect color palette to optimizing space
                                            utilization, every
                                            aspect of home interior design is carefully curated to reflect your
                                            taste and
                                            personality.
                                            With the expertise of an experienced interior designer in Trichy, your
                                            space comes
                                            alive with harmonious layouts, elegant furnishings, and bespoke accents,
                                            creating an
                                            ambiance that truly captivates the senses.
                                            The magic of interior design lies in its ability to orchestrate elements
                                            such as
                                            lighting, textures, and proportions to evoke a sense of luxury and
                                            sophistication.
                                            A skilled interior designer in Trichy harnesses these elements to craft
                                            spaces that
                                            not only look stunning but also function effortlessly for your lifestyle
                                            needs.
                                            From conceptualization to execution, each phase of interior works is
                                            executed with
                                            precision and attention to detail, ensuring that every corner of your
                                            home reflects
                                            the highest standards of design excellence.
                                            Experience the transformative power of home interior design and elevate
                                            your living
                                            spaces to unparalleled levels of beauty and elegance with the expertise
                                            of a trusted
                                            interior designer in Trichy.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <!-- <li class="accordion block">
                                <div class="acc-btn c_dark ff_sec fs_22 fw_bold">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Multiple touchpoints for
                                    offshoring ?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p class="fs_18">Lorem ipsum dolor sit amet, vix an natum labitur eleifd, mel am
                                            laoreet menandri. Ei justo complectitur duo. Ei mundi solet utos soletu
                                            possit quo. Sea cu justo laudem. An utinam consulatu eos, est facilis.</p>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        @include('pages.frontend.layouts.footer')

        @include('pages.frontend.layouts.script')

        @include('pages.frontend.layouts.backtotop')
    </div>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "AboutPage",
            "name": "About Sthree Engineers | Construction Company in Trichy",
            "url": "https://www.sthreeengineers.com/about",
            "breadcrumb": {
                "@type": "BreadcrumbList",
                "itemListElement": [
                {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.sthreeengineers.com/"},
                {"@type": "ListItem", "position": 2, "name": "About Us"}
                ]
            },
            "mainEntity": {"@id": "https://www.sthreeengineers.com/#organization"}
        }
    </script>
</body>

</html>
