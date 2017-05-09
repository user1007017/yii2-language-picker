<?php

namespace user1007017\languagepicker\bundles;

use yii\web\AssetBundle;

/**
 * LanguageLargeIcons asset bundle
 * @author Lajos Molnár <user1007017.m@gmail.com>
 * @since 1.0
 */
class LanguageLargeIconsAsset extends AssetBundle {

    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/user1007017/yii2-language-picker/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'stylesheets/language-picker.min.css',
        'stylesheets/flags-large.min.css',
    ];

}
