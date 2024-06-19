<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomRegisterController; 

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/custom/register', [CustomRegisterController::class, 'showRegistrationForm'])->name('custom.register');
Route::post('/custom/register', [CustomRegisterController::class, 'register']);


require __DIR__.'/auth.php';



Route::get('/about', [HomeController::class, 'about']);
Route::get('/packages', [HomeController::class, 'packages']);
Route::get('/people', [HomeController::class, 'people']);
Route::get('/business', [HomeController::class, 'business']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blacklist', [HomeController::class, 'blacklist']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/test', function(){
    return view('dashboard.create-a-new-portfolio');
});

Route::get('/test2', function(){
    return view('dashboard.dashboard-business');
});


Route::get('/test3', function(){
    return view('dashboard.dashboard-user');
});

Route::get('/test4', function(){
    return view('dashboard.friends');
});

Route::get('/test5', function(){
    return view('dashboard.profile');
});


// handling the error page
Route::fallback([FallbackController::class, '__invoke']);