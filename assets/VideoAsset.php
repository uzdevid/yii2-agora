<?php

use yii\web\AssetBundle;

class VideoAsset extends AssetBundle {
    public $sourcePath = '@npm/agora';
    public $js = [
        'dist/agora.min.js'
    ];
    public $css = [
        'dist/agora.min.css'
    ];
}