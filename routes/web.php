<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/pages/product', function () {
    return view('sublink-pages.product');
})->middleware(['auth'])->name('pages.product');

Route::get('/pages/about', function () {
    return view('sublink-pages.about');
})->middleware(['auth'])->name('pages.about');

Route::get('/pages/text-icon', function () {
    return view('sublink-pages.text-icon');
})->middleware(['auth'])->name('pages.text-icon');

require __DIR__ . '/auth.php';
