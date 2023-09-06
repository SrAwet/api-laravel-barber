<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index(){
        $drink = Drink::all();
        return $drink;
    }

    public function store(Request $request){
        $drink = Drink::create($request->all());
        return response()->json($drink,201);
    }

    public function show($id)
    {
        $drink = Drink::findOrFail($id);
        return response()->json(['data' => $drink]);
    }

    public function update(Request $request, string $id){
        $drink = Drink::findOrFail($id);
        $drink->update($request->all());
        return response()->json($drink,200);
    }
}
