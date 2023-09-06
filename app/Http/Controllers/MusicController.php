<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(){
        $music = Music::all();
        return $music;
    }

    public function store(Request $request){
        $music = Music::create($request->all());
        return response()->json($music,201);
    }

    public function show($id)
    {
        $music = Music::findOrFail($id);
        return response()->json(['data' => $music]);
    }

    public function update(Request $request, string $id){
        $music = Music::findOrFail($id);
        $music->update($request->all());
        return response()->json($music,200);
    }
}
