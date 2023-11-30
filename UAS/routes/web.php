<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FOController;


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

Route::get('/', [FOController::class, 'show'])->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});
// Route::get('/ravin', function () {
//     return view('ravin');
// });

Route::get('/show-data', [FOController::class, 'show'])->name('show.data');
Route::get('/warta-paroki/{id}', [FOController::class,'showdetails'])->name('warta-paroki.show');
Route::get('/informasi-penting/{id}', [FOController::class,'showinfo'])->name('informasi-penting.show');

Auth::routes();