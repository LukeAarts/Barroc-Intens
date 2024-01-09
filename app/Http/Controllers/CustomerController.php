<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerRegistration;
use App\Models\User;

class CustomerController extends Controller
{
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
}
