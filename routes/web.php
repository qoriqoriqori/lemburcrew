<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LemburController;
use App\Http\Controllers\Frontend\FrontendController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// user section
Route::middleware(['auth'])->group(function () {

   Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index');
   Route::get('frontend-add', 'App\Http\Controllers\Frontend\FrontendController@add')-> name('add-lembur');
   Route::post('frontend-insert', 'App\Http\Controllers\Frontend\FrontendController@insert')-> name('insert-lembur'); 
   Route::get('frontend-edit/{id}', 'App\Http\Controllers\Frontend\FrontendController@edit');
   Route::put('frontend-update/{id}', 'App\Http\Controllers\Frontend\FrontendController@update');
   Route::get('frontend-delete/{id}', 'App\Http\Controllers\Frontend\FrontendController@delete');

});

// admin section 
Route::middleware(['auth', 'isAdmin'])->group(function () {
   
   Route::get('/dashboard', 'App\Http\Controllers\Admin\AdminController@index');
   Route::get('lembur', 'App\Http\Controllers\Admin\LemburController@index');
   Route::get('lembur-view/{id}', 'App\Http\Controllers\Admin\LemburController@view');
   Route::put('lembur-update/{id}', 'App\Http\Controllers\Admin\LemburController@updatelembur');
   Route::get('lembur-history', 'App\Http\Controllers\Admin\LemburController@historylembur');

   Route::get('admin-export', 'App\Http\Controllers\Admin\LemburController@export')->name('admin.excel');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

