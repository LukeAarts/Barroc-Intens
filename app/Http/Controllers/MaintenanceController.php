<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Company;
use App\Models\Maintenance;
use App\Models\MaintenanceErrorPlanned;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenanceAppointments = Maintenance::with(['company', 'product_category', 'ticket'])->get();
        return view('maintenance.index', compact('maintenanceAppointments'));
    }


    public function fullcalander()
    {
        $maintenanceAppointments = Maintenance::all();

        return view('maintenance.fullcalendar', compact('maintenanceAppointments'));
    }

    public function create()
    {
        $companies = Company::all();
        $categories = Category::all();
        $users = User::all();
        $maintenanceTypes = ['storingsaanvragen', 'routinematige_bezoeken']; // Aan te vullen met de daadwerkelijke onderhoudstypen
    
        return view('maintenance.create', compact('companies', 'categories', 'maintenanceTypes', 'users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'remark' => 'required',
            'company_id' => 'required|exists:companies,id',
            'product_category_id' => 'required|exists:product_categories,id',
            'maintenance_type' => 'required|in:storingsaanvragen,routinematige_bezoeken',
            'assigned' => 'required',
        ]);

        $validatedData['date_added'] = now();

        
        // dd($validatedData);

        Maintenance::create($validatedData);

        return redirect()->route('maintenance.fullcalendar')->with('success', 'Onderhoudsafspraak succesvol toegevoegd.');
    }
}
