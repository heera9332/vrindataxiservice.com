<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Book curated tour packages for Vrindavan, Mathura, Govardhan, Barsana, Nandgaon, Gokul, and Agra. Affordable pricing, experienced drivers & comfortable vehicles." />
    <meta name="keywords" content="vrindavan tour packages, mathura braj darshan tour, govardhan barsana taxi package, vrinda taxi tour packages" />
    <meta name="author" content="Vrinda Taxi Service" />

    <!-- Canonical Tag -->
    <link rel="canonical" href="https://vrindataxiservice.com/package">

    <!-- Open Graph Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Tour Packages | Vrinda Taxi Service - Vrindavan & Mathura Tours">
    <meta property="og:description" content="Book curated tour packages for Vrindavan, Mathura, Govardhan, Barsana, Nandgaon, Gokul, and Agra. Affordable pricing, experienced drivers & comfortable vehicles.">
    <meta property="og:url" content="https://vrindataxiservice.com/package">
    <meta property="og:site_name" content="Vrinda Taxi Service">
    <meta property="og:image" content="{{ asset('vrinda-taxi/assets/img/logo/logo.png') }}">
    <meta property="og:locale" content="en_IN">

    <!-- title -->
    <title>Tour Packages | Vrinda Taxi Service - Vrindavan & Mathura Tours</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('vrinda-taxi/assets/img/logo/favicon.png') }}" />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/all-fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/slimselect.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/flatpickr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/style.css') }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17366349643"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17366349643');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K362P6XC');</script>
    <!-- End Google Tag Manager -->

    <style>
        .tour-package-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            border: 1px solid #e5e7eb !important;
            background: #ffffff;
        }
        .tour-package-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 28px rgba(0,0,0,0.08) !important;
        }
        .tour-card-img {
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .tour-package-card:hover .tour-card-img {
            transform: scale(1.05);
        }
        .hover-theme-color:hover {
            color: var(--theme-color, #0F766E) !important;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K362P6XC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--===== header ==========-->
    @include('front-end.layouts.header')

    <main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb ng-mt" style="background: url('{{ asset('vrinda-taxi/assets/img/breadcrumb/01.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <h1 class="breadcrumb-title" style="font-size: 2.2rem;">Tour Packages</h1>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">Tour Packages</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <section class="package-section py-5" id="package">
            <div class="container">

                <!-- Heading -->
                <div class="text-center mb-5">
                    <span class="badge bg-light text-primary border px-3 py-2 rounded-pill text-uppercase fw-bold mb-2" style="color: var(--theme-color, #0F766E) !important; font-size: 13px; letter-spacing: 1px;">
                        Curated Braj Pilgrimage
                    </span>
                    <h2 class="fw-bold mb-2">Our Mathura Vrindavan Tour Packages</h2>
                    <p class="text-muted mx-auto" style="max-width: 650px;">
                        Comfortable taxi-based pilgrimage & sightseeing tours. Explore sacred temples, holy kunds, and heritage ghats with experienced local drivers.
                    </p>
                </div>

                @php
                    $tourList = (isset($packages) && $packages->count() > 0)
                                ? $packages
                                : ((isset($tourPackages) && $tourPackages->count() > 0) ? $tourPackages : collect());
                @endphp

                <div class="row g-4">
                    @forelse($tourList as $pkg)
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden tour-package-card">
                                <div class="position-relative overflow-hidden" style="height: 220px; background: #f1f5f9;">
                                    @php
                                        $pkgImg = null;
                                        if(!empty($pkg->featured_image)) {
                                            $pkgImg = asset('uploads/tours/' . $pkg->featured_image);
                                        } elseif(!empty($pkg->banner_image)) {
                                            $pkgImg = asset('uploads/tours/' . $pkg->banner_image);
                                        } else {
                                            $fallbackIdx = ($loop->index % 12) + 1;
                                            $pkgImg = asset('vrinda-taxi/assets/img/package/p' . $fallbackIdx . '.webp');
                                        }
                                    @endphp
                                    <a href="{{ route('tour-packages.show', $pkg->id) }}" class="d-block w-100 h-100">
                                        <img src="{{ $pkgImg }}" 
                                             class="card-img-top w-100 h-100 tour-card-img" 
                                             alt="{{ $pkg->title }}"
                                             onerror="this.onerror=null;this.src='{{ asset('vrinda-taxi/assets/img/breadcrumb/01.jpg') }}';">
                                    </a>

                                    @if($pkg->duration)
                                        <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-3 shadow-sm px-2 py-1 fw-bold" style="font-size: 13px;">
                                            <i class="far fa-clock me-1"></i> {{ $pkg->duration }}
                                        </span>
                                    @endif

                                    @if($pkg->location)
                                        <span class="badge bg-dark text-white position-absolute top-0 end-0 m-3 shadow-sm px-2 py-1" style="font-size: 12px; opacity: 0.9;">
                                            <i class="fas fa-map-marker-alt me-1 text-warning"></i> {{ $pkg->location }}
                                        </span>
                                    @endif
                                </div>

                                <div class="card-body d-flex flex-column p-4">
                                    <h5 class="fw-bold mb-2">
                                        <a href="{{ route('tour-packages.show', $pkg->id) }}" class="text-dark text-decoration-none hover-theme-color">
                                            {{ $pkg->title }}
                                        </a>
                                    </h5>

                                    <div class="text-muted small mb-3">
                                        @if($pkg->location)
                                            <span class="me-2"><i class="fas fa-route text-muted me-1"></i> {{ $pkg->location }} Circuit</span>
                                        @endif
                                    </div>

                                    {{-- Highlights / Inclusions or Itineraries --}}
                                    <ul class="list-unstyled small mb-4 flex-grow-1" style="color: #4b5563;">
                                        @if($pkg->inclusions && $pkg->inclusions->count() > 0)
                                            @foreach($pkg->inclusions->take(3) as $inc)
                                                <li class="mb-2 d-flex align-items-start">
                                                    <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                                    <span>{{ Str::limit($inc->item, 45) }}</span>
                                                </li>
                                            @endforeach
                                        @elseif($pkg->itineraries && $pkg->itineraries->count() > 0)
                                            @foreach($pkg->itineraries->take(3) as $itin)
                                                <li class="mb-2 d-flex align-items-start">
                                                    <i class="fa-solid fa-circle-check text-success me-2 mt-1"></i>
                                                    <span>Day {{ $itin->day_number }}: {{ Str::limit($itin->title, 40) }}</span>
                                                </li>
                                            @endforeach
                                        @else
                                            <li class="mb-2 d-flex align-items-start">
                                                <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                                <span>Mathura & Vrindavan Sacred Darshan</span>
                                            </li>
                                            <li class="mb-2 d-flex align-items-start">
                                                <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                                <span>Sanitized AC Taxi & Local Driver</span>
                                            </li>
                                            <li class="mb-2 d-flex align-items-start">
                                                <i class="fa-solid fa-check text-success me-2 mt-1"></i>
                                                <span>Doorstep Pickup & Flexible Timing</span>
                                            </li>
                                        @endif
                                    </ul>

                                    <div class="mt-auto">
                                        <a href="{{ route('tour-packages.show', $pkg->id) }}" class="theme-btn btn-sm w-100 text-center mb-2 d-block py-2" style="font-size: 14px;">
                                            View Itinerary & Details <i class="fas fa-arrow-right ms-1"></i>
                                        </a>

                                        <div class="d-flex gap-2">
                                            <a href="tel:+919452667708" class="btn btn-outline-dark btn-sm w-50 py-2 font-weight-bold">
                                                <i class="fas fa-phone-alt me-1"></i> Call
                                            </a>
                                            @php
                                                $waText = "Hello, I want to book the tour package: " . $pkg->title . " (Package ID: " . $pkg->id . ") on Vrinda Taxi Service.";
                                            @endphp
                                            <a href="https://wa.me/919452667708?text={{ urlencode($waText) }}" 
                                               target="_blank" 
                                               class="btn btn-success btn-sm w-50 py-2 text-white font-weight-bold" 
                                               style="background-color: #25D366; border-color: #25D366;">
                                                <i class="fab fa-whatsapp me-1"></i> WhatsApp
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5">
                            <div class="p-5 bg-light rounded-4 border">
                                <i class="fas fa-map-marked-alt fa-3x text-muted mb-3"></i>
                                <h4>No Tour Packages Available Yet</h4>
                                <p class="text-muted">Packages saved from the admin panel (/admin/tour-packages) will appear here automatically.</p>
                                <a href="tel:+919452667708" class="theme-btn">Call for Custom Tour Package</a>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Custom Itinerary CTA Card -->
                <div class="mt-5 p-4 p-md-5 rounded-4 text-white text-center" style="background: linear-gradient(135deg, #0F766E 0%, #115E59 100%);">
                    <h3 class="text-white mb-2 fw-bold">Need a Custom Pilgrimage or Outstation Tour Package?</h3>
                    <p class="text-white-50 mx-auto mb-4" style="max-width: 650px;">
                        We arrange customized temple itineraries, multi-city pilgrimage circuits, tempo travellers for large families, and luxury cabs according to your schedule.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="tel:+919452667708" class="theme-btn btn-light text-dark font-weight-bold px-4 py-2">
                            <i class="fas fa-phone-alt me-1"></i> Call +91 9452667708
                        </a>
                        <a href="https://wa.me/919452667708?text=Hello%2C%20I%20would%20like%20to%20request%20a%20customized%20tour%20package." target="_blank" class="theme-btn btn-success px-4 py-2" style="background-color: #25D366; border-color: #25D366;">
                            <i class="fab fa-whatsapp me-1"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <!--======== footer =========-->
    @include('front-end.layouts.footer')
    <!--======== footer =========-->

</body>
</html>
