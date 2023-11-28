<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/assets/vendor/aos/aos.css',
        'static/assets/vendor/bootstrap/css/bootstrap.min.css',
        'static/assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'static/assets/vendor/boxicons/css/boxicons.min.css',
        'static/assets/vendor/glightbox/css/glightbox.min.css',
        'static/assets/vendor/swiper/swiper-bundle.min.css',
        'static/assets/css/style.css',
    ];
    public $js = [
        'static/assets/vendor/purecounter/purecounter_vanilla.js',
        'static/assets/vendor/aos/aos.js',
        'static/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'static/assets/vendor/glightbox/js/glightbox.min.js',
        'static/assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'static/assets/vendor/swiper/swiper-bundle.min.js',
        'static/assets/vendor/typed.js/typed.umd.js',
        'static/assets/vendor/waypoints/noframework.waypoints.js',
        'static/assets/vendor/php-email-form/validate.js',
        'static/assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
