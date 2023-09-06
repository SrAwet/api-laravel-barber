<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $schedule = Schedule::all();
        return $schedule;
    }

    public function store(Request $request){
        $schedule = Schedule::create($request->all());
        return response()->json($schedule,201);
    }

    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);
        return response()->json(['data' => $schedule]);
    }

    public function update(Request $request, string $id){
        $schedule = Schedule::findOrFail($id);
        $schedule->update($request->all());
        return response()->json($schedule,200);
    }
}
