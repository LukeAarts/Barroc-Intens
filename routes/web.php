<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\WorkOrderController;
use Illuminate\Support\Facades\Password;

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
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('notes', NoteController::class);
    Route::get('/user/{user}/notes', [NoteController::class, 'userNotes'])->name('user.notes');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('maintenance/work_orders', WorkOrderController::class)->except(['index']);
    Route::get('maintenance/work_orders', [WorkOrderController::class, 'index'])->name('maintenance.work_orders.index');      

    Route::resource('purchases_products', PurchaseController::class);
    Route::get('quote/success', [QuoteController::class, 'success'])->name("quote.success");
    Route::resource('quote', QuoteController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('finances', FinanceController::class);
    Route::get('maintenance/fullcalendar', [MaintenanceController::class, 'fullcalander'])->name("maintenance.fullcalendar");
    Route::resource('maintenance', MaintenanceController::class)->except(['show']);
    Route::get('/maintenance/{id}', [MaintenanceController::class, 'show'])->name('maintenance.show');



});

Route::resource('customers', CustomerController::class)->only(['create', 'store']);

// Voor het weergeven van het resetformulier
Route::get('reset-password/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');


// Voor het verwerken van het POST-verzoek
Route::post('reset-password', 'Auth\ResetPasswordController@reset')->name('password.reset.process');




require __DIR__ . '/auth.php';
