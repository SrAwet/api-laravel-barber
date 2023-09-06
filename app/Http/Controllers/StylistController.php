<?php

namespace App\Http\Controllers;

use App\Models\Stylist;
use Illuminate\Http\Request;

class StylistController extends Controller
{
    public function index(){
        $stylist = Stylist::all();
        return $stylist;
    }

    public function store(Request $request){
        $stylist = Stylist::create($request->all());
        return response()->json($stylist,201);
    }

    public function show($id)
    {
        $stylist = Stylist::findOrFail($id);
        return response()->json(['data' => $stylist]);
    }

    public function update(Request $request, string $id){
        $stylist = Stylist::findOrFail($id);
        $stylist->update($request->all());
        return response()->json($stylist,200);
    }
}
