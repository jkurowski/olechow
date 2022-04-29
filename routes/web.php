<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware(['restrictIp'])->group(function () {
    Auth::routes();

    Route::get('routes', function() {
        \Artisan::call('route:list');
        return '<pre>' . \Artisan::output() . '</pre>';
    });

    Route::get('/',
        'Front\IndexController@index')->name('index');

    Route::post('/property-contact/{property}',
        'Front\ContactController@property')->name('contact.property');

    Route::get('mapa',
        'Front\MapController@index')->name('map.index');

    Route::get('galeria',
        'Front\GalleryController@index')->name('gallery.index');

    Route::get('kontakt',
        'Front\ContactController@index')->name('contact.index');
    Route::post('kontakt',
        'Front\ContactController@send')->name('contact.send');

    // Developro
    Route::group(['namespace' => 'Front', 'prefix'=>'/mieszkania', 'as' => 'front.investment.'], function() {

    // Glowny plan inwestycji

        Route::get('/',
            'InvestmentController@show')->name('show');

    // Inwestycja budynkowa

        Route::get('/pietro/{floor}',
            'InvestmentFloorController@index')->name('floor.index');

        Route::get('/pietro/{floor}/m/{property}',
            'InvestmentPropertyController@index')->name('property.index');

    });

    // Location
    Route::group(['namespace' => 'Front', 'prefix'=>'/lokalizacja/', 'as' => 'front.location.'], function() {
        Route::get('/',         'LocationController@index')->name('index');
    });

    // Gallery
    Route::group(['namespace' => 'Front', 'prefix'=>'/galeria/', 'as' => 'front.gallery.'], function() {
        Route::get('/',         'GalleryController@index')->name('index');
        Route::get('/{slug}',   'GalleryController@show')->name('show');
    });

    // Inline
    Route::group(['namespace' => 'Front', 'prefix'=>'/inline/', 'as' => 'front.inline.'], function() {
        Route::get('/', 'InlineController@index')->name('index');
        Route::get('/loadinline/{inline}', 'InlineController@show')->name('show');
        Route::post('/update/{inline}', 'InlineController@update')->name('update');
    });
});
