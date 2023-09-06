<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $service = Service::all();
        return $service;
    }

    public function store(Request $request){
        $service = Service::create($request->all());
        return response()->json($service,201);
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return response()->json(['data' => $service]);
    }

    public function update(Request $request, string $id){
        $service = Service::findOrFail($id);
        $service->update($request->all());
        return response()->json($service,200);
    }
}
