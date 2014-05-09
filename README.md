yii2-dropdown-x
=================

An extended bootstrap dropdown widget for Yii Framework 2 with submenu drilldown. This widget extends the `\yii\bootstrap\Dropdown` widget.

### Demo
You can see detailed [documentation](http://demos.krajee.com/dropdown-x) on usage of the extension.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

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

### ContextMenu

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