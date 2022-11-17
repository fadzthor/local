<?php

namespace App\Http\Controllers;

use App\Models\ObatKeluar;
use Illuminate\Http\Request;

class ObatKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obatkeluar = ObatKeluar::latest()->paginate(5);
    
        return view('obat_keluar/index',compact('obatkeluar'))
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
     * @param  \App\Models\ObatKeluar  $obatKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(ObatKeluar $obatKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ObatKeluar  $obatKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(ObatKeluar $obatKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ObatKeluar  $obatKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ObatKeluar $obatKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ObatKeluar  $obatKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObatKeluar $obatKeluar)
    {
        //
    }
}
