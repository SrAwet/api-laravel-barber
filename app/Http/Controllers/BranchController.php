<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        $branch = Branch::all();
        return $branch;
    }

    public function store(Request $request){
        $branch = Branch::create($request->all());
        return response()->json($branch,201);
    }

    public function show($id)
    {
        $branch = Branch::findOrFail($id);
        return $branch;
    }

    public function update(Request $request, string $id){
        $branch = Branch::findOrFail($id);
        $branch->update($request->all());
        return response()->json($branch,200);
    }

    public function getStylistsByBranch($id)
    {
        $branch = Branch::findOrFail($id);
        $stylists = $branch->stylists; 
        return $stylists;
    }
}
