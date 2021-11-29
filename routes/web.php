<?php

$router->get('/', function () use ($router) {

});

$router->group(['prefix' => 'continents', 'namespace' => 'Continents'], function () use ($router) {
    $router->get('/', 'ContinentsController@getContinents');
    $router->get('/{continentCode}/countries', 'ContinentsController@getContinentCountries');
});

$router->group(['prefix' => 'countries', 'namespace' => 'Countries'], function () use ($router) {
    $router->get('/', 'CountriesController@getCountries');
});
