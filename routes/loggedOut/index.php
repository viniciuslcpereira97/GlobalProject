<?php

/**
|--------------------------------------------------------------------------
| Logged Out Routes
|--------------------------------------------------------------------------
|
| All routes to logged out users
|
**/
Auth::routes();

Route::get('/', 'IndexController@index');
