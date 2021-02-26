<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Level;

class LevelController extends Controller
{
    public function index()
    {
        return Level::all();
    }


    public function store(Request $request)
    {
        $level = Level::create($request->all());

        return response()->json($level, 201);
    }
}
