<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// arg URL puis controller
Route::get('/', 'HomeController@page1');
Route::get('firstSite2', 'HomeController@page2');
Route::get('firstSite1', 'HomeController@page1');



