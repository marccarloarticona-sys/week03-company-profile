@extends('layouts.app')

@section('title', 'Services | VECTORQ Auto Parts & Performance')
@section('description', 'Services | VECTORQ Auto Parts & Performance')
@php($active = 'services')

@section('content')
<main class="services-page">

    <section class="services-hero">
        <div class="services-hero-grid"></div>
        <div class="services-container services-hero-content">
            <span class="services-label">VECTORQ SERVICES</span>
            <h1>BUILT FOR<br><span>EVERY DRIVE.</span></h1>
            <p>From essential maintenance to performance upgrades, VECTORQ delivers automotive solutions designed to keep your vehicle ready for the road.</p>
            <a href="{{ route('contact') }}" class="services-hero-button">BOOK A SERVICE <span>→</span></a>
        </div>
        <div class="services-hero-number">
            <strong>07</strong>
            <span>SERVICES</span>
        </div>
    </section>


    <section class="services-intro">
        <div class="services-container services-intro-grid">
            <div>
                <span class="services-label">WHAT WE DO</span>
                <h2>MAINTAIN.<br>UPGRADE.<br><span>PROTECT.</span></h2>
            </div>
            <div class="services-intro-text">
                <p>VECTORQ is more than an automotive repair shop. We bring maintenance, replacement parts, tires, wheels, detailing, diagnostics, accessories, and vehicle customization together in one place.</p>
                <p>Every service is designed around reliability, performance, safety, and the individual needs of your vehicle.</p>
            </div>
        </div>
    </section>


    <section class="service-list-section">
        <div class="services-container">
            <div class="service-list-heading">
                <span class="services-label">OUR SERVICES</span>
                <h2>ENGINEERED<br><span>FOR YOUR RIDE.</span></h2>
            </div>

            <div class="service-list">

                <article class="service-item">
                    <div class="service-number">01</div>
                    <div class="service-main">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/></svg>
                        </div>
                        <span>PMS</span>
                        <h3>PREVENTIVE MAINTENANCE SERVICE</h3>
                        <p>Routine maintenance designed to keep vehicles reliable, efficient, and road-ready.</p>
                    </div>
                    <div class="service-details">
                        <span>INCLUDES</span>
                        <ul>
                            <li>Engine oil replacement</li>
                            <li>Oil filter replacement</li>
                            <li>Fluid inspection</li>
                            <li>Brake inspection</li>
                            <li>Battery inspection</li>
                            <li>General vehicle inspection</li>
                        </ul>
                    </div>
                    <div class="service-arrow">↗</div>
                </article>

                <article class="service-item">
                    <div class="service-number">02</div>
                    <div class="service-main">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                        </div>
                        <span>VELTORQ PARTS</span>
                        <h3>AUTO PARTS & REPLACEMENT</h3>
                        <p>Quality replacement components for maintaining and restoring vehicle performance.</p>
                    </div>
                    <div class="service-details">
                        <span>AVAILABLE PARTS</span>
                        <ul>
                            <li>Brake pads</li>
                            <li>Filters</li>
                            <li>Belts</li>
                            <li>Spark plugs</li>
                            <li>Wipers</li>
                            <li>Batteries</li>
                        </ul>
                    </div>
                    <div class="service-arrow">↗</div>
                </article>

                <article class="service-item">
                    <div class="service-number">03</div>
                    <div class="service-main">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.64 5.64l2.83 2.83M15.54 15.54l2.83 2.83M5.64 18.36l2.83-2.83M15.54 8.46l2.83-2.83"/><circle cx="12" cy="12" r="2"/></svg>
                        </div>
                        <span>TREADFORGE & TORQFORGE</span>
                        <h3>TIRES, WHEELS & PERFORMANCE MAGS</h3>
                        <p>Complete tire and wheel solutions — from essential maintenance services to performance upgrades and custom mag fitment.</p>
                    </div>
                    <div class="service-details">
                        <span>INCLUDES</span>
                        <ul>
                            <li>Tire replacement & installation</li>
                            <li>Wheel balancing & alignment</li>
                            <li>Flat-tire repair & rotation</li>
                            <li>Alloy & performance mags</li>
                            <li>Wheel spacers & lug nuts</li>
                            <li>Sport & custom wheels</li>
                        </ul>
                    </div>
                    <div class="service-arrow">↗</div>
                </article>

                <article class="service-item">
                    <div class="service-number">04</div>
                    <div class="service-main">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <span>DETAIL LAB</span>
                        <h3>PREMIUM AUTO DETAILING</h3>
                        <p>Professional vehicle care focused on restoring appearance and protecting the finish.</p>
                    </div>
                    <div class="service-details">
                        <span>SERVICES</span>
                        <ul>
                            <li>Exterior detailing</li>
                            <li>Interior detailing</li>
                            <li>Paint correction</li>
                            <li>Ceramic coating</li>
                            <li>Engine bay cleaning</li>
                            <li>Headlight restoration</li>
                        </ul>
                    </div>
                    <div class="service-arrow">↗</div>
                </article>

                <article class="service-item">
                    <div class="service-number">05</div>
                    <div class="service-main">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2M12 12v4M10 14h4"/></svg>
                        </div>
                        <span>DRIVECRAFT</span>
                        <h3>AUTOMOTIVE ACCESSORIES</h3>
                        <p>Practical and aesthetic upgrades designed to make every drive more convenient.</p>
                    </div>
                    <div class="service-details">
                        <span>ACCESSORIES</span>
                        <ul>
                            <li>LED lighting</li>
                            <li>Dash cameras</li>
                            <li>Floor mats</li>
                            <li>Seat covers</li>
                            <li>Phone holders</li>
                            <li>Parking sensors</li>
                        </ul>
                    </div>
                    <div class="service-arrow">↗</div>
                </article>

                <article class="service-item">
                    <div class="service-number">06</div>
                    <div class="service-main">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                        </div>
                        <span>TORQSCAN</span>
                        <h3>ELECTRICAL & DIAGNOSTICS</h3>
                        <p>Modern vehicle diagnostics and electrical inspection for identifying potential issues.</p>
                    </div>
                    <div class="service-details">
                        <span>DIAGNOSTICS</span>
                        <ul>
                            <li>OBD diagnostics</li>
                            <li>Battery testing</li>
                            <li>Charging-system testing</li>
                            <li>Warning-light diagnosis</li>
                            <li>Electrical inspection</li>
                            <li>Basic sensor diagnostics</li>
                        </ul>
                    </div>
                    <div class="service-arrow">↗</div>
                </article>

                <article class="service-item">
                    <div class="service-number">07</div>
                    <div class="service-main">
                        <div class="service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                        </div>
                        <span>CUSTOM GARAGE</span>
                        <h3>VEHICLE CUSTOMIZATION</h3>
                        <p>Personalization services for drivers who want their vehicle to stand apart.</p>
                    </div>
                    <div class="service-details">
                        <span>CUSTOMIZATION</span>
                        <ul>
                            <li>Interior upgrades</li>
                            <li>Exterior accessories</li>
                            <li>Lighting upgrades</li>
                            <li>Wheel upgrades</li>
                            <li>Styling packages</li>
                            <li>Custom detailing</li>
                        </ul>
                    </div>
                    <div class="service-arrow">↗</div>
                </article>

            </div>
        </div>
    </section>


    <section class="garage-section">
        <div class="garage-container">
            <div class="garage-heading">
                <div>
                    <span class="services-label">THE GARAGE</span>
                    <h2>BUILT TO<br><span>STAND OUT.</span></h2>
                </div>
                <p>Explore our fictional performance wheel lineup, created to give VECTORQ a distinctive automotive lifestyle identity.</p>
            </div>

            <div class="garage-grid">
                <article class="wheel-card">
                    <div class="wheel-visual">
                        <img src="/images/alloy.jpg" alt="Performance Alloy">
                        <span class="wheel-code">VTX-01</span>
                    </div>
                    <div class="wheel-info">
                        <span>18" × 8.5"</span>
                        <h3>PERFORMANCE ALLOY</h3>
                        <p>Aggressive multi-spoke design for a modern performance appearance.</p>
                    </div>
                </article>

                <article class="wheel-card">
                    <div class="wheel-visual wheel-visual-two">
                        <img src="/images/forged.jpg" alt="Street Forged">
                        <span class="wheel-code">VTX-02</span>
                    </div>
                    <div class="wheel-info">
                        <span>19" × 9"</span>
                        <h3>STREET FORGED</h3>
                        <p>Designed for drivers looking for a bold and aggressive street setup.</p>
                    </div>
                </article>

                <article class="wheel-card">
                    <div class="wheel-visual wheel-visual-three">
                        <img src="/images/rally.jpg" alt="Rally Series">
                        <span class="wheel-code">VTX-03</span>
                    </div>
                    <div class="wheel-info">
                        <span>17" × 8"</span>
                        <h3>RALLY SERIES</h3>
                        <p>Inspired by rally-style wheels and motorsport performance.</p>
                    </div>
                </article>

                <article class="wheel-card">
                    <div class="wheel-visual wheel-visual-four">
                        <img src="/images/mesh.jpg" alt="Urban Mesh">
                        <span class="wheel-code">VTX-04</span>
                    </div>
                    <div class="wheel-info">
                        <span>18" × 8"</span>
                        <h3>URBAN MESH</h3>
                        <p>A balanced wheel design created for modern daily drivers.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <section class="detail-section">
        <div class="services-container">
            <div class="detail-heading">
                <span class="services-label">DETAIL LAB</span>
                <h2>KEEP IT<br><span>LOOKING NEW.</span></h2>
                <p>Professional vehicle care packages designed around different levels of protection and finish.</p>
            </div>

            <div class="detail-packages">
                <article class="detail-package">
                    <div class="package-number">01</div>
                    <div>
                        <span>ESSENTIAL DETAIL</span>
                        <h3>₱1,500</h3>
                    </div>
                    <ul>
                        <li>Exterior wash</li>
                        <li>Interior vacuum</li>
                        <li>Tire dressing</li>
                    </ul>
                    <a href="{{ route('contact') }}">INQUIRE <span>→</span></a>
                </article>

                <article class="detail-package featured-package">
                    <div class="package-tag">POPULAR</div>
                    <div class="package-number">02</div>
                    <div>
                        <span>PREMIUM DETAIL</span>
                        <h3>₱3,500</h3>
                    </div>
                    <ul>
                        <li>Deep interior cleaning</li>
                        <li>Exterior detailing</li>
                        <li>Paint enhancement</li>
                    </ul>
                    <a href="{{ route('contact') }}">INQUIRE <span>→</span></a>
                </article>

                <article class="detail-package">
                    <div class="package-number">03</div>
                    <div>
                        <span>CERAMIC SHIELD</span>
                        <h3>₱8,500+</h3>
                    </div>
                    <ul>
                        <li>Paint correction</li>
                        <li>Ceramic coating</li>
                        <li>Exterior protection</li>
                    </ul>
                    <a href="{{ route('contact') }}">INQUIRE <span>→</span></a>
                </article>
            </div>

            <p class="pricing-note">Sample / fictitious pricing for academic website presentation.</p>
        </div>
    </section>


    <section class="services-cta">
        <div class="services-container services-cta-content">
            <div>
                <span class="services-label">READY FOR THE NEXT GEAR?</span>
                <h2>LET'S BUILD<br><span>YOUR RIDE.</span></h2>
            </div>
            <a href="{{ route('contact') }}" class="services-cta-button">BOOK A SERVICE <span>→</span></a>
        </div>
    </section>

</main>
@endsection
