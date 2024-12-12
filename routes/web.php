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

Route::namespace('Front')->group(function () {
    Route::get('/', 'HomeController@index')->name('front.home');
});

Route::prefix('admin')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', 'LoginController@index')->name('admin.login.index');
        Route::post('login', 'LoginController@authenticate')->name('admin.login');
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
    });

    Route::namespace('Back')->middleware(['auth:web'])->prefix('cms')->group(function() {
        Route::get('/', 'HomeController@index')->name('back.cms.home');
        Route::resource('header', 'HeaderController', ['as' => 'back.cms'])->only(['index', 'store']);
        Route::resource('produk-list', 'ProdukListController', ['as' => 'back.cms'])->except(['show']);
        Route::post('produk-list/judul/store', 'ProdukListController@storeJudul')->name('back.cms.produk-list.judul.store');
        Route::resource('tentang-kami', 'TentangKamiController', ['as' => 'back.cms'])->only(['index', 'store']);
        Route::resource('keunggulan-perusahaan', 'KeunggulanPerusahaanController', ['as' => 'back.cms'])->only(['index', 'store']);
        Route::resource('gambar-proses', 'GambarProsesController', ['as' => 'back.cms'])->except(['show']);
        Route::resource('promosi', 'PromosiController', ['as' => 'back.cms'])->only(['index', 'store']);
        Route::resource('testimoni', 'TestimoniController', ['as' => 'back.cms'])->except(['show']);
        Route::post('testimoni/judul/store', 'TestimoniController@storeJudul')->name('back.cms.testimoni.judul.store');
        Route::resource('team-kami', 'TeamKamiController', ['as' => 'back.cms'])->except(['show']);
        Route::post('team-kami/judul/store', 'TeamKamiController@storeJudul')->name('back.cms.team-kami.judul.store');
        Route::resource('client-kami', 'ClientKamiController', ['as' => 'back.cms'])->except(['show']);
        Route::post('client-kami/judul/store', 'ClientKamiController@storeJudul')->name('back.cms.client-kami.judul.store');
        Route::resource('footer', 'FooterController', ['as' => 'back.cms'])->only(['index', 'store']);
        Route::resource('whatsapp', 'WhatsappController', ['as' => 'back.cms'])->only(['index', 'store']);
    });
});

Route::prefix('api/v1')->group(function() {
    Route::namespace('Back')->prefix('admin')->middleware(['auth:web'])->group(function() {
        Route::post('produk-list', 'ProdukListController@data')->name('api.back.cms.produk-list');
        Route::post('gambar-proses', 'GambarProsesController@data')->name('api.back.cms.gambar-proses');
        Route::post('testimoni', 'TestimoniController@data')->name('api.back.cms.testimoni');
        Route::post('team-kami', 'TeamKamiController@data')->name('api.back.cms.team-kami');
        Route::post('client-kami', 'ClientKamiController@data')->name('api.back.cms.client-kami');
    });
});
