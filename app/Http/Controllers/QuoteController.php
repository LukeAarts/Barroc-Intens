<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Runner\validate;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function success()
    {
        return view('quote.success');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'productid' => 'required',
            'bedrijfsnaam' => 'required',
            'straat' => 'required',
            'huisnummer' => 'required',
            'postcode' => 'required',
            'stad' => 'required',
            'telefoonnummer' => 'required',
            'email' => 'required'
        ]);
        $quote = new Quotation();
        $quote->customer_id = Auth::id();
        $quote->products_id = $validatedData['productid'];
        $quote->companyname = $validatedData['bedrijfsnaam'];
        $quote->street = $validatedData['straat'];
        $quote->number = $validatedData['huisnummer'];
        $quote->postalcode = $validatedData['postcode'];
        $quote->city = $validatedData['stad'];
        $quote->phonenumber = $validatedData['telefoonnummer'];
        $quote->email = $validatedData['email'];
        $quote->save();
        return redirect(route('quote.success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //TODO: Fetch products from database
        $title = "";
        if ($id == 1) {
            $title = "Machine Bit Deluxe";
        } else if ($id == 2) {
            $title = "Machine Bit Light";
        } else if ($id == 3) {
            $title = "Machine Groot";
        }
        $fields = array();
        array_push($fields, ["lower" => "bedrijfsnaam", "upper" => "Bedrijfsnaam", "type" => "text"]);
        array_push($fields, ["lower" => "straat", "upper" => "Straat", "type" => "text"]);
        array_push($fields, ["lower" => "huisnummer", "upper" => "Huisnummer", "type" => "number"]);
        array_push($fields, ["lower" => "postcode", "upper" => "Postcode", "type" => "text"]);
        array_push($fields, ["lower" => "stad", "upper" => "Stad", "type" => "text"]);
        array_push($fields, ["lower" => "telefoonnummer", "upper" => "Telefoonnummer", "type" => "text"]);
        array_push($fields, ["lower" => "email", "upper" => "Email", "type" => "email"]);
        return view("quote.index", ["title" => $title, "inputfields" => $fields, "id" => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
