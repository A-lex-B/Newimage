<?php

namespace app\assets;

use yii\web\AssetBundle;

class GalleryAsset extends AssetBundle
{
    public $basePath = '@webroot/galleryassets';
    public $baseUrl = '@web/galleryassets';
    public $css = [
        'css/lightbox.css'
    ];
    public $js = [
        'js/prototype.js',
        'js/scriptaculous.js?load=effects,builder',
        'js/lightbox.js',
    ];
    public $depends = [
        'app\assets\NewImageAsset'
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
?>