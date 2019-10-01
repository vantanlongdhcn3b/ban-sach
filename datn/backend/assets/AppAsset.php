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
        'css/compiled/theme-styles.css',
        'css/libs/nanoscroller.css',
        'css/libs/font-awesome.css',
        'css/libs/jquery-jvectormap-1.2.2.css',
        'css/libs/weather-icons.css',
        'css/libs/morris.css',
        'css/libs/fonts-googleapis.css',
        'css/libs/select2.css',
        //'datepicker/css/datepicker.min.css',
    ];
    public $js = [
        
        'js/demo-rtl.js',
        'js/demo-skin-changer.js',
        'js/jquery.nanoscroller.min.js',
        'js/demo.js',
        'js/bootstrap.js',
        'js/jquery.scrollTo.min.js',
        'js/jquery.slimscroll.min.js',
        'js/moment.min.js',
        'js/jquery-jvectormap-1.2.2.min.js',
        'js/jquery-jvectormap-world-merc-en.js',
        'js/gdp-data.js',
        'js/flot/jquery.flot.min.js',
        'js/flot/jquery.flot.resize.min.js',
        'js/flot/jquery.flot.time.min.js',
        'js/flot/jquery.flot.threshold.js',
        'js/flot/jquery.flot.axislabels.js',
        'js/jquery.sparkline.min.js',
        'js/skycons.js',
        'js/raphael-min.js',
        'js/morris.js',
        'js/pace.min.js',
        'tinymce/tinymce.min.js',
        'js/main.js',
        'js/scripts.js',
        'Chart.min.js',

        // 'datepicker/js/datepicker.js',
        // 'datepicker/js/i18n/datepicker.vn.js',

        ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
