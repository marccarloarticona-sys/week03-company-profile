<footer class="site-footer">
    <div class="footer-top-line"></div>
    <div class="footer-container">
        <div class="footer-main">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="footer-logo">
                    <span class="footer-logo-mark">V</span>
                    <span class="footer-logo-text">VECTORQ<small>AUTOPARTS & PERFORMANCE</small></span>
                </a>
                <p>Automotive service, parts, performance, detailing, and customization built around your vehicle.</p>
                <div class="footer-tagline">BUILT TO DRIVE. <span>TUNED TO LAST.</span></div>
            </div>
            <div class="footer-column">
                <h3>EXPLORE</h3>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="footer-column">
                <h3>SERVICES</h3>
                <a href="{{ route('services') }}">Preventive Maintenance</a>
                <a href="{{ route('services') }}">Auto Parts</a>
                <a href="{{ route('services') }}">Tires & Wheels</a>
                <a href="{{ route('services') }}">Auto Detailing</a>
                <a href="{{ route('services') }}">Diagnostics</a>
                <a href="{{ route('services') }}">Customization</a>
            </div>
            <div class="footer-column footer-contact">
                <h3>CONTACT</h3>
                <p>Santa Rosa, Laguna<br>Philippines</p>
                <a href="tel:+639175550188">+63 917 555 0188</a>
                <a href="mailto:hello@vectorqauto.com">hello@vectorqauto.com</a>
                <p class="footer-hours">MON — SAT<br>8:00 AM — 6:00 PM</p>
            </div>
        </div>
        <div class="footer-middle">
            <div class="footer-status">
                <span class="status-dot"></span>
                <span>VECTORQ AUTOHAUS & PERFORMANCE</span>
                <span class="status-divider">/</span>
                <span>SANTA ROSA, LAGUNA</span>
            </div>
            <div class="footer-socials">
                <a href="#" aria-label="Facebook">FB</a>
                <a href="#" aria-label="Instagram">IG</a>
                <a href="#" aria-label="TikTok">TK</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© {{ date('Y') }} VECTORQ Auto Parts & Performance. All rights reserved.</p>
            <p>Academic Fictional Client Website</p>
            <a href="#" class="back-to-top" id="backToTop">BACK TO TOP <span>↑</span></a>
        </div>
    </div>
</footer>
