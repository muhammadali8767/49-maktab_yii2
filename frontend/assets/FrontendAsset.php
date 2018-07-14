<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/jquery.bxslider.css',
    ];
    public $js = [
		'js/menu.js',
		'js/jquery-3.1.1.min.js',
		'js/jquery.bxslider.js',
		'js/jquery.bxslider.min.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
