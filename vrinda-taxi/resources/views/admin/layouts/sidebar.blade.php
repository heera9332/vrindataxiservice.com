<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link text-center">

        <span class="brand-text font-weight-light">
            Admin Panel
        </span>

    </a>

    <div class="sidebar">

        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">

                    <a href="{{ url('admin/dashboard') }}" class="nav-link">

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                <!-- <li class="nav-item">

                    <a href="{{ url('admin/packages') }}" class="nav-link">

                        <i class="nav-icon fas fa-car"></i>

                        <p>Packages</p>

                    </a>

                </li> -->

                <!-- <li class="nav-item">

                    <a href="{{ url('admin/testimonials') }}" class="nav-link">

                        <i class="nav-icon fas fa-star"></i>

                        <p>Testimonials</p>

                    </a>

                </li> -->

                <li class="nav-item">

                    <a href="{{ url('admin/bookings') }}" class="nav-link">

                        <i class="nav-icon fas fa-book"></i>

                        <p>Ride Bookings</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="{{ url('/admin/tour-packages') }}" class="nav-link">

                        <i class="nav-icon fas fa-book"></i>

                        <p>Tour Packages</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="{{ route('tour-bookings.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-suitcase"></i>
                      <p>Tour Bookings Management</p>
                    </a>

                </li>

                 <li class="nav-item">

                    <a href="{{ url('/admin/cars') }}" class="nav-link">

                        <i class="nav-icon fas fa-car"></i>

                        <p>Cars</p>

                    </a>

                </li>

                <li class="nav-header text-uppercase font-weight-bold text-muted px-3 mt-2 mb-1" style="font-size: 11px; letter-spacing: 0.5px;">Blog & Dynamic SEO</li>

                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Categories</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link {{ request()->is('admin/posts*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Posts & SEO Pages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.profile.edit') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>


            </ul>

        </nav>

    </div>

</aside>