<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\Auth\LoginController;


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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::post('/login', 'LoginController')->name('login');

//Route::group(['middleware' => ['auth', 'CheckRole::admin']], function ()
//{
    //Route::get('/home', 'HomeController@index');
    //route::get('/admin', 'HomeController@admin')->name('admin'); 
//});
Route::get('admin', function () { return view('admin.admin'); })->middleware('checkRole:admin');
Route::get('user', function () { return view('user.user'); })->middleware(['checkRole:user,admin']);
