<?php

$router->get('/', function () use ($router) {
    return view('index');
});

$router->group(['prefix' => 'continents', 'namespace' => 'Continents'], function () use ($router) {
    $router->get('/', 'ContinentsController@getContinents');
    $router->get('/{continentCode}/countries', 'ContinentsController@getContinentCountries');
});

$router->group(['prefix' => 'countries', 'namespace' => 'Countries'], function () use ($router) {
    $router->get('/', 'CountriesController@getCountries');
});

$router->group(['prefix' => 'cities', 'namespace' => 'Cities'], function () use ($router) {
    $router->get('/', 'CitiesController@getCities');
});
