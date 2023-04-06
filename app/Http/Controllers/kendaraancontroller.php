<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kendaraan;
use App\Models\departemen;
use App\Models\pemesanan;
use App\Models\User;


class kendaraancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kendaraan=kendaraan::get();
        return view('kendaraan.index', [
            'kendaraan'=>$kendaraan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kendaraan.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'kode_kendaraan' => 'required|unique:kendaraans|max:255',

    ]);

        kendaraan::create([
        'kode_kendaraan' => $request -> kode_kendaraan,
        'jenis' => $request -> jenis,
        'status' => $request -> status,
        'sewa' => $request -> sewa,
        'created_at' => now(),
        'updated_at' => now(),
        ]);
        $kendaraan=kendaraan::get();
        return redirect('/kendaraan');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kendaraan=kendaraan::find($id);
        return view('kendaraan.edit', [
            'kendaraan'=>$kendaraan
        ]);
        // dd($kendaraan);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
          $validated = $request->validate([
            'kode_kendaraan' => 'required|max:255|unique:kendaraans,kode_kendaraan,'.$request->id,
    
        ]);
    
          kendaraan::where('id', $id)->update([
            'kode_kendaraan' => $request -> kode_kendaraan,
            'jenis' => $request -> jenis,
            'status' => $request -> status,
            'sewa' => $request -> sewa,
            'tgl_akhir_service' => $request -> tgl_akhir_service,
            'tgl_service_selanjutnya' => $request -> tgl_service_selanjutnya,
            'jarak_service' => $request -> jarak_service,
            'satuan_jarak' => $request -> satuan_jarak,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
            $kendaraan=kendaraan::get();
            return redirect('/kendaraan');
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
