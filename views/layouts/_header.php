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
                <img src="<?= Url::to('@web/images/logo.png') ?>" alt="SARGNEXUS Logo" class="brand-logo-img">
            </a>

            <!-- Mobile Toggle / Menu Button -->
            <button class="navbar-toggler custom-mobile-menu-btn border-0 shadow-none d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-4"></i>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto align-items-lg-center gap-lg-4 mb-3 mb-lg-0 py-3 py-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= $currentAction === 'index' ? 'active' : '' ?>" href="<?= Url::to(['/site/index']) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= $currentAction === 'services' ? 'active' : '' ?>" href="<?= Url::to(['/site/services']) ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom <?= $currentAction === 'projects' ? 'active' : '' ?>" href="<?= Url::to(['/site/projects']) ?>">Projects</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3 pt-2 pt-lg-0 pb-3 pb-lg-0 border-top border-secondary border-opacity-25 border-top-lg-0">
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-2 rounded-pill shadow-sm w-100 w-lg-auto text-center">
                        Get a Quote <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
