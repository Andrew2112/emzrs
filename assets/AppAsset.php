<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500',
        'fonts/icomoon/style.css',
        'css/bootstrap.min.css',
        'css/magnific-popup.css',
        'css/jquery-ui.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/bootstrap-datepicker.css',
        'fonts/flaticon/font/flaticon.css',
        'css/aos.css',
        'css/style.css',
    ];
    public $js = [
        //'js/jquery-3.3.1.min.js',
        'js/jquery-migrate-3.0.1.min.js',
        'js/jquery-ui.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.countdown.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/bootstrap-datepicker.min.js',
        'js/aos.js',
        'js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
