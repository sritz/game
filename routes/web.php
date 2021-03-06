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

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/nation/create', 'NationController@create');
    Route::post('/nation/create', 'NationController@createPOST');
});

Route::group(['middleware' => ['auth', 'NoNation']], function () { // Pages that require you to be logged in
    // Nation Related Pages
    Route::get('/nation/view/{id?}', 'NationController@View');
    Route::get('/nations', 'NationController@allNations');
    Route::post('/nations', 'NationController@postSearch');
    Route::get('/nations/{category}/{search}', 'NationController@search');
    Route::post('/nations/{category}/{search}', 'NationController@postSearch');
    Route::get('/nation/edit', 'NationController@edit');
    Route::patch('/nation/edit/renameNation', 'NationController@renameNation');
    Route::patch('/nation/edit/changeMotto', 'NationController@changeMotto');
    Route::patch('/nation/edit/changeFlag', 'NationController@changeFlag');

    // City related Pages
    Route::get('/cities', 'CityController@overview');
    Route::get('/cities/view/{id}', 'CityController@view');
    Route::post('/cities/create', 'CityController@create');
    Route::post('/cities/{id}/land', 'CityController@buyLand');
    Route::post('/cities/{cities}/buildings/buy/{buildingtypes}', 'CityController@buyBuilding');
    Route::post('/cities/{cities}/buildings/sell/{buildingtypes}', 'CityController@sellBuilding');
    Route::post('/cities/{id}/rename', 'CityController@renameCity');

    // Alliance related pages
    Route::get('/alliance/create', 'AllianceController@create');
    Route::post('/alliance/create', 'AllianceController@createPOST');
    Route::get('/alliance/{alliance}', 'AllianceController@view');
    Route::get('/alliances', 'AllianceController@viewAll');
    Route::post('/alliances', 'AllianceController@postSearch');
    Route::get('/alliances/{category}/{search}', 'AllianceController@search');
    Route::post('/alliances/{category}/{search}', 'AllianceController@postSearch');
    Route::patch('/alliance/{alliance}/leave', 'AllianceController@leaveAlliance');
    Route::patch('/alliance/{alliance}/join', 'AllianceController@joinAlliance');
    Route::get('/alliance/{alliance}/edit', 'AllianceController@edit');
    Route::post('/alliance/{alliance}/edit/renameAlliance', 'AllianceController@renameAlliance');
    Route::post('/alliance/{alliance}/edit/changeForumURL', 'AllianceController@changeForum');
    Route::post('/alliance/{alliance}/edit/changeIRCChannel', 'AllianceController@changeIRC');
    Route::post('/alliance/{alliance}/edit/changeDiscordServer', 'AllianceController@changeDiscord');
    Route::post('/alliance/{alliance}/edit/changeAllianceDescription', 'AllianceController@changeDescription');
    Route::post('/alliance/{alliance}/edit/changeAllianceFlag', 'AllianceController@changeFlag');
    Route::patch('alliance/{alliance}/edit/removeMember', 'AllianceController@removeMember');
    Route::delete('alliance/{alliance}/edit/disband', 'AllianceController@disband');

    // Account related pages
    Route::get('/account', 'AccountController@view');
    Route::patch('/account/edit/username', 'AccountController@editUsername');
    Route::patch('/account/edit/email', 'AccountController@editEmail');
    Route::patch('/account/edit/password', 'AccountController@editPassword');
    Route::delete('/account/delete', 'AccountController@deleteAccount');
    Route::get('/account/inbox', 'MessagesController@inbox');
    Route::get('/account/inbox/create', 'MessagesController@createView');
    Route::post('/account/inbox/create', 'MessagesController@create');
    Route::get('/account/messages/{id}', 'MessagesController@view');
    Route::put('/account/messages/update/{id}', 'MessagesController@update');
});
