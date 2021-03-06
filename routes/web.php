<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemakanController;
use App\Http\Controllers\BayaranController;
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

Route::get('dashboard', function () {
    return view('pages.index');
});

Route::resource('/applications/permit', SemakanController::class);

Route::resource('/applications/payment', BayaranController::class);

// Route::get('/applications/payment', function () {
//     return view('pages.payment');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
