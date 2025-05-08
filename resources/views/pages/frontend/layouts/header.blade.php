<header class="main-header header-style-one">
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container d-flex align-items-center justify-content-between">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('index') }}"><img
                                src="{{ asset('assets/frontend/images/logo-light.png') }}" alt=""
                                style="height: 80px;"></a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="right-column d-flex align-items-center">
                        <div class="nav-outer">
                            <div class="mobile-nav-toggler">
                                <img src="{{ asset('assets/frontend/images/icons/menu.svg') }}" alt="">
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="{{ Route::is('index') ? 'current' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                                        <li class="{{ Route::is('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                                        <li class="dropdown {{ Route::is('service', 'building-construction', 'project-management', 'valuation', 'surveying', 'interior-works', 'approval', 'quality-survey') ? 'current' : '' }}"><a href="{{ route('service') }}">Services</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('building-construction') }}">Building Construction</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('project-management') }}">Project Management
                                                        (PMC)</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('valuation') }}">Valuation</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('surveying') }}">Surveying</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('interior-works') }}">Interior Works</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('approval') }}">Approval</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('quality-survey') }}">Quantity Survey</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="{{ Route::is('blog.*') ? 'current' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
                                        <li class="{{ Route::is('project', 'project2') ? 'current'  : '' }}"><a href="{{ route('project') }}">Projects</a></li>
                                        <li class="{{ Route::is('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                                        <li class="dropdown" hidden><a href="#">SEO Pages</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('builders-in-trichy') }}">Page 01</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('civil-construction-company') }}">Page 02</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('civil-engineer-near-me') }}">Page 03</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('civil-engineering-construction') }}">Page 04</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('civil-project-and-management-company-in-trichy') }}">Page 05</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('construction-company-in-trichy') }}">Page 06</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('home-interior-design') }}">Page 07</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('interior-design-company') }}">Page 08</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('interior-designer-in-trichy') }}">Page 09</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="header-link-btn ml_30">
                            <a href="https://api.whatsapp.com/send/?phone=%2B917871313987" target="_blank"
                                class="btn-1 pt_10 pb_10 pl_30 pr_30 b_radius_23 ff_sec fw_bold tt_u fs_14 ls_1">Chat
                                On Whatsapp<span></span></a>
                        </div>
                        <div class="sidemenu-nav-toggler mr_30 ml_30">
                            <img src="{{ asset('assets/frontend/images/icons/menu.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header dark-bg">
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container d-flex align-items-center justify-content-between">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/frontend/images/logo-light.png') }}" alt=""
                                    style="height: 70px;">
                            </a>
                        </div>
                    </div>
                    <div class="right-column d-flex align-items-center">
                        <div class="nav-outer">
                            <div class="mobile-nav-toggler">
                                <img src="{{ asset('assets/frontend/images/icons/menu.svg') }}" alt="">
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light"></nav>
                        </div>
                        <div class="header-link-btn ml_30">
                            <a href="https://api.whatsapp.com/send/?phone=%2B917871313987" target="_blank"
                                class="btn-1 pt_10 pb_10 pl_30 pr_30 b_radius_23 ff_sec fw_bold tt_u fs_14 ls_1">Chat
                                On Whatsapp<span></span>
                            </a>
                        </div>
                        <div class="sidemenu-nav-toggler mr_30 ml_30">
                            <img src="{{ asset('assets/frontend/images/icons/menu.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="fal fa-times"></span></div>

        <nav class="menu-box">
            <div class="nav-logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/frontend/images/logo-light.png') }}" alt="" title="">
                </a>
            </div>
            <div class="menu-outer"></div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="https://www.facebook.com/sthreeengineers" target="_blank"><span
                                class="fab fa-facebook-square"></span></a></li>
                    <li><a href="https://www.instagram.com/sthreeengineers" target="_blank"><span
                                class="fab fa-instagram"></span></a></li>
                    <li><a href="https://www.youtube.com/@sthreeengineers" target="_blank"><span
                                class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>
