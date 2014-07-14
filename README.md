yii2-dropdown-x
=================

An extended bootstrap dropdown widget for Yii Framework 2 with submenu drilldown. This widget extends the `\yii\bootstrap\Dropdown` widget
with some additional controls and adds CSS and JS for enabling a submenu drilldown. The dropdown menu style is optimized for both desktop 
and mobile devices. The drilldown is triggered on `active` instead of `hover` so that it works equally well on mobile devices.

> NOTE: This extension depends on the [kartik-v/yii2-widgets](https://github.com/kartik-v/yii2-widgets) extension which in turn depends on the 
[yiisoft/yii2-bootstrap](https://github.com/yiisoft/yii2/tree/master/extensions/bootstrap) extension. Check the 
[composer.json](https://github.com/kartik-v/yii2-dropdown-x/blob/master/composer.json) for this extension's requirements and dependencies. 
Note: Yii 2 framework is still in active development, and until a fully stable Yii2 release, your core yii2-bootstrap packages (and its dependencies) 
may be updated when you install or update this extension. You may need to lock your composer package versions for your specific app, and test 
for extension break if you do not wish to auto update dependencies.

### Demo
You can see detailed [documentation](http://demos.krajee.com/dropdown-x) on usage of the extension.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

> Note: You must set the `minimum-stability` to `dev` in the **composer.json** file in your application root folder before installation of this extension.

Either run

```
$ php composer.phar require kartik-v/yii2-dropdown-x "dev-master"
```

or add

```
"kartik-v/yii2-dropdown-x": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

### DropdownX

```php
use kartik\dropdown\DropdownX;
echo DropdownX::widget([
    'items' => [
        ['label' => 'Action', 'url' => '#'],
        ['label' => 'Submenu', 'items' => [
            ['label' => 'Action', 'url' => '#'],
            ['label' => 'Another action', 'url' => '#'],
            ['label' => 'Something else here', 'url' => '#'],
        ]],
        ['label' => 'Something else here', 'url' => '#'],
        '<li class="divider"></li>',
        ['label' => 'Separated link', 'url' => '#'],
    ],
]); 
```

## License

**yii2-dropdown-x** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.