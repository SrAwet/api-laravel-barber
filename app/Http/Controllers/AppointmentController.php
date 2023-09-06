<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appointment = Appointment::all();
        return $appointment;
    }

    public function store(Request $request){
        $appointment = Appointment::create($request->all());
        return response()->json($appointment,201);
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json(['data' => $appointment]);
    }

    public function update(Request $request, string $id){
        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());
        return response()->json($appointment,200);
    }
}
