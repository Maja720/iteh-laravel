<?php

namespace App\Http\Controllers;

use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(President::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $president = President::create($request->all());
        return response()->json($president);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\President  $president
     * @return \Illuminate\Http\Response
     */
    public function show(President $president)
    {
        return response()->json($president);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\President  $president
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, President $president)
    {
        $president->update($request->all());
        return response()->json($president);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\President  $president
     * @return \Illuminate\Http\Response
     */
    public function destroy(President $president)
    {
        $president->delete();
        return response()->noContent();
    }
}
