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
    <div class="hero-bg-gradient"></div>
    <div class="container custom-nav-container">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb custom-breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>

        <div class="row align-items-center g-5">
            <!-- Left Hero Text -->
            <div class="col-lg-6 z-2">
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
            <div class="col-lg-6 position-relative">
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
        <div class="text-center mb-5">
            <span class="section-tag text-uppercase mb-2 d-inline-block">OUR SERVICES</span>
            <h2 class="section-title">
                Everything You Need to <span class="text-purple">Grow Online</span>
            </h2>
        </div>

        <!-- 6 Distinct Service Cards (3 columns x 2 rows) -->
        <div class="row g-4">
            <!-- 1. SEO -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-seo.jpg') ?>" alt="SEO">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">SEO</h4>
                        <p class="service-card-desc">Rank higher on Google and get more traffic.</p>
                    </div>
                </div>
            </div>

            <!-- 2. Online Advertising -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-advertising.jpg') ?>" alt="Online Advertising">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Online Advertising</h4>
                        <p class="service-card-desc">Reach the right audience with targeted ads.</p>
                    </div>
                </div>
            </div>

            <!-- 3. Lead Generation -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-leads.jpg') ?>" alt="Lead Generation">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Lead Generation</h4>
                        <p class="service-card-desc">Get more potential customers for your business.</p>
                    </div>
                </div>
            </div>

            <!-- 4. Branding & Design -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-branding.jpg') ?>" alt="Branding & Design">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Branding &amp; Design</h4>
                        <p class="service-card-desc">Create a strong and memorable brand identity.</p>
                    </div>
                </div>
            </div>

            <!-- 5. Reels & Social Media Content -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-reels.jpg') ?>" alt="Reels & Social Media Content">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Reels &amp; Social Media Content</h4>
                        <p class="service-card-desc">Engaging content to grow your online presence.</p>
                    </div>
                </div>
            </div>

            <!-- 6. Logo Design -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlay-card">
                    <img src="<?= Yii::getAlias('@web/images/service-logo.jpg') ?>" alt="Logo Design">
                    <div class="service-overlay-content">
                        <h4 class="service-card-title">Logo Design</h4>
                        <p class="service-card-desc">Simple and professional logos for your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. OUR IMPACT STATS BANNER -->
<section class="impact-banner-section py-4 my-4">
    <div class="container custom-nav-container">
        <div class="impact-banner-card px-4 py-4 px-lg-5">
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

<!-- 4. OUR PROCESS: 4-STEP TIMELINE -->
<section class="process-section py-5">
    <div class="container custom-nav-container">
        <div class="text-center mb-5">
            <span class="section-tag text-uppercase mb-2 d-inline-block">OUR PROCESS</span>
            <h2 class="section-title">
                A Simple <span class="text-purple">Process</span>
            </h2>
        </div>

        <div class="row g-4 position-relative process-steps-row">
            <!-- Connecting dashed line -->
            <div class="process-line-connector d-none d-lg-block"></div>

            <!-- Step 1 -->
            <div class="col-lg-3 col-6 text-center">
                <div class="process-node mb-3">
                    <span class="process-number">01</span>
                    <div class="process-icon-circle">
                        <i class="bi bi-chat-dots-fill"></i>
                    </div>
                </div>
                <h5 class="fw-bold mb-1 fs-6">Understand</h5>
                <p class="text-secondary small mb-0">We learn your goals.</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-3 col-6 text-center">
                <div class="process-node mb-3">
                    <span class="process-number">02</span>
                    <div class="process-icon-circle">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>
                </div>
                <h5 class="fw-bold mb-1 fs-6">Plan</h5>
                <p class="text-secondary small mb-0">We create the right strategy.</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-3 col-6 text-center">
                <div class="process-node mb-3">
                    <span class="process-number">03</span>
                    <div class="process-icon-circle">
                        <i class="bi bi-gear-fill"></i>
                    </div>
                </div>
                <h5 class="fw-bold mb-1 fs-6">Create</h5>
                <p class="text-secondary small mb-0">We design and execute.</p>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-3 col-6 text-center">
                <div class="process-node mb-3">
                    <span class="process-number">04</span>
                    <div class="process-icon-circle">
                        <i class="bi bi-bar-chart-line-fill"></i>
                    </div>
                </div>
                <h5 class="fw-bold mb-1 fs-6">Grow</h5>
                <p class="text-secondary small mb-0">You get real results.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. WHY CHOOSE SARGNEXUS (IMAGE + 4 PILLARS) -->
<section class="partner-growth-section py-5">
    <div class="container custom-nav-container">
        <div class="row align-items-center g-5">
            <!-- Left Side Image -->
            <div class="col-lg-6">
                <div class="hero-image-wrapper">
                    <img src="<?= Yii::getAlias('@web/images/hero-laptop.jpg') ?>" alt="Growth Strategy" class="hero-image img-fluid">
                </div>
            </div>

            <!-- Right Side Features -->
            <div class="col-lg-6">
                <span class="section-tag text-uppercase mb-2 d-inline-block">WHY CHOOSE SARGNEXUS</span>
                <h2 class="section-title mb-4">
                    More Than Just Services.<br>
                    A Partner for <span class="text-purple">Your Growth.</span>
                </h2>

                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="pillar-box">
                            <h5 class="fw-bold mb-1 fs-6">Focused Strategy</h5>
                            <p class="text-secondary small mb-0">Every plan is tailored to your business.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pillar-box">
                            <h5 class="fw-bold mb-1 fs-6">Clear Communication</h5>
                            <p class="text-secondary small mb-0">You always know what's happening.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pillar-box">
                            <h5 class="fw-bold mb-1 fs-6">Result-Oriented</h5>
                            <p class="text-secondary small mb-0">We focus on real growth, not just likes.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
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
        <div class="email-strip-card p-4 px-lg-5">
            <div class="row align-items-center justify-content-between g-3">
                <div class="col-md-8 d-flex align-items-center gap-3">
                    <div class="email-strip-icon flex-shrink-0">
                        <i class="bi bi-envelope-fill text-white fs-4"></i>
                    </div>
                    <div>
                        <span class="email-strip-tag text-uppercase fw-bold d-block mb-1">HAVE A QUESTION?</span>
                        <h4 class="fw-bold mb-1 fs-5 text-dark">Prefer to Contact Us via Email?</h4>
                        <p class="text-secondary small mb-0">Drop us a message and we'll get back to you as soon as possible.</p>
                    </div>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="https://wa.me/918763585769" target="_blank" rel="noopener noreferrer" class="btn btn-purple-gradient text-white fw-semibold rounded-pill px-4 py-2">
                        <i class="bi bi-whatsapp me-1"></i> Send us a message <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
