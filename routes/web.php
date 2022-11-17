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

Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::prefix('jenis-obat')->group(function(){
        Route::get('/', 'JenisObatController@index')->name('jenisobat.index');
        Route::get('create', 'JenisObatController@create')->name('jenisobat.create');
        Route::post('/', 'JenisObatController@store')->name('jenisobat.store');
        Route::get('show/{id}', 'JenisObatController@show')->name('jenisobat.show');
        Route::get('edit/{id}', 'JenisObatController@edit')->name('jenisobat.edit');
        Route::post('update/{id}', 'JenisObatController@update')->name('jenisobat.update');
        Route::delete('delete/{id}', 'JenisObatController@destroy')->name('jenisobat.destroy');     
    });
});

