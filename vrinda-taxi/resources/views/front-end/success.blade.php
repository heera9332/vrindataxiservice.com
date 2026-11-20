<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Confirmation #{{ $booking->booking_no }} - Vrinda Taxi Service</title>
    <meta name="description" content="Your taxi booking request #{{ $booking->booking_no }} has been received successfully by Vrinda Taxi Service. Sanitized AC cabs and verified drivers in Mathura & Vrindavan." />
    <meta name="robots" content="noindex, follow">

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
        .booking-success-wrapper {
            background-color: #f8fafc;
        }
        .booking-success-wrapper .step-progress-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 2.5rem;
            gap: 15px;
            flex-wrap: wrap;
        }
        .booking-success-wrapper .step-progress-item {
            display: flex;
            align-items: center;
            font-size: 15px;
            font-weight: 600;
            color: #64748b;
        }
        .booking-success-wrapper .step-progress-item.completed {
            color: #10b981;
        }
        .booking-success-wrapper .step-progress-item.active {
            color: #10b981;
        }
        .booking-success-wrapper .step-circle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            font-size: 14px;
            background: #e2e8f0;
            color: #475569;
        }
        .booking-success-wrapper .step-progress-item.completed .step-circle {
            background: #10b981;
            color: #fff;
        }
        .booking-success-wrapper .step-progress-item.active .step-circle {
            background: #10b981;
            color: #fff;
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.2);
        }
        .booking-success-wrapper .step-divider {
            width: 40px;
            height: 2px;
            background: #10b981;
        }

        .success-receipt-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            max-width: 820px;
            margin: 0 auto;
        }
        .success-card-header {
            background: linear-gradient(135deg, #0F766E 0%, #115E59 100%);
            color: #ffffff;
            padding: 35px 25px;
            text-align: center;
        }
        .success-check-icon {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            margin-bottom: 16px;
            border: 3px solid rgba(255, 255, 255, 0.4);
        }
        .booking-no-badge {
            background: rgba(255, 255, 255, 0.18);
            border: 1px dashed rgba(255, 255, 255, 0.45);
            border-radius: 8px;
            padding: 8px 18px;
            display: inline-block;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1.5px;
        }
        .details-info-table th {
            font-weight: 600;
            color: #64748b;
            font-size: 13px;
            text-transform: uppercase;
            width: 35%;
            border-color: #f1f5f9;
        }
        .details-info-table td {
            font-weight: 600;
            color: #1e293b;
            font-size: 15px;
            border-color: #f1f5f9;
        }
        .action-cta-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
        }
        .whatsapp-cta-btn {
            background-color: #25D366;
            color: #ffffff;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .whatsapp-cta-btn:hover {
            background-color: #1eb855;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.35);
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

    <main class="main booking-success-wrapper py-5">
        <!-- breadcrumb -->
        <div class="site-breadcrumb ng-mt mb-4" style="background: url('{{ asset('vrinda-taxi/assets/img/breadcrumb/01.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <h1 class="breadcrumb-title" style="font-size: 2.2rem;">Booking Received</h1>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('booking.checkout') }}">Checkout</a></li>
                    <li class="active">Confirmation</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <div class="container py-3">
            <!-- Stepper -->
            <div class="step-progress-bar">
                <div class="step-progress-item completed">
                    <span class="step-circle"><i class="fas fa-check"></i></span>
                    <span>1. Select Ride</span>
                </div>
                <div class="step-divider"></div>
                <div class="step-progress-item completed">
                    <span class="step-circle"><i class="fas fa-check"></i></span>
                    <span>2. Passenger Details</span>
                </div>
                <div class="step-divider"></div>
                <div class="step-progress-item active">
                    <span class="step-circle"><i class="fas fa-check"></i></span>
                    <span>3. Booking Confirmed</span>
                </div>
            </div>

            <!-- Success Card -->
            <div class="success-receipt-card mb-4">
                <div class="success-card-header">
                    <div class="success-check-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <h2 class="text-white fw-bold mb-2" style="font-size: 1.8rem;">Booking Request Received!</h2>
                    <p class="text-white-50 mb-3" style="max-width: 600px; margin: 0 auto; font-size: 14px;">
                        Thank you, <strong class="text-white">{{ $booking->name }}</strong>! Your ride request has been registered. Our coordination team will contact you shortly to confirm the ride and driver allocation.
                    </p>
                    <div class="booking-no-badge">
                        <small class="d-block text-white-50 text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Booking Number</small>
                        <span class="text-white">{{ $booking->booking_no }}</span>
                    </div>
                </div>

                <div class="p-4 p-md-5">
                    @php
                        $tripLabel = 'Local Taxi Service';
                        if (($booking->trip_type ?? '') === 'round_trip') {
                            $tripLabel = 'Round Trip Outstation Taxi';
                        } elseif (($booking->trip_type ?? '') === 'one_way') {
                            $tripLabel = 'One Way Outstation Taxi';
                        }
                    @endphp

                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 pb-3 border-bottom">
                        <div>
                            <h4 class="fw-bold mb-1" style="font-size: 1.3rem;">Ride Summary</h4>
                            <p class="text-muted small mb-0">Review your journey specifications below</p>
                        </div>
                        <span class="badge bg-success px-3 py-2 text-uppercase" style="font-size: 12px; letter-spacing: 0.5px;">
                            <i class="fas fa-clock me-1"></i> {{ strtoupper($booking->status ?? 'Pending') }}
                        </span>
                    </div>

                    <div class="table-responsive mb-4">
                        <table class="table table-bordered details-info-table align-middle">
                            <tbody>
                                <tr>
                                    <th><i class="fas fa-car me-2 text-primary"></i> Service / Trip</th>
                                    <td>
                                        <span class="badge bg-primary me-2" style="background-color: var(--theme-color, #0F766E) !important;">{{ $tripLabel }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-map-marker-alt me-2 text-primary"></i> Pickup Location</th>
                                    <td>{{ $booking->pickup_location }}</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-location-arrow me-2 text-danger"></i> Drop Location</th>
                                    <td>{{ $booking->drop_location }}</td>
                                </tr>
                                <tr>
                                    <th><i class="far fa-calendar-alt me-2 text-primary"></i> Pickup Date & Time</th>
                                    <td>
                                        {{ !empty($booking->ride_date) ? \Carbon\Carbon::parse($booking->ride_date)->format('d M, Y') : 'Flexible' }}
                                        @if(!empty($booking->ride_time))
                                            at {{ \Carbon\Carbon::parse($booking->ride_time)->format('h:i A') }}
                                        @endif
                                    </td>
                                </tr>
                                @if(!empty($booking->return_date) && ($booking->trip_type ?? '') === 'round_trip')
                                <tr>
                                    <th><i class="far fa-calendar-check me-2 text-primary"></i> Return Date & Time</th>
                                    <td>
                                        {{ \Carbon\Carbon::parse($booking->return_date)->format('d M, Y') }}
                                        @if(!empty($booking->return_time))
                                            at {{ \Carbon\Carbon::parse($booking->return_time)->format('h:i A') }}
                                        @endif
                                    </td>
                                </tr>
                                @endif
                                @if(!empty($booking->distance_km) && ($booking->trip_type ?? '') !== 'local')
                                <tr>
                                    <th><i class="fas fa-road me-2 text-primary"></i> Approx. Distance</th>
                                    <td>{{ $booking->distance_km }} km</td>
                                </tr>
                                @endif
                                <tr>
                                    <th><i class="far fa-user me-2 text-primary"></i> Passenger Name</th>
                                    <td>{{ $booking->name }}</td>
                                </tr>
                                <tr>
                                    <th><i class="far fa-phone me-2 text-primary"></i> Contact Number</th>
                                    <td>+91 {{ $booking->phone }}</td>
                                </tr>
                                <tr>
                                    <th><i class="far fa-envelope me-2 text-primary"></i> Email Address</th>
                                    <td>{{ $booking->email }}</td>
                                </tr>
                                @if(!empty($booking->note))
                                <tr>
                                    <th><i class="far fa-comment-alt me-2 text-primary"></i> Landmark / Note</th>
                                    <td>{{ $booking->note }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th><i class="fas fa-hand-holding-dollar me-2 text-success"></i> Payment Method</th>
                                    <td>
                                        <span class="text-success fw-bold">Pay to Driver upon completion</span>
                                        <small class="d-block text-muted">Cash or UPI accepted. Zero advance payment required.</small>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-tag me-2 text-primary"></i> Fare Details</th>
                                    <td>
                                        <span class="badge bg-warning text-dark mb-1">Affordable Pricing</span>
                                        <div class="small text-muted">
                                            Final fare will be discussed and confirmed over call or WhatsApp based on your vehicle choice.
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Instant WhatsApp / Call Actions -->
                    <div class="action-cta-box text-center mb-4">
                        <h5 class="fw-bold mb-2">Want Instant Confirmation or Custom Vehicle?</h5>
                        <p class="text-muted small mb-3">Connect directly with our 24x7 helpdesk on WhatsApp or Call for priority cab allocation.</p>
                        <div class="d-flex justify-content-center flex-wrap gap-3">
                            <a href="{{ route('booking.whatsapp', $booking->id) }}" target="_blank" class="whatsapp-cta-btn">
                                <i class="fab fa-whatsapp fa-lg"></i> Confirm on WhatsApp
                            </a>
                            <a href="tel:+919452667708" class="btn btn-outline-dark px-4 py-2 d-inline-flex align-items-center gap-2" style="font-weight: 600;">
                                <i class="fas fa-phone-alt"></i> Call +91 9452667708
                            </a>
                            <a href="/" class="btn btn-light border px-4 py-2 d-inline-flex align-items-center gap-2" style="font-weight: 600;">
                                <i class="fas fa-home"></i> Back to Home
                            </a>
                        </div>
                    </div>

                    <!-- Trust Points -->
                    <div class="row g-3 text-muted small pt-2 border-top">
                        <div class="col-sm-6 col-md-3 d-flex align-items-center gap-2">
                            <i class="fas fa-shield-alt text-success fa-lg"></i>
                            <span>Verified Drivers</span>
                        </div>
                        <div class="col-sm-6 col-md-3 d-flex align-items-center gap-2">
                            <i class="fas fa-snowflake text-primary fa-lg"></i>
                            <span>100% Sanitized AC Cabs</span>
                        </div>
                        <div class="col-sm-6 col-md-3 d-flex align-items-center gap-2">
                            <i class="fas fa-clock text-warning fa-lg"></i>
                            <span>On-Time Pickup</span>
                        </div>
                        <div class="col-sm-6 col-md-3 d-flex align-items-center gap-2">
                            <i class="fas fa-wallet text-success fa-lg"></i>
                            <span>No Advance Needed</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!--======== footer =========-->
    @include('front-end.layouts.footer')
</body>

</html>