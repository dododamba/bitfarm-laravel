<?php

use Illuminate\Http\Request;

Route::get('lang/{locale}', 'LocalizationController@index');
Route::get('/','HomeController@onMain')->name('main');
