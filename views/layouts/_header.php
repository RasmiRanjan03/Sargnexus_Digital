<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$currentAction = Yii::$app->controller->action->id;
?>
<header id="header" class="site-header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-header-dark py-3">
        <div class="container custom-nav-container">
            <!-- Brand Logo -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="<?= Url::to(['/site/index']) ?>">
                <span class="sn-logo-badge">SN</span>
                <div class="brand-text d-flex flex-column lh-1">
                    <span class="brand-title">SARGNEXUS</span>
                    <span class="brand-sub">DIGITAL</span>
                </div>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler border-0 shadow-none text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-2"></i>
            </button>

            <!-- Only 3 Pages: Home, Services, and Get a Quote -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-4 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= $currentAction === 'index' ? 'active' : '' ?>" href="<?= Url::to(['/site/index']) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= $currentAction === 'services' ? 'active' : '' ?>" href="<?= Url::to(['/site/services']) ?>">Services</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3">
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-2 rounded-pill shadow-sm">
                        Get a Quote <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
