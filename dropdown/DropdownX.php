<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-dropdown-x
 * @version 1.0.0
 */

namespace kartik\dropdown;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/**
 * An extended dropdown menu for Bootstrap 3 - that offers
 * submenu drilldown
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class DropdownX extends \yii\bootstrap\Dropdown
{
    public $subMenuOptions = [];
    
    /**
     * Initializes the widget
     */
    public function init()
    {
        parent::init();
        DropdownXAsset::register($this->view);
    }
    
    /**
     * Renders menu items.
     * @param array $items the menu items to be rendered
     * @return string the rendering result.
     * @throws InvalidConfigException if the label option is not specified in one of the items.
     */
    protected function renderItems($items)
    {
        $lines = [];
        foreach ($items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                unset($items[$i]);
                continue;
            }
            if (is_string($item)) {
                $lines[] = $item;
                continue;
            }
            if (!isset($item['label'])) {
                throw new InvalidConfigException("The 'label' option is required.");
            }
            $label = $this->encodeLabels ? Html::encode($item['label']) : $item['label'];
            $options = ArrayHelper::getValue($item, 'options', []);
            $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);
            $linkOptions['tabindex'] = '-1';
            
            if (!empty($item['items'])) {
                Html::addCssClass($linkOptions, 'dropdown-toggle');
                $linkOptions['data-toggle'] = 'dropdown';
                unset($this->_containerOptions['id']);
                $content = Html::a($label, ArrayHelper::getValue($item, 'url', '#'), $linkOptions) .
                           $this->renderItems($item['items']);
                $options = ArrayHelper::merge($this->subMenuOptions, $options);
                Html::addCssClass($options, 'dropdown dropdown-submenu');
            }
            else {
                $content = Html::a($label, ArrayHelper::getValue($item, 'url', '#'), $linkOptions);
            }
            $lines[] = Html::tag('li', $content, $options);
        }

        return Html::tag('ul', implode("\n", $lines), $this->_containerOptions);
    }
}
