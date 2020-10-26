<?php

use App\Http\Controllers\Admin\UsersController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);

});




/*Pages Controller*/
Route::get('/trackyourshipment', 'PagesController@track')->name('trackyourshipment');
Route::get('/faqs', 'PagesController@faqs')->name('faqs');
Route::get('/welcome', 'PagesController@home')->name('welcome');
Route::get('/howitworks', 'PagesController@how')->name('howitworks');
Route::get('/rates', 'PagesController@rate')->name('rates');
Route::get('/services', 'PagesController@service')->name('services');




/*Customer Controrller*/
Route::get('/shipment', 'HomeController@shipment')->name('shipment');
