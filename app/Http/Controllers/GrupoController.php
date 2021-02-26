<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Grupo;

class GrupoController extends Controller
{
    public function index()
    {
        return Grupo::all();
    }

    public function show(Grupo $grupo)
    {
        return $grupo;
    }

    public function store(Request $request)
    {
        $grupo = Grupo::create($request->all());

        return $grupo;
    }

    public function update(Request $request, Grupo $grupo)
    {
        $grupo->update($request->all());

        return response()->json($grupo, 200);
    }

    public function delete(Grupo $grupo)
    {
        $grupo->delete();

        return response()->json(null, 204);
    }
}
