<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obats = Obat::latest()->paginate(5);    
        return view('obat.index',compact('obats'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create menu
        $obats = Obat::all(); 
        // dd($obats);
        return view('obat.create',['obats'=>$obats]);
        

        // $obats = Obat::find($id);
        // return view('obat.create')->with('obats',$obats); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // kalo validasi gagal bakal dibalkin ke halaman create jenis obat 
            $request->validate([
                'nama-obat' => 'required'            
    
                // ,'email' => 'required|email'            
            ]);
        
            // 2 store data atau menyimpan data ke dalam database
            // eloquent bisa
            Obat::create($request->all());
    
            // query builder juga bisa
            // DB::table('jenis_obats')->insert([
            //     'nama' => $request->nama
            // ]);
         
            // 3 menampilkan pesan sukses sewaktu berhasil input data
            return redirect()->route('obat.index')
                            ->with('success','Input data berhasil!');
    
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                // tampil data
                $Obat = Obat::find($id);
                // dd($jenisObat);
                return view('obat.show',compact('Obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Obat = Obat::find($id);
        return view('obat.edit',compact('Obat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama-obat' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'tanggal-kadaluarsa' => 'required',
        //     id',
        // 'nama_obat',
        // 'stok',
        // 'harga',
        // 'gambar',
        // 'tanggal_kadaluarsa',
        // 'created_at',
        // 'updated_at',
        // 'id_jenis_obat'
        ]);
    
        // $jenisObat->update($request->all());
        // update requested id
        // update nama with value dari form input
        Obat::where('id', $id)->update([
            'nama-obat' => $request->nama_obat, // get value form name =  nama
            'stok' => $request->stok,
            'harga' => $request->harga,
            'tanggal-kadaluarsa' => $request->tanggal_kadaluarsa
        ]);
        
        return redirect()->route('obat.index')
                        ->with('success','Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // eloquent
        Obat::find($id)->delete();

        // query builder
        // JenisObat::where('id',$id)->delete();
    
        return redirect()->route('obat.index')
                        ->with('success','Hapus data berhasil!');
    }
}
