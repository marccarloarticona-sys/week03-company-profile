@extends('layouts.app')

@section('title', 'Contact | VECTORQ Auto Parts & Performance')
@section('description', 'Contact VECTORQ Auto Parts & Performance')
@php($active = 'contact')

@section('content')
<main class="contact-page">

    <section class="contact-hero">
        <div class="contact-hero-grid"></div>
        <div class="contact-container contact-hero-content">
            <span class="contact-label">GET IN TOUCH</span>
            <h1>LET'S TALK<br><span>ABOUT YOUR RIDE.</span></h1>
            <p>Need maintenance, performance parts, new wheels, detailing, or a custom setup? Tell us what your vehicle needs.</p>
        </div>
        <div class="contact-speed-lines">
            <span></span><span></span><span></span>
        </div>
    </section>


    <section class="contact-main">
        <div class="contact-container">
            <div class="contact-grid">

                <div class="contact-information">
                    <div class="contact-section-heading">
                        <span class="contact-label">VECTORQ AUTOHAUS</span>
                        <h2>YOUR NEXT<br><span>MOVE STARTS HERE.</span></h2>
                    </div>

                    <p class="contact-intro">Whether you need routine maintenance or you're planning a complete vehicle upgrade, our team is ready to help you find the right automotive solution.</p>

                    <div class="contact-details">
                        <div class="contact-detail">
                            <div class="contact-detail-icon">01</div>
                            <div>
                                <span>VISIT US</span>
                                <h3>Santa Rosa, Laguna</h3>
                                <p>Philippines</p>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-detail-icon">02</div>
                            <div>
                                <span>CALL US</span>
                                <h3>+63 917 555 0188</h3>
                                <p>Monday – Saturday</p>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-detail-icon">03</div>
                            <div>
                                <span>EMAIL US</span>
                                <h3>hello@vectorqauto.com</h3>
                                <p>We usually respond within one business day.</p>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-detail-icon">04</div>
                            <div>
                                <span>BUSINESS HOURS</span>
                                <h3>8:00 AM – 6:00 PM</h3>
                                <p>Monday – Saturday · Sunday by appointment</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-socials">
                        <span>FOLLOW VECTORQ</span>
                        <div class="social-links">
                            <a href="#" aria-label="Facebook">FB</a>
                            <a href="#" aria-label="Instagram">IG</a>
                            <a href="#" aria-label="TikTok">TK</a>
                        </div>
                    </div>
                </div>


                <div class="contact-form-wrapper">
                    <div class="form-top">
                        <span class="contact-label">SERVICE INQUIRY</span>
                        <h2>TELL US<br><span>WHAT YOU NEED.</span></h2>
                    </div>

                    <form class="contact-form" id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">FULL NAME</label>
                                <input type="text" id="name" name="name" placeholder="Your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">EMAIL ADDRESS</label>
                                <input type="email" id="email" name="email" placeholder="you@example.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">PHONE NUMBER</label>
                                <input type="tel" id="phone" name="phone" placeholder="+63 9XX XXX XXXX">
                            </div>
                            <div class="form-group">
                                <label for="vehicle">VEHICLE</label>
                                <input type="text" id="vehicle" name="vehicle" placeholder="Make / Model / Year">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="service">SERVICE NEEDED</label>
                            <select id="service" name="service" required>
                                <option value="" selected disabled>Select a service</option>
                                <option value="pms">Preventive Maintenance</option>
                                <option value="tires">Tires</option>
                                <option value="wheels">Wheels / Mags</option>
                                <option value="parts">Auto Parts</option>
                                <option value="detailing">Detailing</option>
                                <option value="accessories">Accessories</option>
                                <option value="diagnostics">Diagnostics</option>
                                <option value="customization">Customization</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">MESSAGE</label>
                            <textarea id="message" name="message" rows="6" placeholder="Tell us about your vehicle or the service you need..." required></textarea>
                        </div>

                        <div class="form-bottom">
                            <p>By submitting this form, you are sending a service inquiry to VECTORQ.</p>
                            <button type="submit" class="contact-submit">SEND INQUIRY <span>→</span></button>
                        </div>

                        <div class="form-success" id="formSuccess">
                            INQUIRY READY — THANK YOU FOR CONTACTING VECTORQ.
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-location">
        <div class="contact-container">
            <div class="location-card">
                <div class="location-content">
                    <span class="contact-label">FIND VECTORQ</span>
                    <h2>READY WHEN<br><span>YOU ARE.</span></h2>
                    <p>Visit VECTORQ Auto Parts & Performance in Santa Rosa, Laguna for automotive service, parts, performance upgrades, and vehicle care.</p>
                    <div class="location-address">
                        <strong>VECTORQ AUTO PARTS & PERFORMANCE</strong>
                        <span>Santa Rosa, Laguna, Philippines</span>
                    </div>
                </div>
                <div class="location-visual">
                    <div class="map-grid"></div>
                    <div class="map-marker"><span>VQ</span></div>
                    <div class="map-label">VECTORQ</div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-bottom-cta">
        <div class="contact-container">
            <span class="contact-label">VECTORQ AUTO PARTS & PERFORMANCE</span>
            <h2>MAINTAIN.<br>UPGRADE.<br><span>PERFORM.</span></h2>
            <a href="{{ route('services') }}" class="contact-cta-button">EXPLORE OUR SERVICES <span>→</span></a>
        </div>
    </section>

</main>
@endsection
