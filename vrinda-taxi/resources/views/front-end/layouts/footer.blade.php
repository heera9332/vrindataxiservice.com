 <!-- footer area -->
 <footer class="footer-area footer-2 pb-40">
     <div class="footer-shape">
         <img src="{{ asset('vrinda-taxi/assets/img/shape/02.png') }}" alt="" />
     </div>
     <div class="footer-widget">
         <div class="container">
             <div class="footer-widget-wrap pt-140 pb-50">
                 <div class="row g-4">


                     <div class="col-lg-4">
                         <div class="footer-widget-box about-us">
                             <a href="/" class="footer-logo">
                                 <img src="{{ asset('vrinda-taxi/assets/img/logo/logo.png') }}" alt="Vrinda Taxi Service" />
                             </a>
                             <p>
                                 Company Name: Vrinda Taxi Service<br>
                                 Founder: Advocate Ashwani Mishra<br>
                                 Services: Local & Outstation, Airport, Corporate, Group<br>
                                 Fleet Size: 20+ Vehicles<br>
                                 Service Area: Mathura, Vrindavan
                             </p>

                             <div class="footer-payment mt-30">
                                 <h4>We Accept Payment Gateway</h4>
                                 <div class="payment-wrap">
                                     <div class="payment-img">
                                         <img class="paypal" src="{{ asset('vrinda-taxi/assets/img/payment/1.png') }}" alt="" />
                                     </div>
                                     <div class="payment-img">
                                         <img class="master" src="{{ asset('vrinda-taxi/assets/img/payment/2.png') }}" alt="" />
                                     </div>
                                     <div class="payment-img">
                                         <img class="visa" src="{{ asset('vrinda-taxi/assets/img/payment/3.png') }}" alt="" />
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-2">
                         <div class="footer-widget-box list">
                             <h4 class="footer-widget-title">Quick Links</h4>
                             <ul class="footer-list">
                                 <li>
                                     <a href="/"><i class="far fa-angle-double-right"></i>Home</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('about') }}"><i class="far fa-angle-double-right"></i>About Us</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('package') }}"><i class="far fa-angle-double-right"></i>Tour Packages</a>
                                 </li>

                                 <li>
                                    <a href="#footerServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="footerServices" class="d-flex align-items-center justify-content-between">
                                        <span><i class="far fa-angle-double-right"></i>Services</span>
                                        <i class="fas fa-angle-down zero-opacity-on-open style-arrow" style="font-size: 11px; margin-left: 5px;"></i>
                                    </a>
                                    
                                    <ul class="collapse list-unstyled ps-3 mt-1" id="footerServices">
                                        <li class="mb-1">
                                            <a href="{{ url('/airport-taxi') }}" style="font-size: 13px; opacity: 0.8;"><i class="far fa-circle font-xs me-2" style="font-size: 8px;"></i>Airport Taxi</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="{{ url('/outstation-taxi') }}" style="font-size: 13px; opacity: 0.8;"><i class="far fa-circle font-xs me-2" style="font-size: 8px;"></i>Outstation Taxi</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/vrindavan-sightseeing') }}" style="font-size: 13px; opacity: 0.8;"><i class="far fa-circle font-xs me-2" style="font-size: 8px;"></i>Sightseeing</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                 <li>
                                     <a href="{{ route('contact') }}"><i class="far fa-angle-double-right"></i>Contact Us</a>
                                 </li>

                                 
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-3">
                         <div class="footer-widget-box list">
                             <h4 class="footer-widget-title">Our Location</h4>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.899276004841!2d77.6331019!3d27.565636299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39736dcb5cc1efd5%3A0x3b032bac4c841569!2sVrinda%20Taxi%20Service%20-%20Best%20Taxi%20%26%20Cab%20Service%20in%20Vrindavan%20%7C%20Local%20%26%20Outstation%20Car%20Rental%20Services!5e0!3m2!1sen!2sin!4v1771939850786!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                     </div>
                     <div class="col-lg-3">
                         <div class="footer-widget-box">
                             <h4 class="footer-widget-title">Get In Touch</h4>
                             <ul class="footer-contact">
                                 <li>
                                     <div class="icon">
                                         <i class="far fa-location-dot"></i>
                                     </div>
                                     <div class="content">
                                         <h5>Our Address</h5>
                                         <p>Shop No. 1 Gali No. 1, opposite Chaar Dham Mandir, Vrindavan, Allhepur, Uttar Pradesh 281121</p>
                                     </div>
                                 </li>
                                 <li>
                                     <div class="icon">
                                         <i class="far fa-phone"></i>
                                     </div>
                                     <div class="content">
                                         <h5>Call Us</h5>
                                         <a href="tel:+919452667708">+91 9452667708</a>
                                     </div>
                                 </li>
                                 <li>
                                     <div class="icon">
                                         <i class="far fa-envelope"></i>
                                     </div>
                                     <div class="content">
                                         <h5>Mail Us</h5>
                                         <a href="mailto:help@vrindataxiservice.com"><span class="__cf_email__">help@vrindataxiservice.com</span></a>
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="copyright">
             <div class="row">
                 <div class="col-md-8 align-self-center">
                     <p class="copyright-text">&copy; Copyright <span id="date"></span> <a href="https://www.vrindavandigitalmarketing.com/" target="_blank"> Vrinda Taxi Service All Rights Reserved. Design By Vrindavan Digital Marketing</a> </p>
                 </div>
                 <div class="col-md-4 align-self-center">
                     <ul class="footer-social">
                         <li>
                             <a href="https://www.facebook.com/people/Vrinda-Taxi-Service/61583797915955/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                         </li>
                         <li>
                             <a href="https://x.com/vrindataxi" target="_blank"><i class="fab fa-x-twitter"></i></a>
                         </li>
                         <li>
                             <a href="https://www.linkedin.com/in/vrinda-taxi-service-6b70ba3b4/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                         </li>
                         <li>
                             <a href="https://www.instagram.com/vrindataxiservice/" target="_blank"><i class="fab fa-instagram"></i></a>
                         </li>
                         
                          <li>
                             <a href="https://in.pinterest.com/vrindataxiservice/" target="_blank"><i class="fab fa-pinterest"></i></a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer area end -->

 <!-- scroll-top -->
 <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
 <!-- scroll-top end -->

 <!-- js -->
 <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/jquery-3.7.1.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/jquery.appear.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/counter-up.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/wow.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/slimselect.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/flatpickr.min.js') }}"></script>
 <script src="{{ asset('vrinda-taxi/assets/js/main.js') }}"></script>
 <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"1190e059c5bc497bafd35e121aae37b1","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
 <!-- Floating Actions (Left Side: Book Now, Call, WhatsApp) -->
 <div class="floating-left-actions">
     <!-- Book Now Button -->
     <a href="/#book-now-form" id="floatingBookNowBtn" class="floating-action-btn book-btn" onclick="scrollToBookingForm(event)" title="Book Your Ride">
         <i class="fas fa-taxi"></i>
         <span>Book Now</span>
     </a>

     <!-- Quick Contact Sub-group (Call & WhatsApp) -->
     <div class="floating-contact-sub">
         <!-- Call Button -->
         <a href="tel:+919452667708" class="floating-action-btn call-btn" title="Call Us">
             <i class="bi bi-telephone-fill"></i>
             <span class="btn-label">Call Us</span>
         </a>

         <!-- WhatsApp Button -->
         <a href="https://wa.me/919452667708" target="_blank" class="floating-action-btn whatsapp-btn" title="WhatsApp Us">
             <i class="bi bi-whatsapp"></i>
             <span class="btn-label">WhatsApp</span>
         </a>
     </div>
 </div>

 <!-- Mobile Quick Action Bar (Sticky Bottom Bar for Mobile Devices) -->
 <aside class="mobile-quick-bar" id="mobileQuickBar" aria-label="Mobile Quick Booking Bar">
   <a href="tel:+919452667708" class="quick-bar-btn quick-bar-call" style="background-color: #F59E0B; color: #000000;" aria-label="Call Cab Now +91 9452667708">
     <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.21 2.2z"></path></svg>
     <span style="color: #000000;">Call Cab Now</span>
   </a>
   <a href="https://wa.me/919452667708?text=Hello%20Vrinda%20Taxi%20Service%2C%20I%20want%20to%20book%20a%20taxi." class="quick-bar-btn quick-bar-whatsapp" style="background-color: #166534; color: #FFFFFF;" target="_blank" rel="noopener" aria-label="WhatsApp Booking for Vrinda Taxi Service">
     <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.04 7.5C8.87 7.5 8.6 7.56 8.36 7.83C8.12 8.09 7.45 8.72 7.45 10C7.45 11.28 8.38 12.5 8.52 12.69C8.65 12.87 10.33 15.47 12.91 16.58C13.52 16.85 14 17.01 14.37 17.13C14.99 17.33 15.55 17.3 16 17.23C16.5 17.16 17.54 16.6 17.75 16C17.96 15.4 17.96 14.88 17.9 14.78C17.84 14.68 17.67 14.61 17.42 14.49C17.17 14.37 15.93 13.76 15.7 13.68C15.48 13.6 15.31 13.56 15.15 13.8C14.99 14.04 14.51 14.61 14.37 14.78C14.23 14.94 14.09 14.97 13.84 14.85C13.59 14.73 12.79 14.46 11.85 13.62C11.11 12.97 10.61 12.16 10.47 11.91C10.33 11.66 10.46 11.53 10.58 11.41C10.69 11.3 10.83 11.12 10.95 10.97C11.08 10.82 11.12 10.72 11.2 10.56C11.28 10.4 11.24 10.25 11.18 10.13C11.12 10.01 10.63 8.81 10.42 8.32C10.22 7.84 10.02 7.9 9.87 7.9C9.72 7.9 9.55 7.9 9.39 7.9C9.22 7.9 9.04 7.5 9.04 7.5Z"></path></svg>
     <span style="color: #FFFFFF;">WhatsApp Booking</span>
   </a>
 </aside>

 <script>
 function scrollToBookingForm(e) {
     var bookingForm = document.getElementById("book-now-form");
     if (bookingForm) {
         if (e) {
             e.preventDefault();
         }
         bookingForm.scrollIntoView({ behavior: "smooth", block: "center" });
         var pickupInput = document.getElementById("pickup");
         if (pickupInput) {
             setTimeout(function() {
                 pickupInput.focus();
             }, 500);
         }
     }
 }
 </script>

  <script>
// Disable Right Click
document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
});

// Disable F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
document.addEventListener("keydown", function (e) {

    // F12
    if (e.key === "F12") {
        e.preventDefault();
    }

    // Ctrl+Shift+I
    if (e.ctrlKey && e.shiftKey && e.key === "I") {
        e.preventDefault();
    }

    // Ctrl+Shift+J
    if (e.ctrlKey && e.shiftKey && e.key === "J") {
        e.preventDefault();
    }

    // Ctrl+U (View Source)
    if (e.ctrlKey && e.key === "u") {
        e.preventDefault();
    }

    // Ctrl+Shift+C (Inspect Element)
    if (e.ctrlKey && e.shiftKey && e.key === "C") {
        e.preventDefault();
    }
});
</script>
<!-- Footer Dark Theme Styles -->
<style>
    .footer-area {
        background-color: #0b1118 !important;
        background: linear-gradient(180deg, #0f172a 0%, #080d14 100%) !important;
        color: #94a3b8 !important;
        position: relative;
        z-index: 1;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }
    .footer-area .footer-shape img {
        opacity: 0.05 !important;
        mix-blend-mode: overlay;
    }
    .footer-area .footer-widget-title {
        color: #ffffff !important;
        font-weight: 700;
        font-size: 20px;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 12px;
    }
    .footer-area .footer-widget-title::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: #fdc800;
        border-radius: 2px;
    }
    .footer-area .footer-widget-box p {
        color: #94a3b8 !important;
        line-height: 1.8;
    }
    .footer-area .footer-widget-box strong {
        color: #e2e8f0 !important;
    }
    .footer-area .footer-payment h4 {
        color: #e2e8f0 !important;
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .footer-area .footer-list li {
        margin-bottom: 12px;
    }
    .footer-area .footer-list li a {
        color: #94a3b8 !important;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .footer-area .footer-list li a i {
        color: #fdc800 !important;
        font-size: 12px;
        transition: transform 0.3s ease;
    }
    .footer-area .footer-list li a:hover {
        color: #ffffff !important;
        transform: translateX(4px);
    }
    .footer-area .footer-list li a:hover i {
        color: #ffffff !important;
    }
    .footer-area .footer-contact li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        gap: 15px;
    }
    .footer-area .footer-contact .icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
        background: rgba(253, 200, 0, 0.12) !important;
        border: 1px solid rgba(253, 200, 0, 0.25);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .footer-area .footer-contact .icon i {
        color: #fdc800 !important;
        font-size: 16px;
    }
    .footer-area .footer-contact .content h5 {
        color: #ffffff !important;
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 4px;
    }
    .footer-area .footer-contact .content p,
    .footer-area .footer-contact .content a {
        color: #94a3b8 !important;
        margin-bottom: 0;
        line-height: 1.6;
        transition: color 0.3s ease;
    }
    .footer-area .footer-contact .content a:hover {
        color: #fdc800 !important;
    }
    .footer-area .copyright {
        border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
        padding-top: 25px;
        margin-top: 10px;
    }
    .footer-area .copyright-text {
        color: #94a3b8 !important;
        margin-bottom: 0;
    }
    .footer-area .copyright-text a {
        color: #fdc800 !important;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    .footer-area .copyright-text a:hover {
        color: #ffffff !important;
    }
    .footer-area .footer-social {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }
    .footer-area .footer-social li a {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        transition: all 0.3s ease;
    }
    .footer-area .footer-social li a:hover {
        background: #fdc800;
        border-color: #fdc800;
        color: #0b1118 !important;
        transform: translateY(-3px);
    }
    @media (max-width: 767px) {
        .footer-area .footer-social {
            justify-content: flex-start;
            margin-top: 15px;
        }
    }

    /* Floating Left Actions (Book Now, Call, WhatsApp on Left Side) */
    .floating-left-actions {
        position: fixed;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
    }

    .floating-left-actions .floating-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none !important;
        color: #ffffff !important;
        font-weight: 700;
        box-shadow: 2px 4px 15px rgba(0, 0, 0, 0.22);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        cursor: pointer;
        overflow: hidden;
        white-space: nowrap;
    }

    /* Book Now Button */
    .floating-left-actions .floating-action-btn.book-btn {
        background: linear-gradient(135deg, #fdc800 0%, #f59e0b 100%);
        color: #0b1118 !important;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 12px 18px 12px 14px;
        border-radius: 0 30px 30px 0;
        gap: 8px;
    }

    .floating-left-actions .floating-action-btn.book-btn i {
        font-size: 16px;
        color: #0b1118;
        animation: carBounce 2s infinite ease-in-out;
    }

    .floating-left-actions .floating-action-btn.book-btn:hover {
        padding-left: 18px;
        padding-right: 24px;
        background: linear-gradient(135deg, #0F766E 0%, #115E59 100%);
        color: #ffffff !important;
        box-shadow: 3px 6px 20px rgba(15, 118, 110, 0.45);
    }

    .floating-left-actions .floating-action-btn.book-btn:hover i {
        color: #fdc800;
    }

    /* Sub-group for Call & WhatsApp */
    .floating-left-actions .floating-contact-sub {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    /* Call Button */
    .floating-left-actions .floating-action-btn.call-btn {
        background: #0d6efd;
        height: 48px;
        min-width: 48px;
        padding: 0 14px;
        border-radius: 0 10px 10px 0;
        font-size: 14px;
        gap: 8px;
    }

    .floating-left-actions .floating-action-btn.call-btn i {
        font-size: 19px;
        color: #ffffff;
    }

    .floating-left-actions .floating-action-btn.call-btn .btn-label {
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        transition: max-width 0.3s ease, opacity 0.3s ease;
    }

    .floating-left-actions .floating-action-btn.call-btn:hover {
        background: #0b5ed7;
        box-shadow: 3px 6px 20px rgba(13, 110, 253, 0.4);
    }

    .floating-left-actions .floating-action-btn.call-btn:hover .btn-label {
        max-width: 80px;
        opacity: 1;
    }

    /* WhatsApp Button */
    .floating-left-actions .floating-action-btn.whatsapp-btn {
        background: #25D366;
        height: 48px;
        min-width: 48px;
        padding: 0 14px;
        border-radius: 0 10px 10px 0;
        font-size: 14px;
        gap: 8px;
    }

    .floating-left-actions .floating-action-btn.whatsapp-btn i {
        font-size: 21px;
        color: #ffffff;
    }

    .floating-left-actions .floating-action-btn.whatsapp-btn .btn-label {
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        transition: max-width 0.3s ease, opacity 0.3s ease;
    }

    .floating-left-actions .floating-action-btn.whatsapp-btn:hover {
        background: #1eb855;
        box-shadow: 3px 6px 20px rgba(37, 211, 102, 0.4);
    }

    .floating-left-actions .floating-action-btn.whatsapp-btn:hover .btn-label {
        max-width: 90px;
        opacity: 1;
    }

    @keyframes carBounce {
        0%, 100% {
            transform: translateX(0);
        }
        50% {
            transform: translateX(3px);
        }
    }

    /* Mobile Quick Booking Bar */
    .mobile-quick-bar {
        display: none;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        body {
            padding-bottom: calc(58px + max(10px, env(safe-area-inset-bottom, 0px))) !important;
        }

        .mobile-quick-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            z-index: 9999;
            background: rgba(7, 10, 18, 0.96);
            border-top: 1px solid rgba(245, 158, 11, 0.35);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            padding: 8px 12px;
            padding-bottom: max(8px, env(safe-area-inset-bottom, 8px));
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            box-shadow: 0 -8px 25px rgba(0, 0, 0, 0.5);
        }

        .quick-bar-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 11px 8px;
            border-radius: 9999px;
            font-weight: 700;
            font-size: 0.86rem;
            text-decoration: none !important;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            min-width: 0;
            box-sizing: border-box;
            white-space: nowrap;
        }

        .quick-bar-btn svg {
            flex-shrink: 0;
        }

        .quick-bar-btn span {
            font-weight: 700;
            letter-spacing: 0.2px;
        }

        .quick-bar-call {
            background-color: #F59E0B;
            background-image: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
            color: #000000 !important;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }

        .quick-bar-whatsapp {
            background-color: #166534;
            background-image: linear-gradient(135deg, #15803D 0%, #166534 100%);
            color: #FFFFFF !important;
            box-shadow: 0 4px 12px rgba(22, 101, 52, 0.3);
        }

        .quick-bar-btn:active {
            transform: scale(0.97);
        }

        .floating-left-actions {
            top: auto !important;
            bottom: calc(66px + max(8px, env(safe-area-inset-bottom, 8px))) !important;
            left: 12px !important;
            transform: none !important;
            gap: 8px;
        }

        .floating-left-actions .floating-action-btn.book-btn {
            border-radius: 30px;
            padding: 9px 15px;
            font-size: 13px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.3);
        }

        /* Hide floating call and whatsapp circular buttons on mobile since mobile-quick-bar is present */
        .floating-left-actions .floating-contact-sub {
            display: none !important;
        }
    }

    @media (max-width: 360px) {
        .quick-bar-btn {
            font-size: 0.78rem;
            padding: 9px 4px;
            gap: 4px;
        }
        .quick-bar-btn svg {
            width: 16px;
            height: 16px;
        }
    }

    /* Hide/deactivate legacy right floating-contact */
    .floating-contact {
        display: none !important;
    }
</style>