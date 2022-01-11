<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2022
 * @package yii2-context-menu
 * @version 1.2.1
 */

namespace kartik\dropdown;

use kartik\base\AssetBundle;

/**
 * DropdownX bundle for the [[DropdownX]] widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 */
class DropdownXAsset extends AssetBundle
{

    /**
     * @inheritDoc
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/dropdown-x']);
        $this->setupAssets('js', ['js/dropdown-x']);
        parent::init();
    }

}