<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-dropdown-x
 * @version 1.0.0
 */

namespace kartik\dropdown;

/**
 * An extended dropdown menu for Bootstrap 3 - that offers
 * submenu drilldown
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class DropdownX extends \yii\bootstrap\Dropdown
{
    const PLUGIN_NAME = 'contextmenu';

    /**
     * Initializes the widget
     */
    public function init()
    {
        DropdownXAsset::register($this->view);
        parent::init();
    }
}