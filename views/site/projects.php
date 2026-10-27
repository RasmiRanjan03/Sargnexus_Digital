<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$this->title = 'Our Projects - SARGNEXUS Digital';
$this->params['meta_description'] = 'Explore our portfolio across digital marketing, video production, advertising campaigns, and web development. Real ideas. Real results.';
$this->params['fluid'] = true;
?>

<!-- 1. PROJECTS HERO SECTION (DARK BACKGROUND WITH LAPTOP SHOWCASE) -->
<section class="projects-hero-section position-relative text-white">
    <img src="<?= Yii::getAlias('@web/images/projects-hero-laptop.jpg') ?>" alt="Our Projects Creative Showcase" class="hero-bg-cover">
    <div class="hero-bg-gradient"></div>
    <div class="container custom-nav-container hero-content-layer">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb custom-breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Projects</li>
            </ol>
        </nav>

        <div class="row align-items-center g-5">
            <!-- Left Hero Content -->
            <div class="col-lg-6 z-2" data-aos="fade-right" data-aos-duration="850">
                <h1 class="hero-title mb-3 fw-bold">
                    Our <span class="text-gradient-purple">Projects</span>
                </h1>
                <h2 class="fs-3 fw-bold text-white mb-3">
                    Real ideas. Real results.
                </h2>
                <p class="hero-subtitle mb-4 pe-lg-4 text-secondary">
                    Explore a selection of our work across different industries. Each project is designed to solve real business needs and create measurable impact.
                </p>

                <!-- 3 Feature Highlights (Pills) -->
                <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                    <div class="projects-hero-feature-pill">
                        <i class="bi bi-lightbulb"></i>
                        <span>Creative Approach</span>
                    </div>
                    <div class="projects-hero-feature-pill">
                        <i class="bi bi-people"></i>
                        <span>Industry Focused</span>
                    </div>
                    <div class="projects-hero-feature-pill">
                        <i class="bi bi-bar-chart-line"></i>
                        <span>Result Driven</span>
                    </div>
                </div>
            </div>

            <!-- Right Hero Image: Showcase Laptop with Glowing Effects -->
            <div class="col-lg-6 position-relative text-center text-lg-end" data-aos="fade-left" data-aos-duration="850" data-aos-delay="150">
                <div class="projects-hero-img-container">
                    <img src="<?= Yii::getAlias('@web/images/projects-hero-laptop.jpg') ?>" alt="Our Projects Creative Showcase" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. BRANDS THAT TRUST US (NATIONAL & REGIONAL CLIENTS) -->
<!--<?php if (false): ?>-->
<!--<section class="clients-section py-5 my-lg-2">-->
<!--    <div class="container custom-nav-container">-->
        <!-- Section Header -->
<!--        <div class="text-center mb-4 pb-2" data-aos="fade-up">-->
<!--            <div class="d-inline-flex align-items-center gap-2 mb-2">-->
<!--                <span class="section-mini-bar"></span>-->
<!--                <span class="section-label-text">Our Clients</span>-->
<!--                <span class="section-mini-bar"></span>-->
<!--            </div>-->
<!--            <h2 class="section-title mb-0">-->
<!--                Brands That <span class="text-purple">Trust Us</span>-->
<!--            </h2>-->
<!--        </div>-->
<!--    </div>-->

    <!-- Auto-scrolling Row 1 (National Clients) -->
<!--    <div class="clients-marquee-wrapper mb-3" data-aos="fade-up" data-aos-delay="100">-->
<!--        <div class="clients-marquee-track">-->
            <!-- Set 1 -->
<!--            <div class="client-logo-card">-->
<!--                <span class="d-block fw-bold tracking-wider fs-5" style="color: #0d9488; font-family: serif; letter-spacing: 0.15em;">TANISHQ</span>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="px-2 py-1 rounded border border-secondary border-opacity-25 bg-light text-center">-->
<!--                    <span class="d-block fw-bold text-dark fs-6" style="letter-spacing: -0.02em;">Joyalukkas</span>-->
<!--                    <span style="font-size: 8px; color: #64748b; display: block; line-height: 1;">World's favourite jeweller</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="d-flex align-items-center gap-1">-->
<!--                    <span class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center" style="width: 18px; height: 18px; font-size: 11px;">R</span>-->
<!--                    <span class="fw-bold" style="color: #0284c7; font-size: 0.95rem; letter-spacing: -0.02em;">reliancedigital</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <span class="d-block fw-black text-dark" style="font-size: 0.82rem; letter-spacing: 0.18em; font-weight: 800;">GEETANJALI</span>-->
<!--                    <span style="font-size: 9px; color: #64748b; letter-spacing: 0.25em; display: block;">SALON</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="d-flex align-items-center gap-1">-->
<!--                    <i class="bi bi-person-arms-up text-primary fs-5"></i>-->
<!--                    <div class="lh-1 text-start">-->
<!--                        <span class="fw-bold text-primary d-block" style="font-size: 0.95rem; font-style: italic;">FinOlex</span>-->
<!--                        <span class="text-primary fw-semibold" style="font-size: 9px; letter-spacing: 0.15em;">PIPES</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <i class="bi bi-badge-hd text-dark fs-4 d-block lh-1"></i>-->
<!--                    <span class="fw-bold text-dark" style="font-size: 0.75rem; letter-spacing: 0.2em;">HYUNDAI</span>-->
<!--                </div>-->
<!--            </div>-->

            <!-- Set 1 Duplicate for Seamless Loop -->
<!--            <div class="client-logo-card">-->
<!--                <span class="d-block fw-bold tracking-wider fs-5" style="color: #0d9488; font-family: serif; letter-spacing: 0.15em;">TANISHQ</span>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="px-2 py-1 rounded border border-secondary border-opacity-25 bg-light text-center">-->
<!--                    <span class="d-block fw-bold text-dark fs-6" style="letter-spacing: -0.02em;">Joyalukkas</span>-->
<!--                    <span style="font-size: 8px; color: #64748b; display: block; line-height: 1;">World's favourite jeweller</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="d-flex align-items-center gap-1">-->
<!--                    <span class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center" style="width: 18px; height: 18px; font-size: 11px;">R</span>-->
<!--                    <span class="fw-bold" style="color: #0284c7; font-size: 0.95rem; letter-spacing: -0.02em;">reliancedigital</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <span class="d-block fw-black text-dark" style="font-size: 0.82rem; letter-spacing: 0.18em; font-weight: 800;">GEETANJALI</span>-->
<!--                    <span style="font-size: 9px; color: #64748b; letter-spacing: 0.25em; display: block;">SALON</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="d-flex align-items-center gap-1">-->
<!--                    <i class="bi bi-person-arms-up text-primary fs-5"></i>-->
<!--                    <div class="lh-1 text-start">-->
<!--                        <span class="fw-bold text-primary d-block" style="font-size: 0.95rem; font-style: italic;">FinOlex</span>-->
<!--                        <span class="text-primary fw-semibold" style="font-size: 9px; letter-spacing: 0.15em;">PIPES</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <i class="bi bi-badge-hd text-dark fs-4 d-block lh-1"></i>-->
<!--                    <span class="fw-bold text-dark" style="font-size: 0.75rem; letter-spacing: 0.2em;">HYUNDAI</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!-- Auto-scrolling Row 2 (Regional Clients - smooth opposite or continuous direction) -->
<!--    <div class="clients-marquee-wrapper" data-aos="fade-up" data-aos-delay="200">-->
<!--        <div class="clients-marquee-track track-reverse">-->
            <!-- Set 2 -->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <span class="fw-black text-dark d-block lh-1" style="font-size: 1.15rem; font-weight: 900; letter-spacing: -0.05em;">iDA</span>-->
<!--                    <span style="font-size: 9px; color: #475569; letter-spacing: 0.12em; display: block;">DREAM ASSETS</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <i class="bi bi-gem text-dark fs-6 d-block lh-1 mb-1"></i>-->
<!--                    <span class="d-block fw-bold text-dark" style="font-size: 0.72rem; letter-spacing: 0.1em; line-height: 1.1;">CLASSIC STONES</span>-->
<!--                    <span style="font-size: 8px; color: #64748b; letter-spacing: 0.08em;">INTERNATIONAL</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <span style="font-family: 'Caveat', cursive; font-size: 1.6rem; color: #1e293b; line-height: 1;">cff</span>-->
<!--                    <span style="font-size: 8px; color: #94a3b8; display: block; letter-spacing: 0.1em;">CONTEMPO FAMILY CRAFT</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <i class="bi bi-shield-fill-check text-dark fs-6 d-block lh-1 mb-1"></i>-->
<!--                    <span class="d-block fw-bold text-dark" style="font-size: 0.7rem; letter-spacing: 0.1em; line-height: 1.1;">ASHTASIDDHI</span>-->
<!--                    <span style="font-size: 8px; color: #64748b; letter-spacing: 0.15em;">JEWELS</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <span class="d-block text-dark fw-bold" style="font-style: italic; font-size: 0.85rem; letter-spacing: 0.02em;">Featherlite</span>-->
<!--                    <span style="font-size: 8px; color: #64748b; display: block;">by PGL Furnitures</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="d-flex align-items-center gap-1">-->
<!--                    <i class="bi bi-bullseye text-dark fs-5"></i>-->
<!--                    <div class="text-start lh-1">-->
<!--                        <span class="d-block fw-black text-dark" style="font-size: 0.75rem; font-weight: 900; letter-spacing: 0.08em;">GUPTA</span>-->
<!--                        <span style="font-size: 8px; color: #64748b; letter-spacing: 0.08em;">DISTRIBUTORS</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <!-- Set 2 Duplicate for Seamless Loop -->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <span class="fw-black text-dark d-block lh-1" style="font-size: 1.15rem; font-weight: 900; letter-spacing: -0.05em;">iDA</span>-->
<!--                    <span style="font-size: 9px; color: #475569; letter-spacing: 0.12em; display: block;">DREAM ASSETS</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <i class="bi bi-gem text-dark fs-6 d-block lh-1 mb-1"></i>-->
<!--                    <span class="d-block fw-bold text-dark" style="font-size: 0.72rem; letter-spacing: 0.1em; line-height: 1.1;">CLASSIC STONES</span>-->
<!--                    <span style="font-size: 8px; color: #64748b; letter-spacing: 0.08em;">INTERNATIONAL</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <span style="font-family: 'Caveat', cursive; font-size: 1.6rem; color: #1e293b; line-height: 1;">cff</span>-->
<!--                    <span style="font-size: 8px; color: #94a3b8; display: block; letter-spacing: 0.1em;">CONTEMPO FAMILY CRAFT</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <i class="bi bi-shield-fill-check text-dark fs-6 d-block lh-1 mb-1"></i>-->
<!--                    <span class="d-block fw-bold text-dark" style="font-size: 0.7rem; letter-spacing: 0.1em; line-height: 1.1;">ASHTASIDDHI</span>-->
<!--                    <span style="font-size: 8px; color: #64748b; letter-spacing: 0.15em;">JEWELS</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="text-center">-->
<!--                    <span class="d-block text-dark fw-bold" style="font-style: italic; font-size: 0.85rem; letter-spacing: 0.02em;">Featherlite</span>-->
<!--                    <span style="font-size: 8px; color: #64748b; display: block;">by PGL Furnitures</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="client-logo-card">-->
<!--                <div class="d-flex align-items-center gap-1">-->
<!--                    <i class="bi bi-bullseye text-dark fs-5"></i>-->
<!--                    <div class="text-start lh-1">-->
<!--                        <span class="d-block fw-black text-dark" style="font-size: 0.75rem; font-weight: 900; letter-spacing: 0.08em;">GUPTA</span>-->
<!--                        <span style="font-size: 8px; color: #64748b; letter-spacing: 0.08em;">DISTRIBUTORS</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<?php endif; ?>-->

<!-- 3. FEATURED PROJECTS (DARK RADIAL SECTION WITH 4 WORK CARDS) -->
<section class="featured-projects-section py-5 position-relative text-white">
    <div class="container custom-nav-container py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 mb-2">
                <span class="section-mini-bar"></span>
                <span class="text-uppercase fw-bold text-white-50" style="font-size: 0.82rem; letter-spacing: 0.15em;">OUR WORK</span>
                <span class="section-mini-bar"></span>
            </div>
            <h2 class="display-5 fw-bold text-white mb-2">
                Featured <span class="text-purple">Projects</span>
            </h2>
            <p class="text-secondary mx-auto mb-0" style="max-width: 580px; font-size: 0.95rem;">
                Well-crafted campaigns and creative assets that match our clients' goals. Explore a selection of our best work.
            </p>
        </div>

        <!-- 4 Featured Project Cards Grid -->
        <div class="row g-4 justify-content-center">
            <!-- Card 01: Food Campaign - ITC Welcom Bhubaneswar -->
            <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="featured-project-card">
                    <video class="featured-project-card-bg"
                        autoplay loop muted playsinline preload="metadata"
                        poster="<?= Yii::getAlias('@web/images/project-food-poster.jpg') ?>"
                        aria-label="Food Campaign - ITC Welcom Bhubaneswar">
                        <source src="<?= Yii::getAlias('@web/videos/food.mp4') ?>" type="video/mp4">
                    </video>
                    <div class="featured-project-overlay"></div>
                    
                    <!-- Top Index -->
                    <div class="featured-project-top">
                        <span class="featured-project-num">01</span>
                        <button class="featured-project-audio-toggle" type="button" aria-label="Unmute video" aria-pressed="false">
                            <i class="bi bi-volume-mute-fill" aria-hidden="true"></i>
                        </button>
                    </div>

                    <!-- Bottom Content -->
                    <div class="featured-project-body">
                        <span class="project-tag-pill tag-digital-marketing">Digital Marketing</span>
                        <h3 class="featured-project-title">
                            Food Campaign – ITC Welcom Bhubaneswar
                        </h3>
                        <p class="featured-project-desc">
                            Social media campaign, influencer collaboration and event coverage.
                        </p>
                        <div class="featured-project-meta">
                            <span>ADS</span>
                            <span class="separator">•</span>
                            <span>FOOD CAMPAIGN</span>
                            <span class="separator">•</span>
                            <span><?= date('Y') ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 02: Ad Shoot for Epari Sadashiv Jewellers -->
            <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="featured-project-card">
                   <video class="featured-project-card-bg"
                        autoplay loop muted playsinline preload="metadata"
                        poster="<?= Yii::getAlias('@web/images/project-jewellery-poster.jpg') ?>"
                        aria-label="Ad Shoot for Epari Sadashiv Jewellers">
                        <source src="<?= Yii::getAlias('@web/videos/event.mp4') ?>" type="video/mp4">
                    </video>
                    <div class="featured-project-overlay"></div>

                    <!-- Top Index -->
                    <div class="featured-project-top">
                        <span class="featured-project-num">02</span>
                        <button class="featured-project-audio-toggle" type="button" aria-label="Unmute video" aria-pressed="false">
                            <i class="bi bi-volume-mute-fill" aria-hidden="true"></i>
                        </button>
                    </div>

                    <!-- Bottom Content -->
                    <div class="featured-project-body">
                        <span class="project-tag-pill tag-video-production">Video Production</span>
                        <h3 class="featured-project-title">
                            Ad Shoot for Epari Sadashiv Jewellers
                        </h3>
                        <p class="featured-project-desc">
                            Product video shoot, editing and promotional campaign.
                        </p>
                        <div class="featured-project-meta">
                            <span>JEWELLERY ADS SHOOT</span>
                            <span class="separator">•</span>
                            <span><?= date('Y') ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 03: Furniture Ad - Gupta Distributor -->
            <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="featured-project-card">
                    <video class="featured-project-card-bg"
                        autoplay loop muted playsinline preload="metadata"
                        poster="<?= Yii::getAlias('@web/images/project-interior-poster.jpg') ?>"
                        aria-label="Interior Design Campaign - Modern Living">
                        <source src="<?= Yii::getAlias('@web/videos/interior.mp4') ?>" type="video/mp4">
                    </video>
                    <div class="featured-project-overlay"></div>

                    <!-- Top Index -->
                    <div class="featured-project-top">
                        <span class="featured-project-num">03</span>
                        <button class="featured-project-audio-toggle" type="button" aria-label="Unmute video" aria-pressed="false">
                            <i class="bi bi-volume-mute-fill" aria-hidden="true"></i>
                        </button>
                    </div>

                    <!-- Bottom Content -->
                    <div class="featured-project-body">
                        <span class="project-tag-pill tag-campaigns">Campaigns</span>
                        <h3 class="featured-project-title">
                            Furniture Ad – Gupta Distributor
                        </h3>
                        <p class="featured-project-desc">
                            Ad shoot and digital campaign for brand promotion.
                        </p>
                        <div class="featured-project-meta">
                            <span>ADS</span>
                            <span class="separator">•</span>
                            <span><?= date('Y') ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 04: Business Website - Classic Stones -->
            <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="featured-project-card">
                    <video class="featured-project-card-bg"
                        autoplay loop muted playsinline preload="metadata"
                        poster="<?= Yii::getAlias('@web/images/project-website-poster.jpg') ?>"
                        aria-label="Business Website - Classic Stones">
                        <source src="<?= Yii::getAlias('@web/videos/college.mp4') ?>" type="video/mp4">
                    </video>
                    <div class="featured-project-overlay"></div>

                    <!-- Top Index -->
                    <div class="featured-project-top">
                        <span class="featured-project-num">04</span>
                        <button class="featured-project-audio-toggle" type="button" aria-label="Unmute video" aria-pressed="false">
                            <i class="bi bi-volume-mute-fill" aria-hidden="true"></i>
                        </button>
                    </div>

                    <!-- Bottom Content -->
                    <div class="featured-project-body">
                        <span class="project-tag-pill tag-web-dev">Web Development</span>
                        <h3 class="featured-project-title">
                            Business Website – Classic Stones
                        </h3>
                        <p class="featured-project-desc">
                            Modern and responsive website development.
                        </p>
                        <div class="featured-project-meta">
                            <span>WEBSITE</span>
                            <span class="separator">•</span>
                            <span><?= date('Y') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.featured-project-audio-toggle').forEach((button) => {
    const card = button.closest('.featured-project-card');
    const video = card ? card.querySelector('video') : null;
    const icon = button.querySelector('i');

    if (!video || !icon) {
        return;
    }

    button.addEventListener('click', () => {
        video.muted = !video.muted;
        button.setAttribute('aria-pressed', String(!video.muted));
        button.setAttribute('aria-label', video.muted ? 'Unmute video' : 'Mute video');
        icon.className = video.muted
            ? 'bi bi-volume-mute-fill'
            : 'bi bi-volume-up-fill';
    });
});
</script>

<!-- 4. PEOPLE BEHIND OUR WORK (MEET OUR TEAM MEMBERS) -->
<section class="team-section py-5 my-lg-4">
    <div class="container custom-nav-container">
        <div class="row align-items-center g-4">
            <!-- Left Header Column -->
            <div class="col-lg-4 col-md-12" data-aos="fade-right">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="section-mini-bar"></span>
                    <span class="section-label-text">Our Team</span>
                </div>
                <h2 class="display-6 fw-bold text-dark mb-3 lh-sm">
                    People Behind<br>Our <span class="text-purple">Work</span>
                </h2>
                <p class="text-secondary fs-6 mb-4 pe-lg-3 lh-base">
                    A passionate team of creators, strategists and problem solvers working to bring ideas to life.
                </p>
                <div>
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-2 rounded-pill shadow-sm">
                        Work With Us <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Right: 4 Team Member Cards -->
            <div class="col-lg-8 col-md-12">
                <div class="row g-3 row-cols-2 row-cols-md-4">
                    <!-- Member 1: Suraj Bhai -->
                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member-card">
                            <img src="<?= Yii::getAlias('@web/images/Suraj_Bhai.jpeg') ?>" alt="Suraj - Digital Marketing Head">
                            <div class="team-member-role-badge">
                            </div>
                            <div class="team-member-footer">
                                <h4 class="team-member-name">Mr. Rout</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Member 2: Suraj -->
                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member-card">
                            <img src="<?= Yii::getAlias('@web/images/suraj_jena.jpeg') ?>" alt="Suraj - Senior Video Editor">
                            <div class="team-member-role-badge">
                            </div>
                            <div class="team-member-footer">
                                <h4 class="team-member-name">Mr. Jena</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Member 3: Sarada -->
                    <div class="col" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member-card">
                            <img src="<?= Yii::getAlias('@web/images/digital_intern.jpeg') ?>" alt="Sarada - Creative Designer">
                            <div class="team-member-role-badge">
                            </div>
                            <div class="team-member-footer">
                                <h4 class="team-member-name">Mr. Sarada</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Member 4: Binayak -->
                    <div class="col" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member-card">
                            <img src="<?= Yii::getAlias('@web/images/team-jagdish.jpg') ?>" alt="Jagdish - Graphic & Video Editor">
                            <div class="team-member-role-badge">
                            </div>
                            <div class="team-member-footer">
                                <h4 class="team-member-name">Mr. Sahoo</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 5. CALL TO ACTION BANNER -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container custom-nav-container text-center py-3" data-aos="fade-up">
        <h3 class="fw-bold mb-2">Have a Project in Mind?</h3>
        <p class="text-secondary mb-4 mx-auto" style="max-width: 520px;">
            Let's discuss your vision and build high-converting marketing campaigns and websites together.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-2 rounded-pill shadow-sm">
                Start Your Project <i class="bi bi-arrow-right ms-1"></i>
            </a>
            <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-outline-dark fw-semibold px-4 py-2 rounded-pill">
                Explore Services
            </a>
        </div>
    </div>
</section>
