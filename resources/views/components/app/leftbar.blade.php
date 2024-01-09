<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="javascript:void(0);" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/frontend/image/logo/black-logo-1.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/frontend/image/logo/black-logo-1.png') }}" alt="" height="20">
            </span>
        </a>

        <a href="javascript:void(0);" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/frontend/image/logo/black-logo-1.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/frontend/image/logo/black-logo-1.png') }}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar="" class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li class="{{ Route::is('home') ? 'mm-active' : '' }}">
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="uil-tachometer-fast"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Route::is('blog.master.index','blog.master.create','blog.master.edit') ? 'mm-active' : '' }}">
                    <a href="{{ route('blog.master.index') }}" class="waves-effect">
                        <i class="uil-master-card"></i>
                        <span>Blog Master</span>
                    </a>
                </li>
                <li class="{{ Route::is('blog.index','blog.create','blog.edit') ? 'mm-active' : '' }}">
                    <a href="{{ route('blog.index') }}" class="waves-effect">
                        <i class="uil-blogger-alt"></i>
                        <span>Blog</span>
                    </a>
                </li>
                {{-- <li class="{{ Route::is('blog.comment.index','blog.comment.edit') ? 'mm-active' : '' }}">
                    <a href="{{ route('blog.comment.index') }}" class="waves-effect">
                        <i class="uil-comment-message"></i>
                        <span>Comment</span>
                    </a>
                </li>
                <li class="{{ Route::is('contact.index') ? 'mm-active' : '' }}">
                    <a href="{{ route('contact.index') }}" class="waves-effect">
                        <i class="uil-mailbox"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
                <li class="{{ Route::is('enquiry.index') ? 'mm-active' : '' }}">
                    <a href="{{ route('enquiry.index') }}" class="waves-effect">
                        <i class="uil-message"></i>
                        <span>Enquiry</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
