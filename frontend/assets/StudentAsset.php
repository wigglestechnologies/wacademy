<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class StudentAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Roboto:400,700,500',
        'vendor/unicons-2.0.1/css/unicons.css',
        'css/vertical-responsive-menu1.min.css',
        'css/student_dashboard.css',
        'css/student_responsive.css',
        'css/night-mode.css',
        
        // Vendor Stylesheets
        'vendor/fontawesome-free/css/all.min.css',
        'vendor/OwlCarousel/assets/owl.carousel.css',
        'vendor/OwlCarousel/assets/owl.theme.default.min.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/semantic/semantic.min.css',
        
        // Third party plugin CSS
    ];
    public $js = [

        'js/vertical-responsive-menu.min.js',
        'js/jquery-3.3.1.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/OwlCarousel/owl.carousel.js',
        'vendor/semantic/semantic.min.js',
        'js/custom1.js',
        
        'js/night-mode.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
