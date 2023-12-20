<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Maintenance;
use App\Models\MaintenanceErrorPlanned;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenanceAppointments = Maintenance::with(['company', 'product_category', 'ticket'])->get();
        return view('maintenance.index', compact('maintenanceAppointments'));
    }


    public function fullcalander()
    {
        $maintenance_errors_planned = MaintenanceErrorPlanned::all();

        return view('maintenance.fullcalendar', compact('maintenance_errors_planned'));
    }
}
