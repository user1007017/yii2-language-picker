<?php

namespace user1007017\languagepicker\bundles;

use yii\web\AssetBundle;

/**
 * LanguagePlugin asset bundle
 * @author Lajos Molnár <user1007017.m@gmail.com>
 * @since 1.0
 */
class LanguagePluginAsset extends AssetBundle {

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/user1007017/yii2-language-picker/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'javascripts/language-picker.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
