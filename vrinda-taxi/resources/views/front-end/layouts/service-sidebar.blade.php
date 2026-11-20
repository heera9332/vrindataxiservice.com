<div class="service-sidebar">
    {{-- Widget 1: Tour Packages (Dynamic) --}}
    @if(isset($tourPackages) && $tourPackages->count() > 0)
    <div class="widget">
        <h4 class="title">Our Tour Packages</h4>
        <div class="category">
            @foreach($tourPackages as $pkg)
                @php
                    $isCurrentTour = (isset($currentTourId) && $currentTourId == $pkg->id) 
                                  || (isset($tour) && $tour->id == $pkg->id);
                @endphp
                <a href="{{ route('tour-packages.show', $pkg->id) }}" 
                   class="{{ $isCurrentTour ? 'active text-primary fw-bold' : '' }}"
                   style="{{ $isCurrentTour ? 'color: var(--theme-color, #0F766E) !important; font-weight: 700; background: rgba(15, 118, 110, 0.08); padding-left: 10px; border-radius: 6px;' : '' }}">
                    <i class="far {{ $isCurrentTour ? 'fa-arrow-circle-right text-primary' : 'fa-angle-double-right' }}"></i>
                    {{ $pkg->title }}
                    @if($pkg->duration)
                        <span class="badge bg-light text-secondary border float-end ms-1" style="font-size: 11px;">{{ $pkg->duration }}</span>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
    @endif

    {{-- Widget 2: All Services (Dynamic from CMS & Core Routes) --}}
    <div class="widget">
        <h4 class="title">All Services</h4>
        <div class="category" style="max-height: 480px; overflow-y: auto; padding-right: 5px;">
            {{-- Dynamic Services from CMS (Category: Services) --}}
            @if(isset($servicesPosts) && $servicesPosts->count() > 0)
                @foreach($servicesPosts as $srv)
                    <a href="{{ url($srv->slug) }}">
                        <i class="far fa-angle-double-right"></i> {{ $srv->title }}
                    </a>
                @endforeach
            @endif

            {{-- Core Platform Taxi Services with Verified URLs --}}
            <a href="{{ url('/vrindavan-sightseeing') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan Sightseeing Taxi
            </a>
            <a href="{{ url('/outstation-taxi') }}">
                <i class="far fa-angle-double-right"></i> Outstation Taxi Service
            </a>
            <a href="{{ url('/airport-taxi') }}">
                <i class="far fa-angle-double-right"></i> Airport Taxi Service
            </a>
            <a href="{{ route('package') }}">
                <i class="far fa-angle-double-right"></i> All Braj Tour Packages
            </a>
            <a href="{{ url('/mathura') }}">
                <i class="far fa-angle-double-right"></i> Mathura & Vrindavan Darshan
            </a>
            <a href="{{ url('/vrindavan-to-delhi-airport-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Delhi Airport Pick & Drop
            </a>
            <a href="{{ url('/vrindavan-to-jewar-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Jewar Airport Taxi
            </a>
            <a href="{{ url('/vrindavan-to-delhi-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan to Delhi Taxi
            </a>
            <a href="{{ url('/vrindavan-to-agra') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan to Agra Taj Mahal Cab
            </a>
            <a href="{{ url('/vrindavan-to-rishikesh-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan to Rishikesh Taxi
            </a>
            <a href="{{ url('/vrindavan-to-haridwar-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan to Haridwar Taxi
            </a>
            <a href="{{ url('/khatoo-shyam') }}">
                <i class="far fa-angle-double-right"></i> Khatu Shyam Ji Taxi Service
            </a>
            <a href="{{ url('/vrindavan-to-ayodhya-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan to Ayodhya Taxi
            </a>
            <a href="{{ url('/vrindavan-to-jaipur-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan to Jaipur Taxi
            </a>
            <a href="{{ url('/vrindavan-to-braj-yatra-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Complete Braj 84 Kos Yatra
            </a>
            <a href="{{ url('/vrindavan-to-parikrama-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Govardhan Parikrama Taxi
            </a>
            <a href="{{ url('/vrindavan-to-crysta-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Innova Crysta Taxi Service
            </a>
            <a href="{{ url('/vrindavan-to-local-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan Local Taxi Service
            </a>
            <a href="{{ url('/vrindavan-to-private-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan Private Car Rental
            </a>
            <a href="{{ url('/vrindavan-to-tourist-taxi-service') }}">
                <i class="far fa-angle-double-right"></i> Vrindavan Tourist Cab
            </a>

            {{-- Dynamic Route Posts from CMS (Category: Book Taxi) --}}
            @if(isset($bookTaxiPosts) && $bookTaxiPosts->count() > 0)
                @foreach($bookTaxiPosts as $bt)
                    <a href="{{ url($bt->slug) }}">
                        <i class="far fa-angle-double-right"></i> {{ $bt->title }}
                    </a>
                @endforeach
            @endif
        </div>
    </div>

    {{-- Widget 3: Need Assistance & Quick Booking Card --}}
    <div class="widget">
        <h4 class="title">Need Assistance?</h4>
        <div class="service-sidebar-help text-center p-4 rounded" style="background: #f8fafc; border: 1px solid #e2e8f0;">
            <div class="mb-3">
                <span class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 55px; height: 55px; background: rgba(15, 118, 110, 0.1); color: var(--theme-color, #0F766E);">
                    <i class="far fa-headset fa-2x"></i>
                </span>
            </div>
            <h5 class="mb-2" style="font-size: 1.1rem; font-weight: 600;">24/7 Pilgrimage Support</h5>
            <p class="text-muted small mb-3">Speak directly with our local travel expert for immediate booking & custom quotes.</p>
            
            <a href="tel:+919452667708" class="theme-btn w-100 mb-2 py-2 d-block text-center" style="font-size: 14px;">
                <i class="fas fa-phone-alt me-1"></i> +91 9452667708
            </a>
            
            @php
                $waTourTitle = isset($tour) ? $tour->title : (isset($currentTour) ? $currentTour->title : 'Tour Package');
                $waTourId = isset($tour) ? $tour->id : (isset($currentTourId) ? $currentTourId : '');
                $waText = "Hello, I want to inquire about " . $waTourTitle . ($waTourId ? " (Package ID: {$waTourId})" : "") . " on Vrinda Taxi Service.";
            @endphp
            <a href="https://wa.me/919452667708?text={{ urlencode($waText) }}" 
               target="_blank" 
               class="theme-btn w-100 py-2 d-block text-center text-white" 
               style="background-color: #25D366; border-color: #25D366; font-size: 14px;">
                <i class="fab fa-whatsapp me-1"></i> WhatsApp Booking
            </a>

            <div class="mt-3 pt-3 border-top text-start">
                <ul class="list-unstyled mb-0 small text-muted">
                    <li class="mb-1"><i class="fas fa-check-circle text-success me-1"></i> Sanitized AC Vehicles</li>
                    <li class="mb-1"><i class="fas fa-check-circle text-success me-1"></i> Verified Local Drivers</li>
                    <li><i class="fas fa-check-circle text-success me-1"></i> Doorstep Pickup & Drop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
