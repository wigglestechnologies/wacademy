<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class RegisterAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        
        'vendor/bootstrap/css/bootstrap.min.css',
        'css/apply.css',
        
        'fonts/material-icon/css/material-design-iconic-font.min.css',
       
    ];
    public $js = [
       
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
