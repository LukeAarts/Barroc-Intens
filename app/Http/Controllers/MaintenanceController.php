<?php
namespace App\Http\Controllers;
use App\Models\Maintenance;
use Illuminate\Http\Request;
class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenanceAppointments = Maintenance::with(['company', 'product_category', 'ticket'])->get();
        return view('maintenance.index', compact('maintenanceAppointments'));
    }
}