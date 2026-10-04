<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use app\assets\AppAsset;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(
    ['charset' => Yii::$app->charset],
    'charset',
);
$this->registerMetaTag(
    [
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1',
    ],
);
if (!empty($this->params['meta_description'])) {
    $this->registerMetaTag(
        [
            'name' => 'description',
            'content' => $this->params['meta_description'],
        ],
    );
}
if (!empty($this->params['meta_keywords'])) {
    $this->registerMetaTag(
        [
            'name' => 'keywords',
            'content' => $this->params['meta_keywords'],
        ],
    );
}
$this->registerLinkTag(
    [
        'rel' => 'preconnect',
        'href' => 'https://fonts.googleapis.com',
    ],
);
$this->registerLinkTag(
    [
        'rel' => 'preconnect',
        'href' => 'https://fonts.gstatic.com',
        'crossorigin' => 'anonymous',
    ],
);
$this->registerLinkTag(
    [
        'rel' => 'stylesheet',
        'href' => 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=Caveat:wght@600;700&display=swap',
    ],
);
$this->registerLinkTag(
    [
        'rel' => 'stylesheet',
        'href' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
    ],
);
$this->registerLinkTag(
    [
        'rel' => 'stylesheet',
        'href' => 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
    ],
);
$this->registerLinkTag(
    [
        'rel' => 'icon',
        'type' => 'image/x-icon',
        'href' => Yii::getAlias('@web/favicon.ico'),
    ],
);
