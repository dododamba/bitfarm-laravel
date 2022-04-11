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

    Route::post('/login', 'Auth\ApiAuthController@login');
    Route::post('/register', 'Auth\ApiAuthController@register');
    Route::post('/register-as-enterprise', 'Auth\ApiAuthController@registerEnterprise');
    Route::post('/logout', 'Auth\ApiAuthController@logout');

    Route::middleware('auth:api')->group(function () {


        Route::apiResource('country', 'CountryController');
      	Route::apiResource('site', 'SiteController');/*-To see--*/
      	Route::apiResource('region', 'RegionController');
      	Route::apiResource('pomp', 'PompController');/*-To see--*/
      	Route::apiResource('plan', 'PlanController');
      	Route::apiResource('type-culture', 'TypeCultureController');
      	Route::apiResource('type-partner', 'TypePartnerController');
      	Route::apiResource('project', 'ProjectController');
      	Route::apiResource('enterprise', 'EnterpriseController');
      	Route::apiResource('user', 'UserController');
      	Route::apiResource('role', 'RoleController');
      	Route::apiResource('partner', 'PartnerController');
      	Route::apiResource('picture', 'PictureController');
        Route::apiResource('post', 'PostController');
        Route::apiResource('comment', 'CommentController');
        Route::apiResource('like', 'LikeController');
        Route::apiResource('share', 'ShareController');
        Route::apiResource('view', 'ViewController');
        Route::post('transaction', 'TransactionController@store');
        Route::get('transaction/{slug}', 'TransactionController@index');




        Route::get('project/{slug}/get-enterprises-project', 'ProjectController@connectedUserProjects');
        Route::get('dashboard-mobile', 'DashBoardController@index');
        Route::post('user/profile-picture-update', 'UserController@profile');

        Route::get('brainTreeClientToken', 'PaypalController@clientToken');

        Route::post('checkoutWithPayment', 'PaypalController@processPayment');

        Route::post('country/add-region', 'CountryController@addRegion');
        Route::post('site/add-type-culture', 'SiteController@addTypeToSite');
        Route::post('site/add-pomp', 'SiteController@addPompeToSite');
        Route::post('project/add-site', 'ProjectController@addSiteToProject');
        Route::post('user/certification-update', 'UserController@profileAccountSetting');

    });
});
