<?php

namespace App\Http\Controllers;

use App\Models\ObatMasuk;
use Illuminate\Http\Request;

class ObatMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obatmasuk = ObatMasuk::latest()->paginate(5);
    
        return view('obat_masuk/index',compact('obatmasuk'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Models\ObatMasuk  $obatMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(ObatMasuk $obatMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ObatMasuk  $obatMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(ObatMasuk $obatMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ObatMasuk  $obatMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ObatMasuk $obatMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ObatMasuk  $obatMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObatMasuk $obatMasuk)
    {
        //
    }
}
