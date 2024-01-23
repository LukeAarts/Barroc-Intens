<?php

namespace App\Http\Controllers;

use App\Mail\AccountDeleteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerRegistration;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\LeaseContract;
use App\Models\Product;
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
        $customer = auth()->user(); // Haal de ingelogde gebruiker op
        $invoices = Invoice::all();
        $productInvoices = ProductInvoice::all();
        
        return view('customers.invoices')->with(['invoices' => $invoices, 'productInvoices' => $productInvoices, 'customer' => $customer]);
    }

    public function lease_contracts()
    {
        // Haal de ingelogde klant op
        $customer = auth()->user(); // Dit veronderstelt dat de klant is ingelogd
    
        // Haal de leasecontracten op die behoren tot de ingelogde klant
        $leaseContracts = LeaseContract::where('customer_id', $customer->id)->get();

    
        // Geef de gegevens door aan de view
        return view('customers.lease_contracts', ['leaseContracts' => $leaseContracts]);
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
        $product = Product::findOrFail($id);
        $customer = auth()->user(); // Haal de ingelogde gebruiker op
        $productInvoice = ProductInvoice::where('id', $id)->first();
                
        return view('customers.show_invoice')->with(['invoice' => $invoice, 'productInvoice' => $productInvoice, 'customer' => $customer, 'contracts' => $contracts, 'product' => $product]);
    }
    
    public function show_lease_contract($id)
    {
        $contract = LeaseContract::findOrFail($id);
        $company = Company::findOrFail($id);
        $customer = auth()->user(); // Haal de ingelogde gebruiker op
        $products = $contract->products; // Gebruik de relatie om producten op te halen

        // dd($products);
    
        return view('customers.show_lease_contract')->with([
            'contract' => $contract,
            'customer' => $customer,
            'company' => $company,
            'products' => $products,
        ]);
    }
    
    
    

    
}
