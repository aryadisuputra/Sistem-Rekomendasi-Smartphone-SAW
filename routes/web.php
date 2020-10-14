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

use App\Model\Tanaman;

Route::get('/tes',function(){
    return view('admin.dashboard');
}); 
Route::get('/tes2','sawController@get_matrix_preferensi');
Route::get('/masuk',function(){
    return view('admin.login');
}); 
Route::group(['middleware' => 'auth','as' => 'admin.'], function(){
    Route::get('/', function () {
        
        return view('admin.dashboard');
    });
    Route::get('/atanaman', function () {
        return view('admin.tanaman.index');
    });
    Route::get('/amatrix_nilai', function () {
        return view('admin.saw.matrix_nilai');
    });
    Route::get('/amatrix_normalisasi', function () {
        return view('admin.saw.matrix_normalisasi');
    });
    Route::get('/amatrix_preferensi', function () {
        return view('admin.saw.matrix_preferensi');
    });
    Route::get('/ahasil_rekomendasi', function () {
        return view('admin.saw.hasil_rekomendasi');
    });
    Route::get('/asetting', function () {
        $options = \App\Model\Setting::getAllKeyValue();
        return view('admin.setting',$options);
    });

    Route::group(['prefix' => 'admin'], function(){
        Route::group(["as" => "tanaman.", "prefix" => "tanaman"], function () {
            Route::get('/', 'tanamanController@index')->name('index');
            Route::get('/data', 'tanamanController@data')->name('data');
            Route::post('/add', 'tanamanController@store')->name('add');
            Route::post('/edit', 'tanamanController@edit')->name('edit');
            Route::post('/delete', 'tanamanController@delete')->name('delete');
        });

        Route::group(['as' => 'saw.','prefix' => 'saw'], function(){
            Route::get('/matrix_nilai', 'sawController@matrix_nilai')->name('matrix_nilai');
            Route::get('/matrix_normalisasi', 'sawController@matrix_normalisasi')->name('matrix_normalisasi');
            Route::get('/matrix_preferensi', 'sawController@matrix_preferensi')->name('matrix_preferensi');
        });
        Route::group(["as" => "setting.", "prefix" => "setting"], function () {
            Route::post('/bobot', 'settingController@bobot')->name('bobot');            
        });
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
