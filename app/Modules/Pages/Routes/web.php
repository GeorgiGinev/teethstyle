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

Route::prefix('pages')->group(function() {
    Route::get('/privacy', 'PagesController@privacy')->name('pages.privacy');
    Route::get('/terms', 'PagesController@terms')->name('pages.terms');
    Route::get('/sitemap','PagesController@sitemap')->name('pages.sitemap');
});

