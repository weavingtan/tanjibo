<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
//__DIR__   /Users/tanjibo/www/basic/web
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
//引入自定义函数
require(__DIR__ . '/../common/function.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
