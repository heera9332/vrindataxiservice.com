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
                                 <li>
                                     <a href="/sitemap.xml"><i class="far fa-angle-double-right"></i>Sitemap</a>
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
 <!-- Floating Book Now Button (Left Side) -->
 <div class="floating-book-now">
     <a href="/#book-now-form" id="floatingBookNowBtn" class="floating-book-btn" onclick="scrollToBookingForm(event)">
         <i class="fas fa-taxi"></i>
         <span>Book Now</span>
     </a>
 </div>

 <!-- Floating Sidebar -->
 <div class="floating-contact">

     <!-- Call Button -->
     <a href="tel:+919452667708" class="call-btn">
         <i class="bi bi-telephone-fill"></i>
     </a>

     <!-- WhatsApp Button -->
     <a href="https://wa.me/919452667708" target="_blank" class="whatsapp-btn">
         <i class="bi bi-whatsapp"></i>
     </a>

 </div>

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

    /* Floating Book Now (Left Side) */
    .floating-book-now {
        position: fixed;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        z-index: 9999;
    }

    .floating-book-now a.floating-book-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, #fdc800 0%, #f59e0b 100%);
        color: #0b1118 !important;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 12px 18px 12px 14px;
        border-radius: 0 30px 30px 0;
        box-shadow: 2px 4px 15px rgba(0, 0, 0, 0.25);
        text-decoration: none !important;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }

    .floating-book-now a.floating-book-btn i {
        font-size: 16px;
        color: #0b1118;
        animation: carBounce 2s infinite ease-in-out;
    }

    @keyframes carBounce {
        0%, 100% {
            transform: translateX(0);
        }
        50% {
            transform: translateX(3px);
        }
    }

    .floating-book-now a.floating-book-btn:hover {
        padding-left: 20px;
        padding-right: 24px;
        background: linear-gradient(135deg, #0F766E 0%, #115E59 100%);
        color: #ffffff !important;
        box-shadow: 3px 6px 20px rgba(15, 118, 110, 0.45);
    }

    .floating-book-now a.floating-book-btn:hover i {
        color: #fdc800;
    }

    @media (max-width: 768px) {
        .floating-book-now {
            top: auto;
            bottom: 20px;
            left: 12px;
            transform: none;
        }
        .floating-book-now a.floating-book-btn {
            border-radius: 30px;
            padding: 10px 16px;
            font-size: 13px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
        }
    }
</style>