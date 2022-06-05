<?php

namespace App\Http\Controllers;

use App\Http\Resources\KamResurs;
use App\Models\Kamion;
use Illuminate\Http\Request;

class KamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamioni = Kamion::all();
        return KamResurs::collection($kamioni);
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
     * @param  \App\Models\Kamion  $kamion
     * @return \Illuminate\Http\Response
     */
    public function show(Kamion $kamion)
    {
        return new KamResurs($kamion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamion  $kamion
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamion $kamion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamion  $kamion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamion $kamion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamion  $kamion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamion $kamion)
    {
        //
    }
}
