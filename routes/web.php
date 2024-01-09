<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\WishController;




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

Route::get('/', [HomeController::class, 'index']);


Route::get('/content', function () {
    return view('content');
});

Route::resource('tamus', TamuController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php

Route::post('/wishes', [App\Http\Controllers\WishController::class, 'store']);

Route::get('/load-data', [App\Http\Controllers\HomeController::class, 'loadData']);
