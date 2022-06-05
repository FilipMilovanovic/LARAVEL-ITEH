<?php

namespace App\Http\Controllers;

use App\Http\Resources\PrvResurs;
use App\Models\Prevoznik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prevoznici = Prevoznik::all();
        return PrvResurs::collection($prevoznici);
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
        $validator = Validator::make($request->all(), [
            'firma' => 'required',
            'adresa' => 'required',
            'direktor' => 'required',
            'sajt' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $prevoznik = Prevoznik::create([
            'firma' => $request->firma,
            'adresa' => $request->adresa,
            'direktor' => $request->direktor,
            'sajt' => $request->sajt,
        ]);

        return response()->json(new PrvResurs($prevoznik));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prevoznik  $prevoznik
     * @return \Illuminate\Http\Response
     */
    public function show(Prevoznik $prevoznik)
    {
        return new PrvResurs($prevoznik);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prevoznik  $prevoznik
     * @return \Illuminate\Http\Response
     */
    public function edit(Prevoznik $prevoznik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prevoznik  $prevoznik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prevoznik $prevoznik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prevoznik  $prevoznik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prevoznik $prevoznik)
    {
        $prevoznik->delete();
        return response()->json('Prevoznik je obrisan');
    }
}
