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
        'http://fonts.googleapis.com/css?family=Roboto:400,700,500',
        'vendor/unicons-2.0.1/css/unicons.css',
        //'css/site.css',
        'css/style.css',
        'css/responsive.css',
        
        // Vendor Stylesheets
        'vendor/fontawesome-free/css/all.min.css',
        'vendor/OwlCarousel/assets/owl.carousel.css',
        'vendor/OwlCarousel/assets/owl.theme.default.min.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/semantic/semantic.min.css',
        
        // Third party plugin CSS
        'cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css',
    ];
    public $js = [
        'js/jquery-3.3.1.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/OwlCarousel/owl.carousel.js',
        'vendor/semantic/semantic.min.js',
        'js/custom.js',
        'js/scroll-scripts.js',
        
        'cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js',
        'cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
        
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
