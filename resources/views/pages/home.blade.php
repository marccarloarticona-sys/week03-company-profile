@extends('layouts.app')

@section('title', 'VECTORQ Auto Parts & Performance')
@section('description', 'VECTORQ Auto Parts & Performance')
@php($active = 'home')

@section('content')
<main class="home-page">

    <section class="hero-section">
        <div class="hero-background">
            <div class="hero-grid"></div>
            <div class="hero-glow hero-glow-red"></div>
            <div class="hero-glow hero-glow-dark"></div>
            <span class="speed-line speed-line-one"></span>
            <span class="speed-line speed-line-two"></span>
            <span class="speed-line speed-line-three"></span>
        </div>

        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-overline reveal">
                    <span class="overline-line"></span>
                    <span>AUTOMOTIVE PARTS • PERFORMANCE • CARE</span>
                </div>

                <h1 class="hero-title reveal reveal-delay-1">
                    <span class="title-white">BUILT TO</span>
                    <span class="title-red">DRIVE.</span>
                    <span class="title-white">TUNED TO</span>
                    <span class="title-outline">LAST.</span>
                </h1>

                <p class="hero-description reveal reveal-delay-2">
                    Premium automotive parts, performance upgrades,
                    preventive maintenance, tires, wheels, detailing,
                    and vehicle accessories — engineered around your ride.
                </p>

                <div class="hero-actions reveal reveal-delay-3">
                    <a href="{{ route('services') }}" class="btn btn-primary">
                        <span>EXPLORE SERVICES</span><span class="btn-arrow">→</span>
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-secondary">
                        <span>BOOK A SERVICE</span><span class="btn-arrow">→</span>
                    </a>
                </div>

                <div class="hero-stats reveal reveal-delay-4">
                    <div class="hero-stat"><strong>2021</strong><span>ESTABLISHED</span></div>
                    <div class="hero-stat"><strong>08</strong><span>CORE SERVICES</span></div>
                    <div class="hero-stat"><strong>01</strong><span>AUTO HUB</span></div>
                </div>
            </div>

            <div class="hero-visual reveal reveal-delay-2">
                <div class="technical-circle circle-large"></div>
                <div class="technical-circle circle-medium"></div>
                <div class="technical-circle circle-small"></div>

                <div class="performance-label">
                    <span>VECTORQ</span>
                    <small>PERFORMANCE DIVISION</small>
                </div>

                <div class="car-scene">
                    <div class="car-shadow"></div>
                    <img
                        src="https://www.pngmart.com/files/22/Porsche-911-PNG-Isolated-Image.png"
                        alt="Porsche 911"
                        class="car-image"
                    >
                </div>

                <div class="performance-info">
                    <span>ENGINEERED</span>
                    <strong>PERFORMANCE<br>DRIVEN</strong>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <span>SCROLL</span>
            <i></i>
        </div>
    </section>


    <section class="what-we-do">
        <div class="section-container">
            <div class="section-heading">
                <div>
                    <span class="section-label">WHAT WE DO</span>
                    <h2>MAINTAIN.<br>UPGRADE. PROTECT.</h2>
                </div>
                <p>Everything your vehicle needs to stay reliable, perform better, and look its best — all under one roof.</p>
            </div>

            <div class="service-grid">
                <article class="service-card">
                    <span class="service-number">01</span>
                    <div class="service-icon">⚙</div>
                    <span class="service-category">MAINTAIN</span>
                    <h3>KEEP IT READY</h3>
                    <p>Preventive maintenance, diagnostics, brakes, batteries, fluids, filters, and essential replacement parts.</p>
                    <a href="{{ route('services') }}">VIEW SERVICES <span>→</span></a>
                </article>

                <article class="service-card">
                    <span class="service-number">02</span>
                    <div class="service-icon">◈</div>
                    <span class="service-category">UPGRADE</span>
                    <h3>BUILD YOUR RIDE</h3>
                    <p>Performance wheels, tires, accessories, lighting, and customization designed around your vehicle.</p>
                    <a href="{{ route('services') }}">EXPLORE PERFORMANCE <span>→</span></a>
                </article>

                <article class="service-card">
                    <span class="service-number">03</span>
                    <div class="service-icon">◆</div>
                    <span class="service-category">PROTECT</span>
                    <h3>PRESERVE THE FINISH</h3>
                    <p>Professional detailing, paint correction, ceramic coating, and vehicle protection.</p>
                    <a href="{{ route('services') }}">DETAIL LAB <span>→</span></a>
                </article>
            </div>
        </div>
    </section>


    <section class="difference-section">
        <div class="carbon-background"></div>
        <div class="section-container difference-container">
            <div class="difference-heading">
                <span class="section-label">THE VECTORQ DIFFERENCE</span>
                <h2>MORE THAN<br>A REPAIR SHOP.</h2>
            </div>
            <div class="difference-content">
                <p>VECTORQ Auto Parts & Performance brings maintenance, replacement parts, tires, wheels, detailing, accessories, diagnostics, and customization together under one automotive destination.</p>
                <a href="{{ route('about') }}" class="text-link">DISCOVER OUR STORY <span>→</span></a>
            </div>
        </div>
    </section>


    <section class="cta-section">
        <div class="section-container cta-container">
            <div>
                <span class="cta-label">YOUR RIDE. YOUR STANDARD.</span>
                <h2>READY TO BUILD<br>YOUR RIDE?</h2>
            </div>
            <a href="{{ route('contact') }}" class="cta-button">BOOK A SERVICE <span>→</span></a>
        </div>
    </section>

</main>
@endsection
