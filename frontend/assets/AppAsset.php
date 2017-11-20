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
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public static function addCss($view, $cssfile)
    {
        $view->registerCssFile(
            $cssfile,
            [
                AppAsset::className(),
                "depends" => "backend\assets\AppAsset"
            ]
        );
    }
}
