<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerRegistration;
use App\Models\Invoice;
use App\Models\ProductInvoice;
use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {        
        return view('customers.index');
    }

    public function invoices()
    {
        $invoices = Invoice::all();
        $productInvoices = ProductInvoice::all();
        
        return view('customers.invoices')->with(['invoices' => $invoices, 'productInvoices' => $productInvoices]);
    }

    public function register()
    {
        // Logica om een klant aan te maken in de database

        // $customer = User::create([
        //     'name' => request('name'),
        //     'email' => request('email'),
        //     'role' => request('role')
        //     // andere velden die je nodig hebt
        // ]);

        // Verstuur registratie-e-mail
        Mail::to($customer->email)->send(new CustomerRegistration($customer));

        return "Klant geregistreerd en e-mail verstuurd.";
    }

    public function show_invoice($id)
    {
        $invoice = Invoice::findOrFail($id);
        $customer = User::findOrFail($id);
        $productInvoice = ProductInvoice::where('id', $id)->first(); // Pas dit aan op basis van je relatie tussen Invoice en ProductInvoice
        
        return view('customers.show_invoice')->with(['invoice' => $invoice, 'productInvoice' => $productInvoice, 'customer' => $customer]);
    }
    
    
}
