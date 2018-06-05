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
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/bootstrap2/css/bootstrap.min.css',
        'vendor/metisMenu/metisMenu.min.css',
        'css/admin/sb-admin-2.css',
        'vendor/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        // 'vendor/jquery/jquery.min.js',
        'vendor/bootstrap2/js/bootstrap.min.js',
        'vendor/metisMenu/metisMenu.min.js',
        'js/admin/sb-admin-2.js',
        'js/admin/ckeditor/ckeditor.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
