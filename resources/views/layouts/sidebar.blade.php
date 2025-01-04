<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('asset/images/mainLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">MobileSmashRepair</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('auth.dashboard') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('banner.index') }}" class="nav-link">
                        <i class="nav-icon far fa-dailymotion"></i>
                        <p>Home Banner</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('plan.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-anchor"></i>
                        <p>Home Appointment Sec</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logo.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-podcast"></i>
                        <p>Home Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-address-book"></i>
                        <p>About Us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('chose.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-fax"></i>
                        <p>About Choose Us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('counter.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>About Us Counter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bullseye"></i>
                        <p>Our Services</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('serviceTitle.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bullseye"></i>
                        <p>Common Services Section</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('serviceHeader.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>Service Hero Sec</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('serviceAddon.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>Service Main Sec</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('serviceBefore.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>Service b/A images</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('serviceBest.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>Service Middle Sec</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('serviceChoose.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>Service Choose Us</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('serviceBenefit.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>Service Benefit</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-fan"></i>
                        <p>Service Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('serviceVideo.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>Service Video</p>
                    </a>
                </li>




                <li class="nav-item">
                    <a href="{{ route('faqs.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>ServiceFaqs</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('testimonial.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-fax"></i>
                        <p>Testimonials</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('appointment.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-american-sign-language-interpreting"></i>
                        <p>Appointments</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-asterisk"></i>
                        <p>Blog</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('seo.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-podcast"></i>
                        <p>Seo</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('auth.change-password-form') }}" class="nav-link">
                        <i class="nav-icon fa fa-support"></i>
                        <p>Change Password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fa fa-support"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Add the toggle button in the top-right corner -->
<div class="d-lg-none position-fixed top-0 end-0 p-3">
    <button class="btn btn-primary" id="sidebarToggle">
        <i class="fa fa-bars"></i>
    </button>
</div>

<!-- JavaScript to toggle sidebar -->
<script>
    document.getElementById('sidebarToggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('d-none');
    });
</script>

{{-- <style>
    @media (max-width: 767.98px) {
        #sidebar {
            display: none;
        }
    }
</style> --}}
