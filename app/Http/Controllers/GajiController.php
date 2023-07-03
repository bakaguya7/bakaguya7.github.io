<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Http\Requests\StoreGajiRequest;
use App\Http\Requests\UpdateGajiRequest;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guru.gaji.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGajiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gaji $gaji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGajiRequest $request, Gaji $gaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gaji $gaji)
    {
        //
    }
}
