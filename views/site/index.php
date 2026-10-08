<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'SARGNEXUS Digital - Grow Your Business Online';
$this->params['meta_description'] = 'We help businesses get noticed, reach the right people, and turn online attention into real customers.';
$this->params['fluid'] = true; // Full-width section styling
?>

<!-- 1. HERO SECTION -->
<section class="hero-section text-white">
    <img src="<?= Yii::getAlias('@web/images/hero-laptop.jpg') ?>" alt="Digital Marketing Growth" class="hero-bg-cover">
    <div class="hero-bg-gradient"></div>
    <div class="container custom-nav-container hero-content-layer">
        <div class="row align-items-center g-5">
            <!-- Left Hero Content -->
            <div class="col-lg-6 z-2" data-aos="fade-right" data-aos-duration="900">
                <span class="agency-tag text-uppercase fw-bold mb-3 d-inline-block tracking-wider">
                    DIGITAL MARKETING AGENCY
                </span>
                <h1 class="hero-title mb-4">
                    Grow Your<br>
                    Business <span class="text-gradient-purple">Online.</span>
                </h1>
                <p class="hero-subtitle mb-4 pe-lg-4">
                    We help businesses get noticed, reach the right people, and turn online attention into real customers.
                </p>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-3 rounded-pill">
                        Get a Free Quote <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-outline-purple fw-semibold px-4 py-3 rounded-pill">
                        Explore Services
                    </a>
                </div>
            </div>

            <!-- Right Hero Badge / Accents (Laptop is now the background cover) -->
            <div class="col-lg-6 position-relative d-none d-lg-block" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <div class="hero-badge-corner">
                    <span class="handwritten-badge">
                        Your<br>Growth<br>Partner
                    </span>
                    <span class="curved-arrow"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. ABOUT SARGNEXUS DIGITAL SECTION -->
<section id="about" class="about-section py-5 my-lg-4">
    <div class="container custom-nav-container">
        <div class="row align-items-center g-5">
            <!-- Left About Text & Stats -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                <span class="section-tag text-uppercase mb-2 d-inline-block">
                    ABOUT SARGNEXUS DIGITAL
                </span>
                <h2 class="section-title mb-3">
                    Digital Marketing<br>
                    Made <span class="text-purple">Simple.</span>
                </h2>
                <p class="section-subtitle mb-4">
                    We help businesses build a stronger online presence, reach the right customers, and grow with the right digital marketing strategy.
                </p>
                <div class="mb-5">
                    <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-dark-navy px-4 py-2 rounded-pill fw-semibold">
                        Our Approach <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>

                <!-- Stats Bar -->
                <div class="row g-3 border-top pt-4">
                    <div class="col-6 col-sm-3 stat-item">
                        <h3 class="fw-bold mb-0">50+</h3>
                        <small class="text-secondary">Businesses Reached</small>
                    </div>
                    <div class="col-6 col-sm-3 stat-item">
                        <h3 class="fw-bold mb-0">100+</h3>
                        <small class="text-secondary">Projects Completed</small>
                    </div>
                    <div class="col-6 col-sm-3 stat-item">
                        <h3 class="fw-bold mb-0">8+</h3>
                        <small class="text-secondary">Digital Services</small>
                    </div>
                    <div class="col-6 col-sm-3 stat-item">
                        <h3 class="fw-bold mb-0">24/7</h3>
                        <small class="text-secondary">Support</small>
                    </div>
                </div>
            </div>

            <!-- Right Composite Image with Badges -->
            <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="850">
                <div class="about-composite-wrapper position-relative px-lg-3">
                    <!-- Top floating badge -->
                    <div class="floating-info-card card-top-left d-none d-sm-block">
                        <span class="fw-bold text-dark d-block">Strategy</span>
                        <span class="text-secondary small">Plan the right approach for your business.</span>
                    </div>

                    <div class="about-main-image-box">
                        <img src="<?= Yii::getAlias('@web/images/about-team.jpg') ?>" alt="Sargnexus Digital Strategy Team Collaboration" class="about-main-image img-fluid">
                    </div>

                    <!-- Bottom floating badges -->
                    <div class="floating-info-card card-bottom-left">
                        <span class="fw-bold text-dark d-block">Create</span>
                        <span class="text-secondary small">Engaging content that people remember.</span>
                    </div>
                    <div class="floating-info-card card-bottom-right d-none d-sm-block">
                        <span class="fw-bold text-dark d-block">Grow</span>
                        <span class="text-secondary small">Turn attention into real customers.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICES SECTION -->
<section id="services" class="services-section py-5">
    <div class="container custom-nav-container">
        <!-- Section Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5" data-aos="fade-up">
            <div>
                <span class="section-tag text-uppercase mb-2 d-inline-block">OUR SERVICES</span>
                <h2 class="section-title mb-0">
                    Everything You Need to <span class="text-purple">Grow Online.</span>
                </h2>
            </div>
            <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-outline-secondary rounded-pill px-4 py-2 mt-3 mt-md-0 fw-semibold text-nowrap">
                View All Services <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <!-- 7 Services Grid matching Services Page -->
        <div class="row g-4 justify-content-center">
            <!-- 1. Social Media Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-marketing.jpg') ?>" alt="Social Media Marketing">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Social Media Marketing</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0">Grow your audience and brand reach across key social platforms.</p>
                    </div>
                </div>
            </div>

            <!-- 2. Influencer Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-influencer.jpg') ?>" alt="Influencer Marketing">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Digital Marketing Strategy</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0">We create digital strategies that help businesses reach more customers..</p>
                    </div>
                </div>
            </div>

            <!-- 3. Performance Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-advertising.jpg') ?>" alt="Performance Marketing">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Content Creation </h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0">We create engaging content to promote your brand and attract customers.</p>
                    </div>
                </div>
            </div>

            <!-- 4. Campaigns & BTL Activities -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-campaigns-btl.jpg') ?>" alt="Campaigns & BTL Activities">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Meta Ads</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0"> We run targeted Facebook and Instagram ads to reach the right audience.</p>
                    </div>
                </div>
            </div>

            <!-- 5. Photoshoot & Video Shoot -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-photoshoot.jpg') ?>" alt="Photoshoot & Video Shoot">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Google Ads</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0"> We run Google Ads to increase your online visibility and get more customers.</p>
                    </div>
                </div>
            </div>

            <!-- 6. Branding -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-branding.jpg') ?>" alt="Branding">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Social Media Handling</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0">We manage your social media with regular posts and audience engagement.</p>
                    </div>
                </div>
            </div>

            <!-- 7. PR Marketing -->
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-branding.jpg') ?>" alt="Branding">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Meta Business Ads</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0"> We run targeted Meta ads to help businesses reach the right audience and generate more leads.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4. WHY CHOOSE US (DARK CINEMATIC SECTION) -->
<section class="why-us-section py-5 my-4 position-relative">
    <img src="<?= Yii::getAlias('@web/images/why-us-boardroom.jpg') ?>" alt="Boardroom Strategy" class="why-us-bg-cover">
    <div class="container custom-nav-container position-relative z-2 py-4">
        <div class="mb-5">
            <span class="agency-tag text-uppercase mb-2 d-inline-block tracking-wider">WHY CHOOSE US</span>
            <h2 class="hero-title fs-1 mb-0">
                Why Businesses Choose<br>
                SARGNEXUS <span class="text-gradient-purple">Digital.</span>
            </h2>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-feature-card">
                    <div class="why-feature-icon mb-3">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2 fs-6">Simple Strategy</h5>
                    <p class="text-secondary small mb-0">We keep marketing clear and easy to understand.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-feature-card">
                    <div class="why-feature-icon mb-3">
                        <i class="bi bi-people"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2 fs-6">Right Audience</h5>
                    <p class="text-secondary small mb-0">We focus on reaching people who are most likely to become customers.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-feature-card">
                    <div class="why-feature-icon mb-3">
                        <i class="bi bi-bar-chart-line"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2 fs-6">Creative + Data</h5>
                    <p class="text-secondary small mb-0">We combine creative ideas with real performance data.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="why-feature-card">
                    <div class="why-feature-icon mb-3">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2 fs-6">Focused on Growth</h5>
                    <p class="text-secondary small mb-0">We don't just chase likes. We focus on visibility, leads and business growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. PRICING SECTION -->
<section id="pricing" class="pricing-section py-5">
    <div class="container custom-nav-container">
        <!-- Section Title & Subtitle -->
        <div class="text-center mb-5 position-relative" data-aos="fade-up">
            <span class="section-tag text-uppercase mb-2 d-inline-block">PRICING</span>
            <h2 class="section-title mb-2">
                Choose Your <span class="text-purple">Growth Plan</span> Wisely.
            </h2>
            <p class="section-subtitle mb-0">
                Start with what you need today. Upgrade when your business is ready for more.
            </p>
            <div class="position-absolute end-0 top-0 d-none d-lg-block">
                <span class="handwritten-badge fs-5">More Tools<br>More Growth &rarr;</span>
            </div>
        </div>

        <!-- 3 Tier Pricing Cards -->
        <div class="row g-4 align-items-stretch">
            <!-- STARTER -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card h-100">
                    <div>
                        <div class="pricing-plan-badge text-uppercase mb-2">STARTER</div>
                        <div class="d-flex align-items-baseline gap-1 mb-1">
                            <span class="pricing-price">&#8377;9,999</span>
                            <span class="pricing-period">/ month</span>
                        </div>
                        <p class="text-secondary small mb-4">For businesses getting started.</p>

                        <ul class="pricing-features-list">
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Social Media Content</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Basic SEO</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> 8 Social Posts</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Monthly Report</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Basic Content Strategy</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Google Ads</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Lead Generation</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Advanced SEO</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Reels &amp; Video Content</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Competitor Research</li>
                        </ul>
                    </div>

                    <div>
                        <div class="premium-locked-box d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-lock-fill text-secondary"></i>
                            <span><strong>Premium features</strong><br>Unlock more tools and customization with higher plans.</span>
                        </div>
                        <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-outline-secondary w-100 rounded-pill py-2 fw-semibold">
                            Start with Starter &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- GROWTH (MOST POPULAR) -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card featured-card h-100">
                    <span class="most-popular-pill">Most Popular</span>
                    <div>
                        <div class="pricing-plan-badge text-uppercase text-primary mb-2">GROWTH</div>
                        <div class="d-flex align-items-baseline gap-1 mb-1">
                            <span class="pricing-price">&#8377;19,999</span>
                            <span class="pricing-period">/ month</span>
                        </div>
                        <p class="text-secondary small mb-4">For businesses ready to grow.</p>

                        <ul class="pricing-features-list">
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Everything in Starter</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Advanced SEO</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Google / Meta Ads</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> 15 Social Posts</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Lead Generation</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Competitor Research</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Conversion Optimization</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Advanced Analytics</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Dedicated Strategy</li>
                            <li class="disabled-feature"><i class="bi bi-lock text-muted fs-6"></i> Priority Support</li>
                        </ul>
                    </div>

                    <div>
                        <div class="premium-locked-box d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-lock-fill text-secondary"></i>
                            <span><strong>Want more control and customization?</strong><br>These features are available in Premium.</span>
                        </div>
                        <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white w-100 rounded-pill py-2 fw-semibold">
                            Choose Growth &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- PREMIUM -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-card h-100">
                    <div>
                        <div class="pricing-plan-badge text-uppercase mb-2">PREMIUM</div>
                        <div class="d-flex align-items-baseline gap-1 mb-1">
                            <span class="pricing-price">&#8377;29,999</span>
                            <span class="pricing-period">/ month</span>
                        </div>
                        <p class="text-secondary small mb-4">For a complete marketing solution.</p>

                        <ul class="pricing-features-list">
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Everything in Growth</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Advanced SEO</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Google + Meta Ads</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Lead Generation</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Reels &amp; Video Content</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Conversion Optimization</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Dedicated Analytics</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Advanced Strategy</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> Custom Campaigns</li>
                            <li><i class="bi bi-check-lg text-success fs-5"></i> 24/7 Priority Support</li>
                        </ul>
                    </div>

                    <div>
                        <div class="premium-locked-box d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-shield-check text-success"></i>
                            <span><strong>Advanced features</strong><br>Unlock complete control and custom solutions.</span>
                        </div>
                        <a href="#contact" class="btn btn-dark-navy w-100 rounded-pill py-2 fw-semibold">
                            Let's Talk &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. BUILD YOUR OWN CUSTOM MARKETING PLAN SECTION -->
<section id="custom-plan" class="custom-plan-section py-5">
    <div class="container custom-nav-container">
        <div class="custom-plan-container p-4 p-md-5">
            <div class="row g-4 align-items-center">
                <!-- Checklist column -->
                <div class="col-lg-4">
                    <span class="section-tag text-uppercase mb-1 d-inline-block">CUSTOM PLAN</span>
                    <h3 class="fw-bold mb-2 fs-4">Build Your Own Marketing Plan.</h3>
                    <p class="text-secondary small mb-4">
                        Don't need everything? No problem. Choose only the services your business needs.
                    </p>

                    <div class="row g-2">
                        <div class="col-6">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox" checked>
                                <span class="small fw-medium">SEO</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox" checked>
                                <span class="small fw-medium">Reels &amp; Content</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox">
                                <span class="small fw-medium">Google Ads</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox">
                                <span class="small fw-medium">Branding</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox">
                                <span class="small fw-medium">Meta Ads</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox">
                                <span class="small fw-medium">Graphics Design</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox">
                                <span class="small fw-medium">Lead Generation</span>
                            </label>
                        </div>
                        <div class="col-6">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox">
                                <span class="small fw-medium">Logo Design</span>
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="service-check-box">
                                <input class="form-check-input me-2" type="checkbox">
                                <span class="small fw-medium">Social Media</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Price estimation middle card -->
                <div class="col-lg-4 text-center" data-aos="zoom-in" data-aos-delay="150">
                    <div class="custom-quote-card p-4">
                        <span class="text-secondary small text-uppercase fw-semibold d-block mb-1">Your Custom Plan</span>
                        <h4 class="fw-bold mb-2 fs-5">Starting from &#8377;X,XXX</h4>
                        <p class="text-secondary small mb-4">Choose your services. We'll create a plan around your goals.</p>
                        <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold rounded-pill px-4 py-2">
                            Get Custom Quote &rarr;
                        </a>
                    </div>
                </div>

                <!-- Right checklist notebook photo -->
                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200">
                    <div class="custom-plan-notes-box">
                        <img src="<?= Yii::getAlias('@web/images/custom-plan-notes.jpg') ?>" alt="Marketing plan checklist notepad" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. TESTIMONIALS SECTION -->
<section class="testimonials-section py-5">
    <div class="container custom-nav-container">
        <!-- Section Header with carousel arrows -->
        <div class="d-flex justify-content-between align-items-end mb-4" data-aos="fade-up">
            <div>
                <span class="section-tag text-uppercase mb-1 d-inline-block">TESTIMONIALS</span>
                <h2 class="section-title mb-0">What Our Clients Say</h2>
            </div>
            <div class="d-flex gap-2">
                <button class="testimonial-nav-btn" aria-label="Previous testimonial"><i class="bi bi-arrow-left"></i></button>
                <button class="testimonial-nav-btn" aria-label="Next testimonial"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>

        <!-- 3 Client Feedback Cards -->
        <div class="row g-4">
            <!-- Review 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card">
                    <p class="testimonial-quote mb-4">
                        &ldquo;The team understood what our business needed and made digital marketing much easier for us.&rdquo;
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="testimonial-author-avatar">
                            <span>RM</span>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Rohan Mehta</h6>
                            <small class="text-secondary">Mehta Construction</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card">
                    <p class="testimonial-quote mb-4">
                        &ldquo;Great results and a very professional team. Our online presence has improved a lot.&rdquo;
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="testimonial-author-avatar">
                            <span>PS</span>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Priya Sharma</h6>
                            <small class="text-secondary">Sharma Boutique</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card">
                    <p class="testimonial-quote mb-4">
                        &ldquo;Highly recommend SARGNEXUS Digital for any business looking to grow online.&rdquo;
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="testimonial-author-avatar">
                            <span>AP</span>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Amit Patnaik</h6>
                            <small class="text-secondary">Patnaik Enterprises</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. BOTTOM CTA BANNER -->
<section id="contact" class="cta-banner-section py-5 text-white" data-aos="fade-up">
    <div class="container custom-nav-container py-3">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-7">
                <span class="agency-tag text-uppercase mb-2 d-inline-block">LET'S GROW TOGETHER</span>
                <h2 class="fw-bold mb-2 fs-2">Ready to Grow Your Business Online?</h2>
                <p class="text-secondary mb-0">Let's find the right digital marketing plan for your business.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-3 rounded-pill d-inline-block mb-3">
                    Get Your Free Quote <i class="bi bi-arrow-right ms-1"></i>
                </a>
                <ul class="list-unstyled cta-perks d-flex flex-wrap gap-3 justify-content-lg-end mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary"></i> No complicated plans.</li>
                    <li><i class="bi bi-check-circle-fill text-primary"></i> No unnecessary services.</li>
                    <li><i class="bi bi-check-circle-fill text-primary"></i> Just the right strategy for your business.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
