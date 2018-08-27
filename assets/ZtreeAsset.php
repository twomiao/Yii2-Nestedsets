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
class ZtreeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'zTree/css/demo.css',
        'zTree/css/zTreeStyle/zTreeStyle.css',
        'zTree/css/demo.css',
    ];

    public $js = [
        'zTree/js/jquery.ztree.core.js',
    ];
    public $depends = [
    ];
}
