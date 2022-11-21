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
        $obat_masuks = ObatMasuk::latest()->paginate(5);
    
        return view('obat_masuk.index',compact('obat_masukss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('obat_masuk.create');
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
        $request->validate([
            'nama' => 'required'            

            // ,'email' => 'required|email'            
        ]);
    
        // 2 store data atau menyimpan data ke dalam database
        // eloquent bisa
        ObatMasuk::create($request->all());

        // query builder juga bisa
        // DB::table('jenis_obats')->insert([
        //     'nama' => $request->nama
        // ]);
     
        // 3 menampilkan pesan sukses sewaktu berhasil input data
        return redirect()->route('obatmasuk.index')
                        ->with('success','Input data berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ObatMasuk  $obatMasuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         // tampil data
         $obatMasuk = ObatMasuk::find($id);
         // dd($jenisObat);
         return view('obat_masuk.show',compact('obatMasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ObatMasuk  $obatMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obatMasuk = ObatMasuk::find($id);
        return view('obat_masuk.edit',compact('obatMasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ObatMasuk  $obatMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama' => 'required'
        ]);
    
        // $jenisObat->update($request->all());
        // update requested id
        // update nama with value dari form input
        ObatMasuk::where('id', $id)->update([
            'nama' => $request->nama // get value form name =  nama
        ]);
        
        return redirect()->route('obatmasuk.index')
                        ->with('success','Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ObatMasuk  $obatMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ObatMasuk::find($id)->delete();

        // query builder
        // JenisObat::where('id',$id)->delete();
    
        return redirect()->route('obatmasuk.index')
                        ->with('success','Hapus data berhasil!');
    }
}
