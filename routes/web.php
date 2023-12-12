<?php

use App\Http\Controllers\FinanceController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

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
})->name("home");

Route::resource('products', ProductController::class);

Route::get('/maintenance', [MaintenanceController::class, 'index']);
Route::resource('notes', NoteController::class);
Route::get('/user/{user}/notes', [NoteController::class, 'userNotes'])->name('user.notes');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('notes', NoteController::class);
    Route::get('/user/{user}/notes', [NoteController::class, 'userNotes'])->name('user.notes');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('purchases_products', PurchaseController::class);
    Route::get('quote/success', [QuoteController::class, 'success'])->name("quote.success");
    Route::resource('quote', QuoteController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('finances', FinanceController::class);
});

require __DIR__ . '/auth.php';
