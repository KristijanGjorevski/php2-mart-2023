<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\SiteController;
use thecodeholic\phpmvc\Application;

$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => "mysql:host=127.0.0.1;port=3306;db=semos",
        'user' => "root",
        'password' => "",
    ]
];

$app = new Application(dirname(__DIR__),$config);

$app->router->get('/hello',function(){
    return 'Hello World';
 });
 
$app->router->get('/contact',[SiteController::class,'contact']);


$app->run();