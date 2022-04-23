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

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/login', function () {
    return view('Pengguna/login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

//route login untuk admin
Route::group(['middleware'=>['auth','ceklevel:admin']], function(){
    Route::get('/beranda','BerandaController@index');
    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
    Route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
});
//route login untuk pegawai (level=user)
Route::group(['middleware'=>['auth','ceklevel:admin,user']], function(){
    Route::get('/beranda','BerandaController@index');
    Route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
});

