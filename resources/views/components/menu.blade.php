    <!-- ======= Header Start ======= -->
    <header class="header d-none d-lg-block sticky-on">
        <div id="sticky-placeholder"></div>
        <div id="topbar-wrap" class="header-top header-top__border_bottom
        header-top__padding container-custom">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="header-top__info">
                            <div class="header-top__info_item header-top__info_time">
                                <div class="header-top__info_icon">
                                    <i class="flaticon flaticon-clock"></i>
                                </div>
                                <div class="header-top__info_text">
                                    <p class="header-top__info_text--small">Monday - Saturday:</p>
                                    <span class="header-top__info_text--big"> 10 Am - 7 Pm </span>
                                </div>
                            </div>
                            <div class="header-top__info_item header-top__info_phone">
                                <div class="header-top__info_icon">
                                    <i class="flaticon flaticon-phone-call"></i>
                                </div>
                                <div class="header-top__info_text">
                                    <p class="header-top__info_text--small">Call for help:</p>
                                    <span class="header-top__info_text--big">
                                        <a href="tel:+918098565686" style="color: #000000">+91 8098 5656 86</a>
                                    </span>
                                </div>
                            </div>
                            <div class="header-top__info_item header-top__info_email">
                                <div class="header-top__info_icon">
                                    <i class="flaticon flaticon-envelope"></i>
                                </div>
                                <div class="header-top__info_text">
                                    <p class="header-top__info_text--small">Mail to us</p>
                                    <span class="header-top__info_text--big">
                                        <a href="mailto:info@zworktechnology.com" style="color: #000000">info@zworktechnology.com</a>
                                    </span>
                                </div>
                            </div>
                            <div class="header-top__info_item header-top__info_address">
                                <div class="header-top__info_icon">
                                    <i class="flaticon flaticon-location"></i>
                                </div>
                                <div class="header-top__info_text">
                                    <p class="header-top__info_text--small">Our Address:</p>
                                    <span class="header-top__info_text--big">
                                        <a href="javascript:void(0)" style="color: #000000">
                                        Tiruchirappalli
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="header-top__social">
                            <ul>
                                <li class="header-top__social_list">
                                    <a class="header-top__social_list--link linkedin" href="https://www.linkedin.com/company/zwork-technology" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="header-top__social_list">
                                    <a class="header-top__social_list--link facebook" href="https://www.facebook.com/zworktechnology" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="header-top__social_list">
                                    <a class="header-top__social_list--link instagram" href="https://www.instagram.com/zwork_technology" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="header-top__social_list">
                                    <a class="header-top__social_list--link facebook" href="https://join.skype.com/invite/uKwIqhsNBdSj" target="_blank">
                                        <i class="fab fa-skype"></i>
                                    </a>
                                </li>
                                <li class="header-top__social_list">
                                    <a class="header-top__social_list--link facebook" href="https://twitter.com/zworktechnology" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="header-top__social_list">
                                    <a class="header-top__social_list--link twitter" href="https://api.whatsapp.com/send/?phone=%2B918098565686" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="header-top__social_list">
                                    <a class="header-top__social_list--link pinterest" href="https://www.youtube.com/@zworktechnology" target="_blank">
                                      <i class="fab fa-youtube"></i>
                                    </a>
                                  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="navbar-wrap" class="header-bottom container-custom navbar-wrap
        white-bg">
            <div class="container-fluid">
                <div class="header-bottom__row">
                    <div class="header-bottom__col">
                        <div class="logo">
                            <a href="{{ route('index') }}" class="logo__link">
                                <img src="{{ asset('assets/frontend/image/logo/black-logo-1.png') }}" alt="Logo" style="height: 30px; width: 200px;">
                            </a>
                        </div>
                    </div>
                    <div class="header-bottom__col">
                        <div class="main-menu">
                            <nav class="main-menu__nav">
                                <ul>
                                    <li class="list">
                                        <a class="animation" href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="list">
                                        <a class="animation" href="{{ route('about.us') }}">About Us</a>
                                    </li>
                                    <li class="main-menu__nav_sub list">
                                        <a class="animation" href="{{ route('service') }}">Service</a>
                                        <ul class="main-menu__dropdown">
                                            <li><a href="{{ route('web.development') }}">Web Development &
                                                    Designing</a></li>
                                            <li>
                                                <a href="{{ route('mobile.app.development') }}">Mobile App Development</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('ecommerce.soluation') }}">E-Commerce Solution</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('cms.crm.erp.soluation') }}">CMS, CRM, & ERP
                                                    Solution</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('custom.software') }}">Custom Software
                                                    Development</a>
                                            </li>
                                            <li><a href="{{ route('graphics.desiging') }}">Graphics Designing</a></li>
                                            <li>
                                                <a href="{{ route('digital.marketing') }}">Digital Marketing &
                                                    SEO</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('social.media') }}">Social Media Handling</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list">
                                        <a class="animation" href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="list">
                                        <a class="animation" href="{{ route('portfolio') }}">Portfolio</a>
                                    </li>
                                    <li class="list">
                                        <a class="animation" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile Menu Start -->
    <div class="rt-header-menu mean-container position-relative" id="meanmenu">
        <div class="mean-bar">
            <a href="{{ route('index') }}">
                <img class="logo-small" alt="Zwork" src="{{ asset('assets/frontend/image/logo/black-logo-1.png') }}" style="height: 25px; width:
            150px;">
            </a>
            <span class="sidebarBtn">
                <span class="fa fa-bars"></span>
            </span>
        </div>
        <div class="rt-slide-nav">
            <div class="offscreen-navigation">
                <nav class="menu-main-primary-container">
                    <ul class="menu">
                        <li class="list">
                            <a class="animation" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="list" style="margin-top: 10px;">
                            <a class="animation" href="{{ route('about.us') }}">About Us</a>
                        </li>
                        <li class="list menu-item-parent menu-item-has-children" style="margin-top: 10px;">
                            <a class="animation" href="{{ route('service') }}">Service</a>
                            <ul class="main-menu__dropdown sub-menu">
                                <li style="margin-top: 10px;"><a href="{{ route('web.development') }}">Web Development & Designing</a></li>
                                <li style="margin-top: 10px;">
                                    <a href="{{ route('mobile.app.development') }}">Mobile App Development</a>
                                </li>
                                <li style="margin-top: 10px;">
                                    <a href="{{ route('ecommerce.soluation') }}">E-Commerce Solution</a>
                                </li>
                                <li style="margin-top: 10px;">
                                    <a href="{{ route('cms.crm.erp.soluation') }}">CMS, CRM, & ERP Solution</a>
                                </li>
                                <li style="margin-top: 10px;">
                                    <a href="{{ route('custom.software') }}">Custom Software Development</a>
                                </li>
                                <li style="margin-top: 10px;"><a href="{{ route('graphics.desiging') }}">Graphics Designing</a></li>
                                <li style="margin-top: 10px;">
                                    <a href="{{ route('digital.marketing') }}">Digital Marketing & SEO</a>
                                </li>
                                <li style="margin-top: 10px;">
                                    <a href="{{ route('social.media') }}">Social Media Handling</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list" style="margin-top: 10px;">
                            <a class="animation" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="list" style="margin-top: 10px;">
                            <a class="animation" href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                        <li class="list" style="margin-top: 10px;">
                            <a class="animation" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Start End -->
    <!-- ======= Header End ======= -->
