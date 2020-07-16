<?php


namespace app\assets;


use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'adminlte/plugins/fontawesome-free/css/all.min.css',
        'adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'adminlte/dist/css/adminlte.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
    ];
    public $js = [
        'adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminlte/dist/js/adminlte.min.js',
        'js/admin.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}