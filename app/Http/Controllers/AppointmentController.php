<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\AppointmentController; // Import the base Controller class

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
         
            'appointment_date' => 'required|date|after_or_equal:today',
            'schedule_time' => 'required|date_format:H:i', // Validate time in HH:MM format
            'message' => 'nullable|string',
        ]);

        // Create the appointment using the validated data
        Appointment::create($validatedData);

        // Redirect back with success message
        return redirect()->route('appointments.create')->with('success', 'Your appointment has been booked.');
    }
}
