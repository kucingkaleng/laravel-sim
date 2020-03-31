<?php

Route::group([
  'namespace' => 'ARA\LaravelSim\Modules\Lobby\Controllers'
], function ($route) {
  
  $route->get('signin', 'LobbyController@signin');
  $route->get('list', 'LobbyController@list');
  $route->get('lobby', 'LobbyController@index');

});