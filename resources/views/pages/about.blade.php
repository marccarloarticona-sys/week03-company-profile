@extends('layouts.app')

@section('title', 'About | VECTORQ Auto Parts & Performance')
@section('description', 'About VECTORQ Auto Parts & Performance')
@php($active = 'about')

@section('content')
<main class="about-page">

    <section class="about-hero">
        <div class="about-hero-overlay"></div>
        <div class="about-container about-hero-content">
            <span class="about-label">ABOUT VECTORQ</span>
            <h1>MORE THAN<br><span>AN AUTO SHOP.</span></h1>
            <p>Automotive parts, performance, maintenance, and vehicle care engineered around your ride.</p>
        </div>
        <div class="about-hero-mark">
            <span>VQ</span>
            <small>EST. 2021</small>
        </div>
    </section>


    <section class="about-story">
        <div class="about-container story-grid">
            <div class="story-heading">
                <span class="about-label">OUR STORY</span>
                <h2>BUILT FROM<br><span>THE GARAGE.</span></h2>
            </div>
            <div class="story-content">
                <p class="story-lead">VECTORQ Auto Parts & Performance is a Laguna-based automotive service and customization company created for motorists who expect more from their vehicles.</p>
                <p>From preventive maintenance and replacement parts to performance wheels, tires, detailing, accessories, diagnostics, and customization, VECTORQ brings essential automotive services together under one roof.</p>
                <p>Our goal is simple: provide dependable automotive solutions while giving every customer the freedom to maintain, upgrade, personalize, and protect their vehicle.</p>
            </div>
        </div>
    </section>


    <section class="timeline-section">
        <div class="about-container">
            <div class="timeline-heading">
                <span class="about-label">THE JOURNEY</span>
                <h2>FROM SERVICE<br><span>TO PERFORMANCE.</span></h2>
            </div>
            <div class="timeline">
                <article class="timeline-item">
                    <div class="timeline-year">2021</div>
                    <div class="timeline-line"><span></span></div>
                    <div class="timeline-content">
                        <span>THE BEGINNING</span>
                        <h3>THE FIRST TURN</h3>
                        <p>VECTORQ began as an automotive service concept focused on reliable preventive maintenance for local motorists.</p>
                    </div>
                </article>
                <article class="timeline-item">
                    <div class="timeline-year">2022</div>
                    <div class="timeline-line"><span></span></div>
                    <div class="timeline-content">
                        <span>EXPANSION</span>
                        <h3>MORE THAN MAINTENANCE</h3>
                        <p>Tires, wheels, replacement parts, and automotive accessories were added to create a more complete vehicle service destination.</p>
                    </div>
                </article>
                <article class="timeline-item">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-line"><span></span></div>
                    <div class="timeline-content">
                        <span>DETAIL LAB</span>
                        <h3>PROTECT THE FINISH</h3>
                        <p>Professional detailing, paint correction, and vehicle protection services expanded the VECTORQ experience.</p>
                    </div>
                </article>
                <article class="timeline-item">
                    <div class="timeline-year">2026</div>
                    <div class="timeline-line"><span></span></div>
                    <div class="timeline-content">
                        <span>AUTOHAUS & PERFORMANCE</span>
                        <h3>THE NEXT GEAR</h3>
                        <p>VECTORQ evolved into a complete automotive lifestyle and service center built around maintenance, performance, and personalization.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <section class="mission-section">
        <div class="about-container mission-grid">
            <div class="mission-card">
                <span class="about-label">MISSION</span>
                <h2>DRIVE WITH<br><span>CONFIDENCE.</span></h2>
                <p>To provide dependable automotive services, quality products, and professional vehicle care that help every customer drive with confidence.</p>
            </div>
            <div class="vision-card">
                <span class="about-label">VISION</span>
                <h2>THE STANDARD<br><span>OF THE ROAD.</span></h2>
                <p>To become one of Laguna's most trusted automotive service and customization destinations, recognized for quality workmanship, innovation, and customer experience.</p>
            </div>
        </div>
    </section>


    <section class="values-section">
        <div class="about-container">
            <div class="values-heading">
                <span class="about-label">WHAT DRIVES US</span>
                <h2>OUR CORE<br><span>VALUES.</span></h2>
            </div>
            <div class="values-grid">
                <article class="value-card">
                    <span class="value-number">01</span>
                    <span class="value-icon">01</span>
                    <h3>PRECISION</h3>
                    <p>Automotive work should be performed carefully, correctly, and with attention to detail.</p>
                </article>
                <article class="value-card">
                    <span class="value-number">02</span>
                    <span class="value-icon">02</span>
                    <h3>INTEGRITY</h3>
                    <p>We recommend what the vehicle needs, not what the customer does not need.</p>
                </article>
                <article class="value-card">
                    <span class="value-number">03</span>
                    <span class="value-icon">03</span>
                    <h3>QUALITY</h3>
                    <p>We prioritize dependable products and professional workmanship in every service.</p>
                </article>
                <article class="value-card">
                    <span class="value-number">04</span>
                    <span class="value-icon">04</span>
                    <h3>PASSION</h3>
                    <p>We understand that a vehicle can be more than transportation. It can be part of who you are.</p>
                </article>
                <article class="value-card">
                    <span class="value-number">05</span>
                    <span class="value-icon">05</span>
                    <h3>SAFETY</h3>
                    <p>Every service and upgrade should contribute to a safer driving experience.</p>
                </article>
            </div>
        </div>
    </section>


    <section class="team-section">
        <div class="about-container">
            <div class="team-heading">
                <div>
                    <span class="about-label">THE TEAM</span>
                    <h2>PEOPLE<br><span>BEHIND THE MACHINES.</span></h2>
                </div>
                <p>A team built around automotive knowledge, technical skill, and a genuine passion for cars.</p>
            </div>
            <div class="team-grid">
                <article class="team-card">
                    <div class="team-image team-image-one"><img src="/images/carlo.jpg" alt="Carlo Mendoza"></div>
                    <div class="team-info">
                        <span>FOUNDER & MANAGING DIRECTOR</span>
                        <h3>Carlo Mendoza</h3>
                        <p>Leads VECTORQ's operations and long-term business direction.</p>
                    </div>
                </article>
                <article class="team-card">
                    <div class="team-image team-image-two"><img src="/images/miguel.jpg" alt="Miguel Santos"></div>
                    <div class="team-info">
                        <span>AUTOMOTIVE SERVICE MANAGER</span>
                        <h3>Miguel Santos</h3>
                        <p>Oversees PMS, diagnostics, repairs, and technical operations.</p>
                    </div>
                </article>
                <article class="team-card">
                    <div class="team-image team-image-three"><img src="/images/adrian.jpg" alt="Adrian Cruz"></div>
                    <div class="team-info">
                        <span>PERFORMANCE & WHEEL SPECIALIST</span>
                        <h3>Adrian Cruz</h3>
                        <p>Handles tires, wheel fitment, performance wheels, and customization.</p>
                    </div>
                </article>
                <article class="team-card">
                    <div class="team-image team-image-four"><img src="/images/joshua.jpg" alt="Joshua Reyes"></div>
                    <div class="team-info">
                        <span>DETAILING SPECIALIST</span>
                        <h3>Joshua Reyes</h3>
                        <p>Specializes in paint correction, ceramic coating, and detailing.</p>
                    </div>
                </article>
                <article class="team-card">
                    <div class="team-image team-image-five"><img src="/images/mark.jpg" alt="Mark Villanueva"></div>
                    <div class="team-info">
                        <span>PARTS & ACCESSORIES SPECIALIST</span>
                        <h3>Mark Villanueva</h3>
                        <p>Handles automotive parts, accessories, and customer recommendations.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <section class="about-cta">
        <div class="about-container about-cta-content">
            <div>
                <span class="about-label">VECTORQ AUTO PARTS & PERFORMANCE</span>
                <h2>YOUR RIDE.<br><span>OUR STANDARD.</span></h2>
            </div>
            <a href="{{ route('contact') }}" class="about-cta-button">START YOUR BUILD <span>→</span></a>
        </div>
    </section>

</main>
@endsection
