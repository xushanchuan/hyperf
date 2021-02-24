<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/json','App\Controller\IndexController@json');
Router::get('/raw','App\Controller\IndexController@raw');
Router::get('/xml','App\Controller\IndexController@xml');
Router::get('/cookie','App\Controller\IndexController@cookie');

Router::get('/user/{userId}','App\Controller\UserController@getUserById');
Router::get('/user/test/test','App\Controller\UserController@test');

Router::get('/favicon.ico', function () {
    return '';
});
