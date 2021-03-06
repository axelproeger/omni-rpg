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
// Auth::routes(['register' => false]);

Route::middleware(['auth', 'checkActiveCharacter', 'setLastAction'])->group(function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    // Character Routes
    Route::get('/characters', 'CharacterController@index');
    Route::get('/characters/create', 'CharacterController@create');
    Route::post('/characters', 'CharacterController@store');
    Route::get('/character/{character}', 'CharacterController@show')->name('character.show');
    Route::get('/characters/{character}/edit', 'CharacterController@edit');
    Route::get('/characters/{character}/set-active', 'ActiveCharacterController@set');

    // Character Avatar Routes
    Route::get('/characters/{character}/avatar', 'CharacterAvatarController@show');
    Route::patch('/characters/{character}/avatar', 'CharacterAvatarController@update');
    Route::post('/characters/{character}/avatar/delete', 'CharacterAvatarController@delete');

    // User Routes
    Route::get('/user/{user}', 'UserController@show')->name('user.show');

    // Unit Routes
    Route::get('/units', 'UnitController@index')->name('unit.index');
    Route::get('/unit/{unit}', 'UnitController@show')->name('unit.show');

});
