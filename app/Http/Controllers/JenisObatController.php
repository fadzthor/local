<?php

namespace App\Http\Controllers;

use App\Models\JenisObat;
use Illuminate\Http\Request;

class JenisObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index data
        $jenis_obats = JenisObat::latest()->paginate(6);
    
        return view('jenis_obat.index',compact('jenis_obats'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create menu
        return view('jenis_obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store data
        $request->validate([
            'nama' => 'required'            
        ]);
    
        JenisObat::create($request->all());
     
        return redirect()->route('jenisobat.index')
                        ->with('success','Input data berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisObat  $jenisObat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // tampil data
        $jenisObat = JenisObat::find($id);
        // dd($jenisObat);
        return view('jenis_obat.show',compact('jenisObat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisObat  $jenisObat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jenisObat = JenisObat::find($id);
        return view('jenis_obat.edit',compact('jenisObat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisObat  $jenisObat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama' => 'required'
        ]);
    
        // $jenisObat->update($request->all());
    
        return redirect()->route('jenis_obat.index')
                        ->with('success','Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisObat  $jenisObat
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisObat $jenisObat)
    {
        // destroy data
        $jenisObat->delete();
    
        return redirect()->route('jenisobat.index')
                        ->with('success','Hapus data berhasil!');
    }
}
