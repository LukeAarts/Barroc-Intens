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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('customers/invoices', [CustomerController::class, 'invoices'])->name('customers.invoices');
    Route::get('customers/invoices/{id}', [CustomerController::class, 'show_invoice'])->name('customers.show_invoice');
    Route::get('customers/lease_contracts', [CustomerController::class, 'lease_contracts'])->name('customers.lease_contracts');
    Route::get('customers/lease_contracts/{id}', [CustomerController::class, 'show_lease_contract'])->name('customers.show_lease_contract');
    Route::post('customers/account-delete-request', [CustomerController::class, 'accountDeleteRequest'])->name('customers.account-delete-request');
    Route::get('customers/account-delete-confirm', [CustomerController::class, 'accountDelete'])->name('customers.account-delete-confirm');


    Route::resource('notes', NoteController::class);
    Route::get('/user/{user}/notes', [NoteController::class, 'userNotes'])->name('user.notes');
    Route::get('/companies/{company}/edit', [NoteController::class, 'editCompany'])->name('notes.editCompany');
    Route::put('/companies/{company}', [NoteController::class, 'updateCompany'])->name('notes.updateCompany');
    Route::put('/notes/{company}/updateBkr', [NoteController::class, 'updateBkr'])->name('notes.user_notes');    



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

    Route::get('/register_two', [CustomerController::class, 'register']);

 
});

require __DIR__ . '/auth.php';
