@extends('front-end.layouts.master')

@section('title', ($tour->title ? $tour->title : 'Tour Package') . ' (' . ($tour->duration ?: 'Tour Package') . ') - Vrinda Taxi Service')

@section('content')
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb ng-mt" style="background: url('{{ $tour->banner_image ? asset('uploads/tours/'.$tour->banner_image) : asset('vrinda-taxi/assets/img/breadcrumb/01.jpg') }}') center/cover no-repeat;">
            <div class="container">
                <h1 class="breadcrumb-title" style="font-size: 2.2rem;">{{ $tour->title ?: ($tour->location . ' Tour') }}</h1>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('package') }}">Tour Packages</a></li>
                    <li class="active">{{ Str::limit($tour->title, 40) }}</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <div class="service-single py-120">
            <div class="container">
                <div class="service-single-wrap">
                    <div class="row">
                        <!-- Dynamic Sidebar -->
                        <div class="col-xl-4 col-lg-4">
                            @include('front-end.layouts.service-sidebar', ['currentTourId' => $tour->id, 'currentTour' => $tour])
                        </div>

                        <!-- Tour Package Main Details -->
                        <div class="col-xl-8 col-lg-8">
                            <div class="service-details">
                                @if($tour->featured_image)
                                    <div class="mb-30">
                                        <img src="{{ asset('uploads/tours/'.$tour->featured_image) }}" 
                                             alt="{{ $tour->title }}" 
                                             class="img-fluid rounded-4 shadow-sm w-100" 
                                             style="max-height: 480px; object-fit: cover;">
                                    </div>
                                @elseif($tour->banner_image)
                                    <div class="mb-30">
                                        <img src="{{ asset('uploads/tours/'.$tour->banner_image) }}" 
                                             alt="{{ $tour->title }}" 
                                             class="img-fluid rounded-4 shadow-sm w-100" 
                                             style="max-height: 480px; object-fit: cover;">
                                    </div>
                                @endif

                                <div class="content">
                                    <div class="tour-header-meta d-flex flex-wrap align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                        <div>
                                            <h2 class="blog-details-title mb-2" style="font-size: 1.85rem; font-weight: 700;">
                                                {{ $tour->title }}
                                            </h2>
                                            <div class="d-flex flex-wrap gap-3 text-muted align-items-center" style="font-size: 15px;">
                                                @if($tour->location)
                                                    <span class="me-3">
                                                        <i class="far fa-map-marker-alt text-primary me-1" style="color: var(--theme-color, #0F766E) !important;"></i> 
                                                        <strong>Location:</strong> {{ $tour->location }}
                                                    </span>
                                                @endif
                                                @if($tour->duration)
                                                    <span>
                                                        <i class="far fa-clock text-primary me-1" style="color: var(--theme-color, #0F766E) !important;"></i> 
                                                        <strong>Duration:</strong> {{ $tour->duration }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mt-3 mt-md-0">
                                            @php
                                                $waDirectText = "Hello, I want to book the tour package: {$tour->title} (ID: {$tour->id}) on Vrinda Taxi Service.";
                                            @endphp
                                            <a href="https://wa.me/919452667708?text={{ urlencode($waDirectText) }}" 
                                               target="_blank" 
                                               class="theme-btn btn-sm text-white" 
                                               style="background-color: #25D366; border-color: #25D366;">
                                                <i class="fab fa-whatsapp me-1"></i> Quick WhatsApp
                                            </a>
                                        </div>
                                    </div>

                                    @if(isset($itineraries) && $itineraries->count() > 0)
                                        <div class="itinerary-section mt-4">
                                            <h4 class="mb-3" style="font-weight: 700;">
                                                <i class="far fa-calendar-check text-primary me-2" style="color: var(--theme-color, #0F766E) !important;"></i> Detailed Itinerary
                                            </h4>

                                            <div class="accordion" id="tourAccordion">
                                                @foreach($itineraries as $key => $itinerary)
                                                    <div class="accordion-item mb-2 border rounded overflow-hidden">
                                                        <h2 class="accordion-header" id="heading{{ $key }}">
                                                            <button class="accordion-button {{ $key != 0 ? 'collapsed' : '' }} fw-bold"
                                                                    type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse{{ $key }}"
                                                                    aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                                                    aria-controls="collapse{{ $key }}"
                                                                    style="font-size: 16px;">
                                                                <span class="badge bg-primary me-2 px-2 py-1" style="background-color: var(--theme-color, #0F766E) !important;">Day {{ $itinerary->day_number }}</span>
                                                                {{ $itinerary->title }}
                                                            </button>
                                                        </h2>

                                                        <div id="collapse{{ $key }}"
                                                            class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                                            aria-labelledby="heading{{ $key }}"
                                                            data-bs-parent="#tourAccordion">
                                                            <div class="accordion-body bg-light text-dark" style="font-size: 15px; line-height: 1.7;">
                                                                {{ $itinerary->description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Includes & Excludes -->
                                    @if((isset($inclusions) && $inclusions->count() > 0) || (isset($exclusions) && $exclusions->count() > 0))
                                        <hr class="mt-4">
                                        <div class="row mt-4 g-4">
                                            @if(isset($inclusions) && $inclusions->count() > 0)
                                                <div class="col-md-6">
                                                    <div class="p-3 bg-light rounded-3 h-100 border">
                                                        <h5 class="text-success mb-3 fw-bold">
                                                            <i class="fas fa-check-circle me-2"></i> Package Includes
                                                        </h5>
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach($inclusions as $inclusion)
                                                                <li class="mb-2 d-flex align-items-start" style="font-size: 15px;">
                                                                    <i class="fas fa-check text-success me-2 mt-1"></i>
                                                                    <span>{{ $inclusion->item }}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif

                                            @if(isset($exclusions) && $exclusions->count() > 0)
                                                <div class="col-md-6">
                                                    <div class="p-3 bg-light rounded-3 h-100 border">
                                                        <h5 class="text-danger mb-3 fw-bold">
                                                            <i class="fas fa-times-circle me-2"></i> Package Excludes
                                                        </h5>
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach($exclusions as $exclusion)
                                                                <li class="mb-2 d-flex align-items-start" style="font-size: 15px;">
                                                                    <i class="fas fa-times text-danger me-2 mt-1"></i>
                                                                    <span>{{ $exclusion->item }}</span>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @endif

                                    <!-- Why Travel With Vrinda Taxi Box -->
                                    <div class="mt-4 p-4 rounded-3 border" style="background: #fafafa;">
                                        <h5 class="fw-bold mb-3">Why Choose Vrinda Taxi Service?</h5>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-car text-primary me-2" style="color: var(--theme-color, #0F766E) !important; font-size: 1.25rem;"></i>
                                                    <span>Clean, Sanitized AC Cabs</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-user-shield text-primary me-2" style="color: var(--theme-color, #0F766E) !important; font-size: 1.25rem;"></i>
                                                    <span>Verified & Polite Chauffeurs</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-tag text-primary me-2" style="color: var(--theme-color, #0F766E) !important; font-size: 1.25rem;"></i>
                                                    <span>Transparent Fares, No Hidden Costs</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-map-marked-alt text-primary me-2" style="color: var(--theme-color, #0F766E) !important; font-size: 1.25rem;"></i>
                                                    <span>Doorstep Pickup & Flexible Timing</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bottom Call to Action -->
                                    <div class="text-center mt-5 p-4 rounded-4 text-white" style="background: linear-gradient(135deg, #0F766E 0%, #115E59 100%);">
                                        <h3 class="text-white mb-2" style="font-weight: 700;">Ready to Book {{ $tour->title }}?</h3>
                                        <p class="text-white-50 mb-4" style="max-width: 600px; margin: 0 auto 1.5rem auto;">
                                            Experience a peaceful and hassle-free spiritual pilgrimage in Vrindavan & Mathura. Contact us right now for instant confirmation.
                                        </p>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            @php
                                                $waBookingMsg = "Hello, I am interested in booking the tour package: {$tour->title} (ID: {$tour->id}). Please share the best quote and vehicle options.";
                                            @endphp
                                            <a href="https://wa.me/919452667708?text={{ urlencode($waBookingMsg) }}" 
                                               target="_blank" 
                                               class="theme-btn btn-success" 
                                               style="background-color: #25D366; border-color: #25D366; font-weight: 600;">
                                                Book on WhatsApp <i class="fab fa-whatsapp ms-1"></i>
                                            </a>
                                            <a href="tel:+919452667708" class="theme-btn btn-light text-dark" style="font-weight: 600;">
                                                <i class="fas fa-phone-alt me-1"></i> Call +91 9452667708
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
