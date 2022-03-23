<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Htt\Controller\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['app.cors', 'json.response']], function () {

    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/register', 'Auth\ApiAuthController@register')->name('register.api');
    Route::post('/register-as-enterprise', 'Auth\ApiAuthController@registerEnterprise')->name('registerEnterprise.api');
    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('login.api');

    Route::middleware('auth:api')->group(function () {


        Route::apiResource('country', 'CountryController');
      	Route::apiResource('site', 'SiteController');
      	Route::apiResource('region', 'RegionController');
      	Route::apiResource('pomp', 'PompController');
      	Route::apiResource('plan', 'PlanController');
      	Route::apiResource('typeculture', 'TypeCultureController');
      	Route::apiResource('typepartner', 'TypePartnerController');
      	Route::apiResource('project', 'ProjectController');
      	Route::apiResource('enterprise', 'EnterpriseController');
      	Route::apiResource('user', 'UserController');
      	Route::apiResource('role', 'RoleController');
      	Route::apiResource('partner', 'PartnerController');
      	Route::apiResource('picture', 'PictureController');


        Route::get('project/{slug}/get-enterprises-project', 'ProjectController@connectedUserProjects')->name('ki.api');;
        Route::get('dashboard-mobile', 'DashBoardController@index');
        Route::post('user/profile-picture-update', 'UserController@profile');



        Route::post('logout', 'Auth\\ApiAuthController@logout');


    });
});
