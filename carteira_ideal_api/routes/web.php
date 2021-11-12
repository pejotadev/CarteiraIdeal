<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('', function () {
    return 'Carteira Ideal';
});

$router->group(['prefix' => 'wallet'], function () use ($router) {
    $router->get('/summary/', 'WalletController@summary');
    $router->get('/bill/{id}', 'WalletController@getBill');
    $router->get('/statement/{id}', 'WalletController@statement');
});

