<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return $clients;
    }

    public function store(Request $request){
        $clients = Client::create($request->all());
        return response()->json($clients,201);
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return response()->json(['data' => $client]);
    }

    public function update(Request $request, string $id){
        $clients = Client::findOrFail($id);
        $clients->update($request->all());
        return response()->json($clients,200);
    }
}
