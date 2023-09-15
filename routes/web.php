<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

Route::get('/shops',[ShopController::class,'index']);
Route::get('/',[ShopController::class,'index']);
Route::get('/shops/create', [ShopController::class, 'create']);
Route::get('/shops/{shop}',[ShopController::class,'show']);
Route::post('/shops', [ShopController::class, 'store']);
Route::get('/shops/{shop}/edit',[ShopController::class,'edit']);
Route::put('/shops/{shop}',[ShopController::class,'update']);
Route::delete('/shops/{shop}', [ShopController::class,'delete']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

