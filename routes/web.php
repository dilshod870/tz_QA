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

Route::get('/', 'HomeController@index');

Route::get('event_a','EventController@index_a')->name('event_a.index');
Route::post('event_a','EventController@event_a')->name('event_a.store');

Route::get('event_b','EventController@index_b')->name('event_b.index');
Route::post('event_b','EventController@event_b')->name('event_b.store');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', function () {
        //dd(App\User::role('admin_event_b')->get());
        return view('admin.dashboard');
    });

    Route::resource('posts','PostController',['as' => 'admin']);
    Route::resource('event_a','EventAController',['as' => 'admin']);
    Route::resource('event_b','EventBController',['as' => 'admin']);
    Route::resource('users','UserController',['as' => 'admin']);

});

Auth::routes();