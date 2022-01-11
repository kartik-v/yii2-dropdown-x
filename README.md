<h1 align="center">
    <a href="http://demos.krajee.com" title="Krajee Demos" target="_blank">
        <img src="http://kartik-v.github.io/bootstrap-fileinput-samples/samples/krajee-logo-b.png" alt="Krajee Logo"/>
    </a>
    <br>
    yii2-dropdown-x
    <hr>
    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DTP3NZQ6G2AYU"
       title="Donate via Paypal" target="_blank"><img height="60" src="https://kartik-v.github.io/bootstrap-fileinput-samples/samples/donate.png" alt="Donate"/></a>
    &nbsp; &nbsp; &nbsp;
    <a href="https://www.buymeacoffee.com/kartikv" title="Buy me a coffee" ><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" height="60" alt="kartikv" /></a>
</h1>

<div align="center">

[![Stable Version](https://poser.pugx.org/kartik-v/yii2-dropdown-x/v/stable)](https://packagist.org/packages/kartik-v/yii2-dropdown-x)
[![Unstable Version](https://poser.pugx.org/kartik-v/yii2-dropdown-x/v/unstable)](https://packagist.org/packages/kartik-v/yii2-dropdown-x)
[![License](https://poser.pugx.org/kartik-v/yii2-dropdown-x/license)](https://packagist.org/packages/kartik-v/yii2-dropdown-x)
[![Total Downloads](https://poser.pugx.org/kartik-v/yii2-dropdown-x/downloads)](https://packagist.org/packages/kartik-v/yii2-dropdown-x)
[![Monthly Downloads](https://poser.pugx.org/kartik-v/yii2-dropdown-x/d/monthly)](https://packagist.org/packages/kartik-v/yii2-dropdown-x)
[![Daily Downloads](https://poser.pugx.org/kartik-v/yii2-dropdown-x/d/daily)](https://packagist.org/packages/kartik-v/yii2-dropdown-x)

</div>

An extended bootstrap dropdown widget for Yii Framework 2 with submenu drilldown. This widget extends the `\yii\bootstrap\Dropdown` widget
with some additional controls and adds CSS and JS for enabling a submenu drilldown. The dropdown menu style is optimized for both desktop 
and mobile devices. The drilldown is triggered on `active` instead of `hover` so that it works equally well on mobile devices.

### Docs & Demo
You can see detailed [docs & demos](http://demos.krajee.com/dropdown-x) and the API [code documentation](https://docs.krajee.com/kartik-dropdown-dropdownx) on usage of the extension.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

> NOTE: Check the [composer.json](https://github.com/kartik-v/yii2-dropdown-x/blob/master/composer.json) for this extension's requirements and dependencies. Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

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