<?php

namespace App\Http\Controllers;

use App\Models\InstallInvoice;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('invoice.list', ["invoices" => InstallInvoice::with('customer')->with('quotation')->with('finance')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'quoteid' => 'required',
            'bedrijfsnaam' => 'required',
            'straat' => 'required',
            'huisnummer' => 'required',
            'postcode' => 'required',
            'stad' => 'required',
            'telefoonnummer' => 'required',
            'email' => 'required',
            'prodname' => 'required',
            'prodinstallcost' => 'required',
            'note' => 'nullable'
        ]);
        $quote = Quotation::where('id', $validatedData['quoteid'])->firstOrFail();
        $quote->companyname = $validatedData['bedrijfsnaam'];
        $quote->street = $validatedData['straat'];
        $quote->number = $validatedData['huisnummer'];
        $quote->postalcode = $validatedData['postcode'];
        $quote->city = $validatedData['stad'];
        $quote->phonenumber = $validatedData['telefoonnummer'];
        $quote->email = $validatedData['email'];

        $invoice = new InstallInvoice();
        $invoice->product_id = $quote->products_id;
        $invoice->quotation_id = $quote->id;
        $invoice->customer_id = $quote->customer_id;
        $invoice->finance_id = Auth::user()->id;
        $invoice->install_cost = $validatedData['prodinstallcost'];
        $invoice->info = $validatedData['note'];
        $invoice->save();

        return redirect(route('invoice.edit', $invoice->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('invoice.create', ['quote' => Quotation::where('id', $id)->firstOrFail()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('invoice.show', ["invoice" => InstallInvoice::with('customer')->with('quotation')->with('finance')->where('id', $id)->firstOrFail()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
