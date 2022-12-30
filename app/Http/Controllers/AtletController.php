<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Level;
use Illuminate\Http\Request;

class AtletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atlet = Atlet::all();
        return view('Admin.Atlet.index', compact('atlet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $level = Level::all();
        return view('Admin.Atlet.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('foto');//Menggambil file dari form
        $file_atlet = time(). "-". $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('foto_atlet/', $file_atlet); //proses memasukkan file kedalam direktori laravel
        Atlet::create(
            [
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jk' => $request->jk,
                'alamat' => $request->alamat,
                'prestasi' => $request->prestasi,
                'foto' => $file_atlet,
                'level_id' => $request->level_id
            ]
        );
        return redirect('/Admin/Atlet')->with('success', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function show(Atlet $atlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Atlet $atlet)
    {
        $atlet = Atlet::all();
        return view('Admin.Atlet.update', compact('atlet', 'level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atlet $atlet)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atlet  $atlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atlet $atlet)
    {
        $atlet->delete();
        return redirect('/Admin/Atlet');
    }
}
