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
        'css/bootstrap.min.css',
        'css/owl.carousel.css',
        'css/new-slider.css',
        'css/prettyPhoto.css',
        'css/jquery.bxslider.css',
        'css/font-awesome.min.css',
        'css/svg.css',
        'css/widget.css',
        'css/typography.css',
        'css/shortcodes.css',
        'mainStyle.css',
        'css/range-slider.css',
        'css/MainColor.css',
        'css/selectric.css',
        'css/jquery.sidr.dark.css',
        'js/dl-menu/component.css',
        'css/responsive.css',
        'css/jquery.typeahead.css',
        'css/star-rating.css',

    ];
    public $js = [
        'js/custom.js',
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/range-slider.js',
        'js/jquery.bxslider.min.js',
        'js/owl.carousel.min.js',
        'js/new-slider.min.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.downCount.js',
        'js/waypoints-min.js',
        'js/jquery.selectric.min.js',
        'js/jquery.accordion.js',
        'js/dl-menu/modernizr_custom.js',
        'js/dl-menu/jquery_dlmenu.js',
        'js/maps-googleapis.js',

        'js/jquery.sidr.min.js',
        'js/masonry.min.js',
        
        'js/main.js',
        'js/star-rating.js',
        'js/turn.min.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
