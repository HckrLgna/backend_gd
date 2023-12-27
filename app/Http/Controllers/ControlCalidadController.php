<?php

namespace App\Http\Controllers;

use App\Models\ControlCalidad;
use Illuminate\Http\Request;

class ControlCalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = ControlCalidad::all();
        return response()->json(['data' => $response]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlCalidad  $controlCalidad
     * @return \Illuminate\Http\Response
     */
    public function show(ControlCalidad $controlCalidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlCalidad  $controlCalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlCalidad $controlCalidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ControlCalidad  $controlCalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlCalidad $controlCalidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlCalidad  $controlCalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlCalidad $controlCalidad)
    {
        //
    }
}
