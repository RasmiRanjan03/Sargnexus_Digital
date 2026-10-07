<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Services - SARGNEXUS Digital';
$this->params['meta_description'] = 'Simple digital solutions to help your business grow online. SEO, Online Advertising, Lead Generation, Branding, and Social Media.';
$this->params['fluid'] = true;
?>

<!-- 1. SERVICES HERO SECTION -->
<section class="services-hero-section position-relative text-white">
    <img src="<?= Yii::getAlias('@web/images/services-hero-laptop.jpg') ?>" alt="Services Growth" class="hero-bg-cover">
    <div class="hero-bg-gradient"></div>
    <div class="container custom-nav-container hero-content-layer">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb custom-breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>

        <div class="row align-items-center g-5">
            <!-- Left Hero Text -->
            <div class="col-lg-6 z-2" data-aos="fade-right" data-aos-duration="850">
                <h1 class="hero-title mb-3">
                    Our <span class="text-gradient-purple">Services</span>
                </h1>
                <p class="hero-subtitle mb-4 pe-lg-4">
                    Simple digital solutions to help your business grow online.
                </p>
                <div>
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-3 rounded-pill shadow-sm">
                        Get a Free Quote <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Right Hero Image: Laptop with IDEAS STRATEGY DESIGN GROWTH -->
            <div class="col-lg-6 position-relative" data-aos="fade-left" data-aos-duration="850" data-aos-delay="150">
                <div class="hero-image-wrapper">
                    <img src="<?= Yii::getAlias('@web/images/services-hero-laptop.jpg') ?>" alt="Ideas Strategy Design Growth" class="hero-image img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. EVERYTHING YOU NEED TO GROW ONLINE (6 SERVICE CARDS WITH DARK BOTTOM OVERLAYS) -->
<section class="services-list-section py-5 my-lg-3">
    <div class="container custom-nav-container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag text-uppercase mb-2 d-inline-block">OUR SERVICES</span>
            <h2 class="section-title">
                Everything You Need to <span class="text-purple">Grow Online</span>
            </h2>
        </div>

        <!-- 7 Service Cards matching user headings (with teal number badges 01 - 07) -->
        <div class="row g-4 justify-content-center">
            <!-- 01. Social Media Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-marketing.jpg') ?>" alt="Social Media Marketing">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Social Media Marketing</h4>
                        <p class="service-card-desc">Grow your audience and brand reach across key social platforms.</p>
                    </div>
                </div>
            </div>

            <!-- 02. Influencer Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-influencer.jpg') ?>" alt="Influencer Marketing">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Influencer Marketing</h4>
                        <p class="service-card-desc">Connect with credible creators to authentically amplify your brand.</p>
                    </div>
                </div>
            </div>

            <!-- 03. Performance Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-advertising.jpg') ?>" alt="Performance Marketing">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Performance Marketing</h4>
                        <p class="service-card-desc">Data-driven paid ads designed for conversions, ROI, and scale.</p>
                    </div>
                </div>
            </div>

            <!-- 04. Campaigns & BTL Activities -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-campaigns-btl.jpg') ?>" alt="Campaigns & BTL Activities">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Campaigns &amp; BTL Activities</h4>
                        <p class="service-card-desc">High-impact brand activations, experiential events, and creative campaigns.</p>
                    </div>
                </div>
            </div>

            <!-- 05. Photoshoot & Video Shoot -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-photoshoot.jpg') ?>" alt="Photoshoot & Video Shoot">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Photoshoot &amp; Video Shoot</h4>
                        <p class="service-card-desc">High-end product, commercial, and brand video production.</p>
                    </div>
                </div>
            </div>

            <!-- 06. Branding -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-branding.jpg') ?>" alt="Branding">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Branding</h4>
                        <p class="service-card-desc">Build an iconic identity, guidelines, and visual language that lasts.</p>
                    </div>
                </div>
            </div>

            <!-- 07. PR Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-pr.jpg') ?>" alt="PR Marketing">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">PR Marketing</h4>
                        <p class="service-card-desc">Earned media visibility, press releases, and brand reputation building.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. OUR IMPACT STATS BANNER -->
<section class="impact-banner-section py-4 my-4">
    <div class="container custom-nav-container">
        <div class="impact-banner-card px-4 py-4 px-lg-5" data-aos="zoom-in" data-aos-duration="750">
            <div class="row align-items-center g-4">
                <div class="col-lg-4 text-center text-lg-start">
                    <span class="impact-tag text-uppercase fw-bold d-block mb-1">OUR IMPACT</span>
                    <h3 class="impact-title mb-0">
                        Helping Businesses<br>
                        <span class="text-purple">Grow</span> Every Day.
                    </h3>
                </div>
                <div class="col-lg-8">
                    <div class="row g-3 text-center">
                        <div class="col-3 impact-divider">
                            <h3 class="fw-bold text-primary mb-1">50+</h3>
                            <span class="small text-secondary">Happy Clients</span>
                        </div>
                        <div class="col-3 impact-divider">
                            <h3 class="fw-bold text-primary mb-1">100+</h3>
                            <span class="small text-secondary">Projects Completed</span>
                        </div>
                        <div class="col-3 impact-divider">
                            <h3 class="fw-bold text-primary mb-1">3+</h3>
                            <span class="small text-secondary">Years of Experience</span>
                        </div>
                        <div class="col-3">
                            <h3 class="fw-bold text-primary mb-1">24/7</h3>
                            <span class="small text-secondary">Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. OUR PROCESS: 4-STEP PREMIUM INTERACTIVE WORKFLOW -->
<section class="process-section py-5 my-lg-4 position-relative">
    <div class="container custom-nav-container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 mb-2">
                <span class="section-mini-bar"></span>
                <span class="section-label-text">HOW WE WORK</span>
                <span class="section-mini-bar"></span>
            </div>
            <h2 class="section-title mb-2">
                A Simple <span class="text-purple">Process</span>
            </h2>
            <p class="section-subtitle mx-auto" style="max-width: 520px;">
                From first discovery to tangible growth, here is how we partner with your business every step of the way.
            </p>
        </div>

        <div class="row g-4 position-relative process-steps-row">

            <!-- Step 1: Understand -->
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step-card text-center h-100">
                    <div class="process-node-wrapper mb-4">
                        <div class="process-icon-circle">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>
                    </div>
                    <h4 class="process-step-title mb-2">Understand</h4>
                    <p class="process-step-desc mb-0">We dive deep into your brand, target audience, and business goals.</p>
                </div>
            </div>

            <!-- Step 2: Plan -->
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step-card text-center h-100">
                    <div class="process-node-wrapper mb-4">
                        <div class="process-icon-circle">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                    </div>
                    <h4 class="process-step-title mb-2">Plan</h4>
                    <p class="process-step-desc mb-0">We craft a tailored roadmap and creative strategy focused on ROI.</p>
                </div>
            </div>

            <!-- Step 3: Create -->
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step-card text-center h-100">
                    <div class="process-node-wrapper mb-4">
                        <div class="process-icon-circle">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                    </div>
                    <h4 class="process-step-title mb-2">Create</h4>
                    <p class="process-step-desc mb-0">We design, produce, and launch high-impact campaigns with precision.</p>
                </div>
            </div>

            <!-- Step 4: Grow -->
            <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                <div class="process-step-card text-center h-100">
                    <div class="process-node-wrapper mb-4">
                        <div class="process-icon-circle">
                            <i class="bi bi-bar-chart-line-fill"></i>
                        </div>
                    </div>
                    <h4 class="process-step-title mb-2">Grow</h4>
                    <p class="process-step-desc mb-0">Measure, optimize, and scale results to ensure long-term business growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. WHY CHOOSE SARGNEXUS (IMAGE + 4 PILLARS) -->
<section class="partner-growth-section py-5">
    <div class="container custom-nav-container">
        <div class="row align-items-center g-5">
            <!-- Left Side Image -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="850">
                <div class="hero-image-wrapper">
                    <img src="<?= Yii::getAlias('@web/images/hero-laptop.jpg') ?>" alt="Growth Strategy" class="hero-image img-fluid">
                </div>
            </div>

            <!-- Right Side Features -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="850">
                <span class="section-tag text-uppercase mb-2 d-inline-block">WHY CHOOSE SARGNEXUS</span>
                <h2 class="section-title mb-4">
                    More Than Just Services.<br>
                    A Partner for <span class="text-purple">Your Growth.</span>
                </h2>

                <div class="row g-4">
                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pillar-box">
                            <h5 class="fw-bold mb-1 fs-6">Focused Strategy</h5>
                            <p class="text-secondary small mb-0">Every plan is tailored to your business.</p>
                        </div>
                    </div>
                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pillar-box">
                            <h5 class="fw-bold mb-1 fs-6">Clear Communication</h5>
                            <p class="text-secondary small mb-0">You always know what's happening.</p>
                        </div>
                    </div>
                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="pillar-box">
                            <h5 class="fw-bold mb-1 fs-6">Result-Oriented</h5>
                            <p class="text-secondary small mb-0">We focus on real growth, not just likes.</p>
                        </div>
                    </div>
                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="pillar-box">
                            <h5 class="fw-bold mb-1 fs-6">On-Time Delivery</h5>
                            <p class="text-secondary small mb-0">We respect your time and deadlines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. PREFER TO CONTACT US VIA EMAIL? STRIP -->
<section class="email-contact-strip py-4 my-4">
    <div class="container custom-nav-container">
        <div class="email-strip-card p-4 px-lg-5" data-aos="zoom-in" data-aos-duration="700">
            <div class="row align-items-center justify-content-between g-3">
                <div class="col-md-8 d-flex align-items-center gap-3">
                    <div class="email-strip-icon flex-shrink-0">
                        <i class="bi bi-whatsapp text-white fs-4"></i>
                    </div>
                    <div>
                        <span class="email-strip-tag text-uppercase fw-bold d-block mb-1">HAVE A QUESTION?</span>
                        <h4 class="fw-bold mb-1 fs-5 text-dark">Prefer to Contact Us via Whatsapp?</h4>
                        <p class="text-secondary small mb-0">Drop us a message and we'll get back to you as soon as possible.</p>
                    </div>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="https://wa.me/918917237415" target="_blank" rel="noopener noreferrer" class="btn btn-purple-gradient text-white fw-semibold rounded-pill px-4 py-2">
                        <i class="bi bi-whatsapp me-1"></i> Send us a message <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
