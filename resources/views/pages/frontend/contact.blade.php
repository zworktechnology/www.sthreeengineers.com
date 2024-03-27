@extends('layouts.guest')

@section('content')
    <!-- banner -->
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
                src="{{ asset('assets/frontend/images/main-slider/image-2.png') }}" alt=""></div>
        <div class="auto-container">
            <div class="p_relative text-center">
                <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Contact
                    Us</h1>
                <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s"
                    data-wow-duration="1.5s">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="ml_10 mr_10">/</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- form -->
    <section class="pt_120 pb_90 bg_gray10">
        <div class="auto-container">
            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>get in touch</h6>
            <h2 class="fw_black fs_45 mb_50">We Love to Hear From You</h2>
            <div class="row">
                <div class="col-lg-7">
                    <div class="">
                        @error('g-recaptcha-response')
                            <div class="alert alert-danger mt-1 mb-5" style="margin-top: 10px !important; color: red;">
                                {{ $message }}</div>
                        @enderror
                        <form autocomplete="off" method="POST" action="{{ route('contact.store') }}"
                            class="contact-validation-active">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Name *" required="" value="{{ old('name') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="name@example.com *" required="" value="{{ old('email') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="number" name="mobile" class="form-control"
                                        placeholder="+91 xxxxxxxxxx *" required="" value="{{ old('mobile') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" name="subject" class="form-control"
                                        placeholder="Subject *" required="" value="{{ old('subject') }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <textarea name="message" class="form-control" placeholder="Message *" required="">{{ old('message') }}</textarea>
                                </div>
                                <div class="row fullwidth">
                                    <div class="goolge-v2 col-6">
                                        @if (config('services.recaptcha.key'))
                                            <div class="g-recaptcha"
                                                data-sitekey="{{ config('services.recaptcha.key') }}">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="submit-area col-6">
                                        <button
                                            class="btn-1 text-center pt_12 pb_9 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1"
                                            type="submit" value="Send Mail" name="submit">Send Mail<span></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ms-lg-5">
                        <div class="ps-lg-3">
                            <h3 class="fs_35 mb_20">Our Address</h3>
                            <div class="d-flex align-items-start pb_30">
                                <img class="mr_20 mt_10" src="{{ asset('assets/frontend/images/icons/icon-map.png') }}"
                                    alt="">
                                <p class="mb_0 lh_30"><span class="fs_20 fw_bold c_dark">Registered Office :</span> <br>
                                    Pudukkottai Main Road, Subramaniyapuram, Trichy.</p>
                            </div>
                            <div class="d-flex align-items-start pb_30">
                                <img class="mr_20 mt_10" src="{{ asset('assets/frontend/images/icons/icon-map.png') }}"
                                    alt="">
                                <p class="mb_0 lh_30"><span class="fs_20 fw_bold c_dark">Branch Office :</span> <br> Attur
                                    Main Road, Perambalur, Tamilnadu.</p>
                            </div>
                            <div class="d-flex align-items-start pb_30">
                                <img class="mr_20 mt_10" src="{{ asset('assets/frontend/images/icons/icon-mail.png') }}"
                                    alt="">
                                <p class="mb_0 lh_30"><span class="fs_20 fw_bold c_dark">Phone :</span> <br> <a
                                        href="tel:+9104312963987">+91 0431-2963987</a>
                                    <sapn> | </sapn><a class="fs_20" href="tel:+917871313987">+91 78713 13987</a>
                                </p>
                            </div>
                            <div class="d-flex align-items-start pb_30">
                                <img class="mr_20 mt_10" src="{{ asset('assets/frontend/images/icons/icon-phone.png') }}"
                                    alt="">
                                <p class="mb_0 fs_20 lh_30"><span class="fs_20 fw_bold c_dark">Email :</span> <br> <a
                                        href="mailto:admin@sthreeengineers.com">admin@sthreeengineers.com</a>
                                    <sapn> | </sapn><a
                                        href="mailto:sthreeengineers@gmail.com">sthreeengineers@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.323687281428!2d78.69616270998624!3d10.786501989318516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf522449c4b13%3A0x9682228f66a04612!2sSTHREE%20ENGINEERS!5e0!3m2!1sen!2sin!4v1690825305818!5m2!1sen!2sin"
            width="600" height="535" frameborder="0" style="border:0; width: 100%" allowfullscreen=""
            aria-hidden="false" tabindex="0"></iframe>
    </div>
@endsection
