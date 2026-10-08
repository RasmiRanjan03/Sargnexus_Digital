<?php

/** @var yii\web\View $this */
/** @var app\models\Quote $model */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Get a Quote - SARGNEXUS Digital';
$this->params['meta_description'] = 'Request a quote for digital marketing, SEO, advertising, and branding services with SARGNEXUS Digital.';
$this->params['fluid'] = true;
?>

<section class="quote-page-section pb-5 position-relative overflow-hidden">
    <!-- Atmospheric glow bubbles -->
    <div class="quote-glow-bg-1"></div>
    <div class="quote-glow-bg-2"></div>

    <div class="container custom-nav-container py-lg-4 position-relative z-2">
        <div class="row align-items-center g-5 justify-content-between">
            <!-- Left Info Column -->
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="850">
                <span class="agency-tag text-primary text-uppercase fw-bold mb-2 d-inline-block tracking-wider">
                    HAVE A PROJECT IN MIND?
                </span>
                <h1 class="hero-title text-dark mb-3">
                    Let's Grow Your<br>
                    Business <span class="text-gradient-purple">Together.</span>
                </h1>
                <p class="hero-subtitle text-secondary mb-5">
                    Tell us what you need and we'll get back to you with the right solution.
                </p>

                <!-- Value Proposition Points -->
                <div class="d-flex flex-column gap-4">
                    <!-- Point 1 -->
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="quote-feature-icon flex-shrink-0">
                            <i class="bi bi-lightning-charge-fill text-primary"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1 fs-6 text-dark">Quick Response</h5>
                            <p class="text-secondary small mb-0">We'll get back to you soon.</p>
                        </div>
                    </div>

                    <!-- Point 2 -->
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="quote-feature-icon flex-shrink-0">
                            <i class="bi bi-file-earmark-text-fill text-primary"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1 fs-6 text-dark">Right Solution</h5>
                            <p class="text-secondary small mb-0">We'll understand your needs before suggesting a plan.</p>
                        </div>
                    </div>

                    <!-- Point 3 -->
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="quote-feature-icon flex-shrink-0">
                            <i class="bi bi-person-check-fill text-primary"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1 fs-6 text-dark">Easy to Start</h5>
                            <p class="text-secondary small mb-0">Just share your requirements with us.</p>
                        </div>
                    </div>
                </div>

                <!-- Paper Plane Decorative Trail -->
                <div class="paper-plane-decoration d-none d-lg-block mt-4 position-relative" data-aos="zoom-in" data-aos-delay="400">
                    <svg width="220" height="90" viewBox="0 0 220 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 80C60 85 90 40 140 45C170 48 190 20 205 12" stroke="#818cf8" stroke-width="2" stroke-dasharray="4 4"/>
                        <path d="M210 5L195 18L205 12L215 15L210 5Z" fill="#6366f1"/>
                    </svg>
                </div>
            </div>

            <!-- Right Form Card -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="850" data-aos-delay="150">
                <div class="quote-form-card shadow-lg p-4 p-md-5 bg-white">
                    <div class="quote-form-header mb-4">
                        <div class="quote-accent-bar mb-3"></div>
                        <h2 class="fw-bold mb-1 text-dark">Request a <span class="text-purple">Quote</span></h2>
                        <p class="text-secondary small mb-0">Tell us a little about your project.</p>
                    </div>

                    <?php $form = ActiveForm::begin([
                        'id' => 'quote-form',
                        'options' => ['class' => 'd-flex flex-column gap-3'],
                    ]); ?>

                    <div class="form-group">
                        <label class="form-label fw-semibold small text-dark">Your Name <span class="text-danger">*</span></label>
                        <?= $form->field($model, 'name', ['template' => '{input}{error}'])->textInput([
                            'placeholder' => 'Enter your name',
                            'class' => 'form-control custom-form-input',
                            'required' => true,
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label fw-semibold small text-dark">Your Email <span class="text-danger">*</span></label>
                        <?= $form->field($model, 'email', ['template' => '{input}{error}'])->input('email', [
                            'placeholder' => 'Enter your email',
                            'class' => 'form-control custom-form-input',
                            'required' => true,
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label fw-semibold small text-dark">Subject <span class="text-danger">*</span></label>
                        <?= $form->field($model, 'subject', ['template' => '{input}{error}'])->textInput([
                            'placeholder' => 'What do you need help with?',
                            'class' => 'form-control custom-form-input',
                            'required' => true,
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label fw-semibold small text-dark">Message <span class="text-danger">*</span></label>
                        <?= $form->field($model, 'message', ['template' => '{input}{error}'])->textarea([
                            'rows' => 4,
                            'placeholder' => 'Tell us about your requirements...',
                            'class' => 'form-control custom-form-input',
                            'required' => true,
                        ]) ?>
                    </div>

                    <div class="mt-2">
                        <?= Html::submitButton('Request a Quote &rarr;', [
                            'class' => 'btn btn-purple-gradient text-white w-100 py-3 rounded-3 fw-bold fs-6 shadow-sm',
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
