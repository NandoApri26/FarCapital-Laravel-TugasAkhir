<?php

namespace App\Http\Controllers;

use App\Models\Containt;
use Illuminate\Http\Request;

class ContaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $containt = Containt::all();
        return view('Admin.Containt.index', compact('containt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $containt = Containt::all();
        return view('Admin.Containt.create', compact('containt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = $request->file('file');
        $filename_konten = time(). "_". $video->getClientOriginalName();
        $video->move('file_konten/', $filename_konten);
        Containt::create(
            [
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'deskripsi' => $request->deskripsi,
                'file' => $filename_konten
            ]
        );
        return redirect('/Admin/Containt')->with('success', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Containt  $containt
     * @return \Illuminate\Http\Response
     */
    public function show(Containt $containt)
    {
        return view('Admin.Containt.detail', compact('containt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Containt  $containt
     * @return \Illuminate\Http\Response
     */
    public function edit(Containt $containt)
    {
        return view('Admin.Containt.update', compact('containt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Containt  $containt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Containt $containt)
    {
        if($request ->file !=null){
            $video = $request->file('file');
            $filename_konten = time(). "_". $video->getClientOriginalName();
            $video->move('file_konten', $filename_konten);
            Containt::where('id', $containt->id)->update(
                [
                    "judul" => $request->judul,
                    "tanggal" => $request->tanggal,
                    "deskripsi" => $request->deskripsi,
                    "file" => $filename_konten
                ]
            );

        }else{
            Containt::where('id', $containt->id)->update(
            [
                "judul" => $request->judul,
                "tanggal" => $request->tanggal,
                "deskripsi" => $request->deskripsi,
            ]
            );

        }
        return redirect('/Admin/Containt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Containt  $containt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Containt $containt)
    {
        $containt->delete();
        return redirect('/Admin/Containt');
    }
}
