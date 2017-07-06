<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

foreach (File::allFiles(__DIR__.'/loggedIn') as $partial) {
    require $partial->getPathname();
}

foreach (File::allFiles(__DIR__.'/loggedOut') as $partial) {
    require $partial->getPathname();
}
