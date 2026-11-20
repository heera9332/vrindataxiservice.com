<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ $post->meta_description ?: ($post->excerpt ?: 'Book verified taxi and cab services in Vrindavan and Mathura with Vrinda Taxi Service.') }}" />
    <meta name="author" content="Vrinda Taxi Service" />

    <!-- Canonical Tag (Zero URL Prefix) -->
    <link rel="canonical" href="{{ url($post->slug) }}" />

    <!-- Open Graph Tags -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $post->meta_title ?: $post->title }}" />
    <meta property="og:description" content="{{ $post->meta_description ?: ($post->excerpt ?: 'Book verified taxi and cab services with Vrinda Taxi Service.') }}" />
    <meta property="og:url" content="{{ url($post->slug) }}" />
    <meta property="og:site_name" content="Vrinda Taxi Service" />
    @if($post->featured_image)
    <meta property="og:image" content="{{ $post->featured_image_url }}" />
    @else
    <meta property="og:image" content="{{ asset('vrinda-taxi/assets/img/logo/logo.png') }}" />
    @endif
    <meta property="og:locale" content="en_IN" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $post->meta_title ?: $post->title }}" />
    <meta name="twitter:description" content="{{ $post->meta_description ?: ($post->excerpt ?: 'Book verified taxi service with Vrinda Taxi Service.') }}" />
    @if($post->featured_image)
    <meta name="twitter:image" content="{{ $post->featured_image_url }}" />
    @endif

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Article",
      "headline": "{{ addslashes($post->title) }}",
      "description": "{{ addslashes($post->meta_description ?: ($post->excerpt ?: '')) }}",
      @if($post->featured_image)
      "image": "{{ $post->featured_image_url }}",
      @endif
      "author": {
        "@@type": "Organization",
        "name": "Vrinda Taxi Service",
        "url": "{{ url('/') }}"
      },
      "publisher": {
        "@@type": "Organization",
        "name": "Vrinda Taxi Service",
        "logo": {
          "@@type": "ImageObject",
          "url": "{{ asset('vrinda-taxi/assets/img/logo/logo.png') }}"
        }
      },
      "datePublished": "{{ $post->published_at ? $post->published_at->toIso8601String() : $post->created_at->toIso8601String() }}",
      "dateModified": "{{ $post->updated_at->toIso8601String() }}",
      "mainEntityOfPage": {
        "@@type": "WebPage",
        "@id": "{{ url($post->slug) }}"
      }
    }
    </script>

    <!-- title -->
    <title>{{ $post->meta_title ?: $post->title . ' | Vrinda Taxi Service' }}</title>

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

    <style>
        .post-content-body {
            font-size: 17px;
            line-height: 1.8;
            color: #333;
        }
        .post-content-body h1, .post-content-body h2, .post-content-body h3, .post-content-body h4 {
            color: #111;
            font-weight: 700;
            margin-top: 1.75rem;
            margin-bottom: 0.85rem;
        }
        .post-content-body p {
            margin-bottom: 1.25rem;
        }
        .post-content-body ul, .post-content-body ol {
            padding-left: 1.5rem;
            margin-bottom: 1.25rem;
        }
        .post-content-body li {
            margin-bottom: 0.5rem;
        }
        .post-content-body blockquote {
            border-left: 4px solid #0F766E;
            background: #f8fafc;
            padding: 1rem 1.5rem;
            margin: 1.5rem 0;
            font-style: italic;
            border-radius: 0 8px 8px 0;
        }
        .post-content-body img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1rem 0;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }
        .post-cta-box {
            background: linear-gradient(135deg, #0F766E 0%, #115E59 100%);
            color: #fff;
            padding: 30px;
            border-radius: 12px;
            margin-top: 40px;
        }
        .post-cta-box h3 {
            color: #fff;
            margin-bottom: 10px;
        }
        .post-cta-box p {
            color: rgba(255,255,255,0.9);
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!--======== preloader =========-->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <!--======== header =========-->
    @include('front-end.layouts.header')

    <main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb ng-mt" style="background: url('{{ asset('vrinda-taxi/assets/img/breadcrumb/01.jpg') }}')">
            <div class="container">
                <h1 class="breadcrumb-title" style="font-size: 2.2rem;">{{ $post->title }}</h1>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    @if($post->category)
                    <li><a href="#">{{ $post->category->name }}</a></li>
                    @endif
                    <li class="active">{{ Str::limit($post->title, 35) }}</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- post single content -->
        <div class="blog-single-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            @if($post->featured_image)
                            <div class="blog-single-img mb-40">
                                <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="img-fluid rounded shadow-sm w-100" style="max-height: 480px; object-fit: cover;">
                            </div>
                            @endif

                            <div class="blog-single-content">
                                <div class="blog-meta mb-3">
                                    <span class="text-muted mr-3">
                                        <i class="far fa-calendar-alt text-primary"></i> {{ $post->published_at ? $post->published_at->format('d M, Y') : $post->created_at->format('d M, Y') }}
                                    </span>
                                    @if($post->category)
                                    <span class="badge badge-primary px-2 py-1" style="background-color: #0F766E;">
                                        <i class="far fa-folder-open"></i> {{ $post->category->name }}
                                    </span>
                                    @endif
                                </div>

                                @if($post->excerpt)
                                <div class="lead font-italic p-3 bg-light rounded border-left mb-4" style="border-left-color: #0F766E !important; border-left-width: 4px !important;">
                                    {{ $post->excerpt }}
                                </div>
                                @endif

                                <!-- Rich HTML Content -->
                                <div class="post-content-body mt-4">
                                    {!! $post->content !!}
                                </div>

                                <!-- Booking Call To Action Card -->
                                <div class="post-cta-box text-center">
                                    <h3>Ready to Book Your Ride?</h3>
                                    <p>Experience hassle-free travel in Vrindavan, Mathura, and outstation routes with clean cars and experienced drivers.</p>
                                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                                        <a href="tel:+919452667708" class="theme-btn btn-light text-dark font-weight-bold px-4 py-2 mr-2">
                                            <i class="fas fa-phone-alt mr-1"></i> Call +91 9452667708
                                        </a>
                                        <a href="https://wa.me/919452667708?text=Hello%2C%20I%20want%20to%20book%20a%20taxi%20service." target="_blank" class="theme-btn btn-success px-4 py-2" style="background-color: #25D366; border-color: #25D366;">
                                            <i class="fab fa-whatsapp mr-1"></i> WhatsApp Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="widget-area">
                            <!-- Quick Booking Card -->
                            <div class="widget mb-30 p-4 border rounded bg-light">
                                <h4 class="widget-title mb-3" style="font-size: 1.25rem;">Vrinda Taxi Service</h4>
                                <p class="text-muted" style="font-size: 14px;">Reliable & affordable 24/7 taxi booking in Vrindavan, Mathura, Agra, Delhi & outstation destinations.</p>
                                <ul class="list-unstyled mb-4" style="font-size: 14px;">
                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Sanitized AC Vehicles</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Verified, Professional Drivers</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Transparent Per-Km Fares</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Doorstep Pickup & Drop</li>
                                </ul>
                                <a href="tel:+919452667708" class="theme-btn w-100 text-center">
                                    <i class="fas fa-phone mr-1"></i> Quick Call
                                </a>
                            </div>

                            <!-- Related Categories / Navigation -->
                            @if(isset($headerCategories) && $headerCategories->count() > 0)
                            <div class="widget mb-30 p-4 border rounded">
                                <h4 class="widget-title mb-3" style="font-size: 1.25rem;">Explore Destinations</h4>
                                <ul class="list-unstyled mb-0">
                                    @foreach($headerCategories as $cat)
                                    <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                                        <span class="font-weight-500">{{ $cat->name }}</span>
                                        <span class="badge badge-light border">{{ $cat->posts->count() }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- post single content end -->
    </main>

    <!--======== footer =========-->
    @include('front-end.layouts.footer')
</body>

</html>
