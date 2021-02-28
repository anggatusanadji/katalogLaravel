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
     
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/masuk', function () {
//     if(!session()->has('data')){
//         return redirect('login');
//     }
//     return view('dashboard');
// });

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::resource('kategori','KategoriController');    
Route::resource('penerbit','PenerbitController'); 
Route::resource('buku','BukuController'); 

Route::get('/admin', 'AdminController@index');
