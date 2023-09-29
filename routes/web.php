<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('base.layout');
});

*/
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/packages', [HomeController::class, 'packages']);
Route::get('/people', [HomeController::class, 'people']);
Route::get('/business', [HomeController::class, 'business']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blacklist', [HomeController::class, 'blacklist']);
Route::get('/contact', [HomeController::class, 'contact']);

#AUTHENTICATION ROUTE
Route::get('/login', [Authentication::class, 'login']);
Route::get('/register', [Authentication::class, 'register']);
Route::get('/forgot-password', [Authentication::class, 'forgotPassword']);

# DASHBORAD AND PROFILE ROUTE
Route::get('/profile', [DashboardController::class, 'profile']);


