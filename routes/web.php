<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
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
    return view('homepage');
});

Auth::routes();

/*Frontend Routes*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-details', [HomeController::class, 'blogDetails'])->name('blog-details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


/*Backend Routes*/
Route::get('/home', [DashboardController::class, 'dashboard'])->name('dashboard');
