<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="{{ route('home') }}" class="nav-logo">
            <span class="logo-mark">V</span>
            <span class="logo-text">VECTORQ<small>AUTOPARTS & PERFORMANCE</small></span>
        </a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
            <span></span><span></span><span></span>
        </button>
        <div class="nav-menu" id="navMenu">
            <a href="{{ route('home') }}" class="nav-link {{ $active === 'home' ? 'active' : '' }}">HOME</a>
            <a href="{{ route('about') }}" class="nav-link {{ $active === 'about' ? 'active' : '' }}">ABOUT</a>
            <a href="{{ route('services') }}" class="nav-link {{ $active === 'services' ? 'active' : '' }}">SERVICES</a>
            <a href="{{ route('contact') }}" class="nav-link {{ $active === 'contact' ? 'active' : '' }}">CONTACT</a>
            <a href="{{ route('contact') }}" class="nav-cta">BOOK A SERVICE <span>→</span></a>
        </div>
    </div>
</nav>
