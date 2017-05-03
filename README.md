# yii2-dnevnik-authclient

[![Latest Stable Version](https://poser.pugx.org/arkhipovandrei/yii2-dnevnik-authclient/version)](https://packagist.org/packages/arkhipovandrei/yii2-dnevnik-authclient)
[![Total Downloads](https://poser.pugx.org/arkhipovandrei/yii2-dnevnik-authclient/downloads)](https://packagist.org/packages/arkhipovandrei/yii2-dnevnik-authclient)
[![Latest Unstable Version](https://poser.pugx.org/arkhipovandrei/yii2-dnevnik-authclient/v/unstable)](//packagist.org/packages/arkhipovandrei/yii2-dnevnik-authclient)
[![License](https://poser.pugx.org/arkhipovandrei/yii2-dnevnik-authclient/license)](https://packagist.org/packages/arkhipovandrei/yii2-dnevnik-authclient)
[![composer.lock available](https://poser.pugx.org/arkhipovandrei/yii2-dnevnik-authclient/composerlock)](https://packagist.org/packages/arkhipovandrei/yii2-dnevnik-authclient)

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist arkhipovandrei/yii2-dnevnik-authclient
```

or add

```json
"arkhipovandrei/yii2-dnevnik-authclient": "*"
```

to the `require` section of your composer.json.

 ## Usage
```php
'components' => [
   // ...
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'dnevnik' => [
                'class' => 'arkhipovandrei\authclient\Dnevnik',
                'clientId' => 'API_KEY',
                'clientSecret' => 'SECRET_KEY',
                'scope' => 'avatar, fullname'
                //'staging' =>  bool  true or false. Default value false 
            ],
        ],
    ],
    // ...
 ]
 ```
