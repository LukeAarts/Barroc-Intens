<?php

use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PurchaseController;
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

Route::get('/', function () {
    return view('homepage');
});




Route::get('/products', [ProductController::class, 'index'])->name('products.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    Route::resource('notes', NoteController::class);
    Route::get('/user/{user}/notes', [NoteController::class, 'userNotes'])->name('user.notes');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('purchases_products', PurchaseController::class);
    Route::resource('products', ProductController::class);

    Route::resource('finances', FinanceController::class);
});

require __DIR__ . '/auth.php';
