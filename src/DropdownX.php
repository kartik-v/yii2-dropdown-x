<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2022
 * @package yii2-dropdown-x
 * @version 1.2.1
 */

namespace kartik\dropdown;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use \yii\bootstrap\Dropdown;

/**
 * DropdownX renders a Bootstrap 3.x dropdown menu component. This widget extends the default bootstrap [[Dropdown]]
 * widget to include nested submenu behavior and styling.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 */
class DropdownX extends Dropdown
{
    /**
     * @inheritDoc
     */
    public $subMenuOptions = [];
    
    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        DropdownXAsset::register($this->view);
    }

    /**
     * @inheritDoc
     */
    protected function renderItems($items, $options = [])
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
            $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
            $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
            $itemOptions = ArrayHelper::getValue($item, 'options', []);
            $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);
            $linkOptions['tabindex'] = '-1';
            $url = array_key_exists('url', $item) ? $item['url'] : null;
            
            if (empty($item['items'])) {
                if ($url === null) {
                    $content = $label;
                    Html::addCssClass($itemOptions, 'dropdown-header');
                } else {
                    $content = Html::a($label, $url, $linkOptions);
                }
            } else {
                Html::addCssClass($linkOptions, 'dropdown-toggle');
                $linkOptions['data-toggle'] = 'dropdown';
                $submenuOptions = $options;
                unset($submenuOptions['id']);
                $content = Html::a($label, $url === null ? '#' : $url, $linkOptions)
                    . $this->renderItems($item['items'], $submenuOptions);
                Html::addCssClass($itemOptions, 'dropdown dropdown-submenu');
            }

            $lines[] = Html::tag('li', $content, $itemOptions);
        }

        return Html::tag('ul', implode("\n", $lines), $options);
    }
}
