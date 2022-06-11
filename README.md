Videoconferencing with Agora
============================
Videoconferencing with Agora

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist uzdevid/yii2-agora "*"
```

or add

```
"uzdevid/yii2-agora": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \uzdevid\agora\Agora::widget(); ?>```