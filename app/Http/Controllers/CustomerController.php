<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerRegistration;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CustomerController extends Controller
{

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        // Valideer de invoer
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // Voeg andere velden toe die je nodig hebt
        ]);
    
        // Maak een nieuwe klant
        $customer = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => 'Customer',
        ]);

        $token = Str::random(40); 

        DB::table('password_reset_tokens')->insert([
            'email' => $request->input('email'),
            'token' => Hash::make($token),
            'created_at' => now(),
        ]);
    
        // Verstuur registratie-e-mail
        // token opslaan in password_resets table
        $resetUrl = route('password.reset', ['token' => $token]);
        Mail::to($customer->email)->send(new CustomerRegistration($customer, $resetUrl, $token));

    
        return "Klant geregistreerd en e-mail verstuurd.";
    }
}
