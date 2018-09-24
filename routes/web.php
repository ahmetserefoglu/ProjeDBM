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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/tasks', 'HomeController@task')->name('home');

Route::get('/testet', 'HomeController@test')->name('home');

Route::get('/vuetask', 'HomeController@vuetask')->name('home');

Route::get('/shopping', 'HomeController@shop')->name('home');

Route::group(['prefix' => 'admin',['middleware'=>'auth:api']], function() {
    Route::get('/okullar', 'HomeController@okul')->name('home');
    Route::get('/ayarlar', 'HomeController@ayarlar')->name('home');
    Route::get('/dersler', 'HomeController@dersler')->name('home');
    Route::get('/duyurular', 'HomeController@duyurular')->name('home');
    Route::get('/iletisim', 'HomeController@iletisim')->name('home');
    Route::get('/odevler', 'HomeController@odevler')->name('home');
    Route::get('/ogrenciler', 'HomeController@ogrenciler')->name('home');
    Route::get('/ogrenciler/edit/{id}', 'HomeController@ogrencilerdetay')->name('home');
    Route::get('/ogretmenler', 'HomeController@ogretmenler')->name('home');
    Route::get('/veliler', 'HomeController@veliler')->name('home');
    Route::get('/ogretmenler/edit/{id}', 'HomeController@ogretmenlerdetay')->name('home');
    Route::get('/okullar/edit/{id}', 'HomeController@okullardetay')->name('home');
    Route::get('/profile', 'HomeController@profile')->name('home');
    Route::get('/siniflar', 'HomeController@siniflar')->name('home');
    Route::get('/mesajlar', 'HomeController@mesajlar')->name('home');
    Route::get('/sendmesaj', 'HomeController@sendMessage')->name('home');
    
    Route::get('/bildirimler', 'HomeController@bildirim')->name('home');
});



Route::resource('/test', 'TestController');

Route::resource('/task', 'TaskController');