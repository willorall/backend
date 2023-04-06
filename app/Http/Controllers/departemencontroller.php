<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kendaraan;
use App\Models\departemen;
use App\Models\pemesanan;
use App\Models\User;

class departemencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemen=departemen::get();
        return view('departemen.index', [
            'departemen'=>$departemen
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departemen.create', [
        ]);
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
        departemen::create([
            'tipe' => $request -> tipe,
            'keterangan' => $request -> keterangan,
            'lokasi' => $request -> lokasi,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
            $departemen=departemen::get();
            return redirect('/departemen');
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
        $departemen=departemen::find($id);
        return view('departemen.edit', [
            'departemen'=>$departemen
        ]);
        //
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
        departemen::where('id', $id)->update([
            'tipe' => $request -> tipe,
            'keterangan' => $request -> keterangan,
            'lokasi' => $request -> lokasi,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
            $departemen=departemen::get();
            return redirect('/departemen');
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
