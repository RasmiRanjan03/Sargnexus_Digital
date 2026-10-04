<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<footer id="footer" class="site-footer bg-dark-navy text-white pt-5 pb-4">
    <div class="container custom-nav-container">
        <div class="row g-4 justify-content-between pb-5 border-bottom border-secondary border-opacity-25">
            <!-- Brand Column -->
            <div class="col-lg-3 col-md-6">
                <a class="navbar-brand d-inline-flex align-items-center gap-2 mb-3" href="<?= Url::to(['/site/index']) ?>">
                    <span class="sn-logo-badge">SN</span>
                    <div class="brand-text d-flex flex-column lh-1">
                        <span class="brand-title text-white">SARGNEXUS</span>
                        <span class="brand-sub">DIGITAL</span>
                    </div>
                </a>
                <p class="text-secondary small pe-lg-3 mt-2 lh-base">
                    Digital solutions that help your business get seen, get leads and grow.
                </p>
                <div class="footer-social-icons d-flex gap-3 mt-3">
                    <a href="https://linkedin.com" target="_blank" rel="noopener" class="social-icon-btn"><i class="bi bi-linkedin"></i></a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="social-icon-btn"><i class="bi bi-instagram"></i></a>
                    <a href="https://youtube.com" target="_blank" rel="noopener" class="social-icon-btn"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Services Column -->
            <div class="col-lg-3 col-6">
                <h6 class="footer-heading mb-3 text-white fw-bold">Services</h6>
                <ul class="list-unstyled footer-links small">
                    <li class="mb-2"><a href="<?= Url::to(['/site/services']) ?>">SEO</a></li>
                    <li class="mb-2"><a href="<?= Url::to(['/site/services']) ?>">Online Advertising</a></li>
                    <li class="mb-2"><a href="<?= Url::to(['/site/services']) ?>">Lead Generation</a></li>
                    <li class="mb-2"><a href="<?= Url::to(['/site/services']) ?>">Branding &amp; Design</a></li>
                    <li class="mb-2"><a href="<?= Url::to(['/site/services']) ?>">Reels &amp; Social Media Content</a></li>
                    <li class="mb-2"><a href="<?= Url::to(['/site/services']) ?>">Logo Design</a></li>
                </ul>
            </div>

            <!-- Company Column -->
            <div class="col-lg-3 col-6">
                <h6 class="footer-heading mb-3 text-white fw-bold">Company</h6>
                <ul class="list-unstyled footer-links small">
                    <li class="mb-2"><a href="<?= Url::to(['/site/index']) ?>">Home</a></li>
                    <li class="mb-2"><a href="<?= Url::to(['/site/services']) ?>">Services</a></li>
                    <li class="mb-2"><a href="<?= Url::to(['/site/quote']) ?>">Get a Quote</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading mb-3 text-white fw-bold">Contact</h6>
                <ul class="list-unstyled footer-contact small text-secondary">
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i class="bi bi-envelope text-white-50"></i>
                        <a href="mailto:hello@sargnexus.com" class="text-secondary text-decoration-none hover-light">hello@sargnexus.com</a>
                    </li>
                    <li class="mb-2 d-flex align-items-center gap-2">
                        <i class="bi bi-telephone text-white-50"></i>
                        <a href="tel:+918763585769" class="text-secondary text-decoration-none hover-light">+91 8763585769</a>
                    </li>
                    <li class="mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt text-white-50"></i>
                        <span>Bhubaneswar, India</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pt-4 small text-secondary">
            <div>
                &copy; <?= date('Y') ?> SARGNEXUS Digital. All rights reserved.
            </div>
            <div class="d-flex gap-3 mt-2 mt-md-0">
                <a href="#" class="text-secondary text-decoration-none hover-light">Terms</a>
                <span>|</span>
                <a href="#" class="text-secondary text-decoration-none hover-light">Privacy</a>
            </div>
        </div>
    </div>
</footer>
