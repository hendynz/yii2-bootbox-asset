<?php
/**
 * Asset for bootbox plugin
 * @author Brusenskiy Dmitry <brussens@nativeweb.ru>
 * @author Christopher Henderson <chris@inspiral.co.nz>
 * @since 0.1.0
 * @version 0.1.3
 * @link https://github.com/hendynz/yii2-bootbox-asset
 * @link https://github.com/yiiassets/yii2-bootbox-asset
 * @link http://bootboxjs.com/
 * @copyright 2015 Brusenskiy Dmitry
 * @license http://opensource.org/licenses/MIT MIT
 * @package hendynz\bootbox
 */

namespace hendynz\bootbox;


use Yii;
use yii\web\AssetBundle;

class BootBoxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/bootbox.js';

    public $js = [
        'bootbox.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
