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
        'css/materialize.min.css',
        'css/demo.css',
        'css/component.css',
        'css/owl.carousel.min.css',
        'css/magnific-popup.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery-2.2.4.min.js',
        'js/plugin.js',
        'js/jquery.malihu.PageScroll2id.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/materialize.min.js',
        'js/classie.js',
        'js/main.js',
        'js/owl.carousel.min.js',
        'js/script.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}

