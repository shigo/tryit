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
        'assets/css/font-awesome.css',
        'assets/css/bootstrap.css',
        'assets/css/slick.css',
        'assets/css/theme-color/default-theme.css',
        'assets/css/style.css',
        ''
    ];
    public $js = [
        'assets/js/jquery.min.js',
        'assets/js/bootstrap.js',
        'assets/js/slick.js',
        'assets/js/waypoints.js',
        'assets/js/jquery.counterup.js',
        'assets/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}
