<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coach = Coach::all();
        return view('Admin.Coach.index', compact('coach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coach = Coach::all();
        return view('Admin.Coach.create', compact('coach'));
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
        $filename = time(). "-". $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('foto_coach/', $filename); //proses memasukkan file kedalam direktori laravel
        Coach::create(
            [
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jk' => $request->jk,
                'alamat' => $request->alamat,
                'status' => $request->status,
                'foto' => $filename
            ]
        );
        return redirect('/Admin/Coach')->with('success', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        return view('Admin.Coach.detail', compact('coach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit(Coach $coach)
    {
        return view('Admin.Coach.update', compact('coach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coach $coach)
    {
        
        if($request ->foto !=null){
            $img = $request->file('foto'); //mengambil dari form
            $filename = time() . "_" . $img->getClientOriginalName();
            $img->move('foto_coach', $filename);
        Coach::where('id', $coach->id)->update(
                [
                    "nama" => $request->nama,
                    "tanggal_lahir" => $request->tanggal_lahir,
                    "jk" => $request->jk,
                    "foto" => $filename,
                    "status" => $request->status
                ]
            );

        }else{
            Coach::where('id', $coach->id)->update(
            [
                "nama" => $request->nama,
                "tanggal_lahir" => $request->tanggal_lahir,
                "jk" => $request->jk,
                "status" => $request->status
            ]
            );

        }
        return redirect('/Admin/Coach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        $coach->delete();
        return redirect('/Admin/Coach');
    }
}
