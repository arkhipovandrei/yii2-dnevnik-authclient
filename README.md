# yii2-dnevnik-authclient

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

