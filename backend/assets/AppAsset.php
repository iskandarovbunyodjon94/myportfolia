<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        'static/plugins/fontawesome-free/css/all.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'static/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'static/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'static/plugins/jqvmap/jqvmap.min.css',
        'static/css/adminlte.min.css',
        'static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'static/plugins/daterangepicker/daterangepicker.css',
        'static/plugins/summernote/summernote-bs4.min.css',
        'https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css',
    ];
    public $js = [
        'static/plugins/jquery/jquery.min.js',
        'static/plugins/jquery-ui/jquery-ui.min.js',
        'static/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'static/plugins/chart.js/Chart.min.js',
        'static/plugins/sparklines/sparkline.js',
        'static/plugins/jqvmap/jquery.vmap.min.js',
        'static/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'static/plugins/jquery-knob/jquery.knob.min.js',
        'static/plugins/moment/moment.min.js',
        'static/plugins/daterangepicker/daterangepicker.js',
        'static/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'static/plugins/summernote/summernote-bs4.min.js',
        'static/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'static/js/adminlte.js',
//        'static/js/demo.js',
        'static/js/pages/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
