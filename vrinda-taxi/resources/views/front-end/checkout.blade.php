<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Checkout | Passenger Information - Vrinda Taxi Service</title>
    <meta name="description" content="Complete your taxi booking with Vrinda Taxi Service. Enter your passenger details and confirm your ride with sanitized AC cabs and verified drivers." />
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

    <style>
        .checkout-page-wrapper {
            background-color: #f8fafc;
        }
        .step-progress-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 2.5rem;
            gap: 15px;
            flex-wrap: wrap;
        }
        .step-progress-item {
            display: flex;
            align-items: center;
            font-size: 15px;
            font-weight: 600;
            color: #64748b;
        }
        .step-progress-item.completed {
            color: #10b981;
        }
        .step-progress-item.active {
            color: var(--theme-color, #0F766E);
        }
        .step-circle {
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
        .step-progress-item.completed .step-circle {
            background: #10b981;
            color: #fff;
        }
        .step-progress-item.active .step-circle {
            background: var(--theme-color, #0F766E);
            color: #fff;
            box-shadow: 0 0 0 4px rgba(15, 118, 110, 0.2);
        }
        .step-divider {
            width: 40px;
            height: 2px;
            background: #cbd5e1;
        }
        .checkout-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 16px rgba(0,0,0,0.04);
        }
        .summary-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 16px rgba(0,0,0,0.04);
            position: sticky;
            top: 100px;
        }
        .route-stop {
            position: relative;
            padding-left: 28px;
            margin-bottom: 16px;
        }
        .route-stop::before {
            content: '';
            position: absolute;
            left: 7px;
            top: 22px;
            bottom: -16px;
            width: 2px;
            background: #cbd5e1;
        }
        .route-stop:last-child::before {
            display: none;
        }
        .route-marker {
            position: absolute;
            left: 0;
            top: 2px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #fff;
            border: 4px solid var(--theme-color, #0F766E);
        }
        .route-marker.drop {
            border-color: #ef4444;
        }
        .trust-feature-badge {
            background: #f1f5f9;
            border-radius: 10px;
            padding: 12px 14px;
            font-size: 13px;
            font-weight: 500;
            color: #334155;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .fare-highlight-box {
            background: linear-gradient(135deg, #0F766E 0%, #115E59 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!--===== header ==========-->
    @include('front-end.layouts.header')

    <main class="main checkout-page-wrapper py-5">
        <!-- breadcrumb -->
        <div class="site-breadcrumb ng-mt mb-4" style="background: url('{{ asset('vrinda-taxi/assets/img/breadcrumb/01.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <h1 class="breadcrumb-title" style="font-size: 2.2rem;">Booking Checkout</h1>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">Checkout & Passenger Details</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <div class="container py-4">

            <!-- Stepper -->
            <div class="step-progress-bar">
                <div class="step-progress-item completed">
                    <span class="step-circle"><i class="fas fa-check"></i></span>
                    <span>1. Select Ride</span>
                </div>
                <div class="step-divider"></div>
                <div class="step-progress-item active">
                    <span class="step-circle">2</span>
                    <span>2. Passenger Details</span>
                </div>
                <div class="step-divider"></div>
                <div class="step-progress-item">
                    <span class="step-circle">3</span>
                    <span>3. Booking Confirmed</span>
                </div>
            </div>

            <div class="row g-4">
                <!-- Left: Customer Information Form (Step 2) -->
                <div class="col-lg-7">
                    <div class="checkout-card p-4 p-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" 
                                  style="width: 44px; height: 44px; background: rgba(15, 118, 110, 0.1); color: var(--theme-color, #0F766E);">
                                <i class="fas fa-user-edit fa-lg"></i>
                            </span>
                            <div>
                                <h3 class="fw-bold mb-1" style="font-size: 1.5rem;">Customer Information</h3>
                                <p class="text-muted small mb-0">Please enter passenger details so our driver and support team can coordinate your ride.</p>
                            </div>
                        </div>

                        <hr class="mb-4">

                        @if ($errors->any())
                            <div class="alert alert-danger rounded-3 mb-4">
                                <ul class="mb-0 small">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('booking.confirm') }}" id="checkoutConfirmForm">
                            @csrf

                            <!-- Hidden Journey Parameters -->
                            <input type="hidden" name="trip_type" value="{{ $draft['trip_type'] ?? 'one_way' }}">
                            <input type="hidden" name="pickup_location" value="{{ $draft['pickup_location'] ?? '' }}">
                            <input type="hidden" name="drop_location" value="{{ $draft['drop_location'] ?? '' }}">
                            <input type="hidden" name="ride_date" value="{{ $draft['ride_date'] ?? '' }}">
                            <input type="hidden" name="return_date" value="{{ $draft['return_date'] ?? '' }}">
                            <input type="hidden" name="distance_km" value="{{ $draft['distance_km'] ?? 0 }}">
                            <input type="hidden" name="fare" value="{{ $draft['fare'] ?? 300 }}">

                            <div class="row g-3">
                                <!-- Full Name -->
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label class="form-label fw-bold" style="font-size: 14px;">
                                            Full Name <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="far fa-user text-muted"></i></span>
                                            <input type="text"
                                                   name="name"
                                                   class="form-control border-start-0 ps-0"
                                                   placeholder="Enter your full name"
                                                   value="{{ old('name', $draft['name'] ?? '') }}"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile Number -->
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label class="form-label fw-bold" style="font-size: 14px;">
                                            Mobile Number (WhatsApp) <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="far fa-phone text-muted"></i></span>
                                            <input type="tel"
                                                   name="phone"
                                                   class="form-control border-start-0 ps-0"
                                                   placeholder="10-digit mobile number"
                                                   maxlength="10"
                                                   pattern="[0-9]{10}"
                                                   value="{{ old('phone', $draft['phone'] ?? '') }}"
                                                   required>
                                        </div>
                                        <small class="text-muted" style="font-size: 11px;">Our chauffeur will call this number prior to arrival.</small>
                                    </div>
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label class="form-label fw-bold" style="font-size: 14px;">
                                            Email Address <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light border-end-0"><i class="far fa-envelope text-muted"></i></span>
                                            <input type="email"
                                                   name="email"
                                                   class="form-control border-start-0 ps-0"
                                                   placeholder="name@example.com"
                                                   value="{{ old('email', $draft['email'] ?? '') }}"
                                                   required>
                                        </div>
                                        <small class="text-muted" style="font-size: 11px;">Booking confirmation & receipt sent here.</small>
                                    </div>
                                </div>

                                <!-- Special Instructions / Landmark -->
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label fw-bold" style="font-size: 14px;">
                                            Pickup Landmark or Instructions <small class="text-muted fw-normal">(Optional)</small>
                                        </label>
                                        <textarea name="note"
                                                  class="form-control"
                                                  rows="2"
                                                  placeholder="e.g., Near Chaar Dham Mandir / Hotel name / Flight or Train number...">{{ old('note', $draft['note'] ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Trust Badges -->
                            <div class="row g-2 mb-4 pt-2">
                                <div class="col-sm-6">
                                    <div class="trust-feature-badge">
                                        <i class="fas fa-shield-check text-success fa-lg"></i>
                                        <span>Verified & Licensed Drivers</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="trust-feature-badge">
                                        <i class="fas fa-hand-holding-dollar text-success fa-lg"></i>
                                        <span>No Advance Payment Required</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="trust-feature-badge">
                                        <i class="fas fa-car-side text-success fa-lg"></i>
                                        <span>Sanitized AC Vehicles</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="trust-feature-badge">
                                        <i class="fas fa-clock text-success fa-lg"></i>
                                        <span>Guaranteed On-Time Pickup</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Proceed Button -->
                            <button type="submit" class="theme-btn w-100 py-3 text-center shadow" style="font-size: 17px; font-weight: 700;">
                                Proceed & Confirm Booking <i class="fas fa-arrow-right ms-2"></i>
                            </button>

                            <p class="text-center text-muted small mt-3 mb-0">
                                <i class="fas fa-lock me-1"></i> Your information is safe & encrypted. Pay directly to driver via Cash/UPI upon journey completion.
                            </p>
                        </form>
                    </div>
                </div>

                <!-- Right: Ride Summary & Estimated Fare -->
                <div class="col-lg-5">
                    <div class="summary-card p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                            <h4 class="fw-bold mb-0" style="font-size: 1.25rem;">
                                <i class="fas fa-receipt text-primary me-2" style="color: var(--theme-color, #0F766E) !important;"></i> Ride Summary
                            </h4>
                            @php
                                $tripBadge = 'One Way';
                                if(($draft['trip_type'] ?? '') === 'round_trip') {
                                    $tripBadge = 'Round Trip';
                                } elseif(($draft['trip_type'] ?? '') === 'local') {
                                    $tripBadge = 'Local Taxi';
                                }
                            @endphp
                            <span class="badge bg-primary px-3 py-2 text-uppercase fw-bold" style="background-color: var(--theme-color, #0F766E) !important; font-size: 11px;">
                                {{ $tripBadge }}
                            </span>
                        </div>

                        <!-- Route Visualizer -->
                        <div class="route-timeline mb-4 p-3 bg-light rounded-3 border">
                            <div class="route-stop">
                                <span class="route-marker"></span>
                                <small class="text-muted d-block text-uppercase" style="font-size: 11px; font-weight: 600;">Pickup Location</small>
                                <span class="fw-bold text-dark" style="font-size: 15px;">{{ $draft['pickup_location'] ?? 'Vrindavan' }}</span>
                            </div>
                            <div class="route-stop">
                                <span class="route-marker drop"></span>
                                <small class="text-muted d-block text-uppercase" style="font-size: 11px; font-weight: 600;">Drop off Location</small>
                                <span class="fw-bold text-dark" style="font-size: 15px;">{{ $draft['drop_location'] ?? 'Mathura' }}</span>
                            </div>
                        </div>

                        <!-- Date & Schedule Details -->
                        <div class="schedule-details mb-3 small">
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-muted"><i class="far fa-calendar-alt me-1 text-primary"></i> Pickup Date & Time:</span>
                                <span class="fw-bold text-dark">
                                    {{ !empty($draft['ride_date']) ? \Carbon\Carbon::parse($draft['ride_date'])->format('d M, Y \a\t h:i A') : 'Flexible' }}
                                </span>
                            </div>

                            @if(!empty($draft['return_date']) && ($draft['trip_type'] ?? '') === 'round_trip')
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-muted"><i class="far fa-calendar-check me-1 text-primary"></i> Return Date & Time:</span>
                                <span class="fw-bold text-dark">
                                    {{ \Carbon\Carbon::parse($draft['return_date'])->format('d M, Y \a\t h:i A') }}
                                </span>
                            </div>
                            @endif

                            @if(!empty($draft['distance_km']))
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-muted"><i class="fas fa-road me-1 text-primary"></i> Approx. Distance:</span>
                                <span class="fw-bold text-dark">
                                    {{ $draft['distance_km'] }} km 
                                    @if(($draft['trip_type'] ?? '') === 'round_trip')
                                        <small class="text-muted">({{ $draft['total_distance'] ?? ($draft['distance_km'] * 2) }} km billed)</small>
                                    @endif
                                </span>
                            </div>
                            @endif
                        </div>

                        <!-- Fare Highlight Card -->
                        <div class="fare-highlight-box mb-3 text-center">
                            <span class="text-white-50 text-uppercase small fw-bold">Estimated Fare</span>
                            <h2 class="text-white fw-bold my-1">₹{{ number_format($draft['fare'] ?? 300) }}</h2>
                            <small class="text-white-50 d-block" style="font-size: 12px;">
                                Includes AC Taxi, Driver Allowance & Fuel. No hidden charges.
                            </small>
                        </div>

                        <!-- Change Route Link -->
                        <div class="text-center mb-3">
                            <a href="/#book-now-form" class="small text-muted text-decoration-underline">
                                <i class="fas fa-edit me-1"></i> Change Route or Schedule
                            </a>
                        </div>

                        <!-- Quick Support Box -->
                        <div class="pt-3 border-top text-center">
                            <small class="text-muted d-block mb-2">Need help or customized requirements?</small>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="tel:+919452667708" class="btn btn-outline-dark btn-sm py-1 px-3">
                                    <i class="fas fa-phone-alt me-1 text-primary"></i> Call Support
                                </a>
                                @php
                                    $waCheckoutText = "Hello, I am on the booking checkout page for ride from " . ($draft['pickup_location'] ?? '') . " to " . ($draft['drop_location'] ?? '') . ". Need quick assistance.";
                                @endphp
                                <a href="https://wa.me/919452667708?text={{ urlencode($waCheckoutText) }}" target="_blank" class="btn btn-success btn-sm py-1 px-3 text-white" style="background-color: #25D366; border-color: #25D366;">
                                    <i class="fab fa-whatsapp me-1"></i> WhatsApp
                                </a>
                            </div>
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
