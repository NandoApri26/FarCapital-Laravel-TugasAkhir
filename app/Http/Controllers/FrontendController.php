<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Containt;
use App\Models\Atlet;
use App\Models\Coach;
use App\Models\Level;
use App\Models\Registration;

class FrontendController extends Controller
{
    public function index()
    {
        $containt = Containt::limit(3)->get();
        $atlet = Atlet::limit(3)->get();
        return view('User.Home.index', compact('containt', 'atlet'));
    }

    public function TentangKami()
    {
        return view('User.Tentang-Kami.index');
    }

    public function atlet()
    {
        $atlet = Atlet::all();
        return view('User.Atlet.index', compact('atlet'));
    }

    public function showatlet(Atlet $atlet)
    {
        return view('User.Atlet.detail', compact('atlet'));
    }

    public function create()
    {
        return view('User.Pendaftaran.index');
    }

    public function pendaftaran(Request $request)
    {
        // dd($request->all());
        $img_pendaftaran = $request->file('foto');//Menggambil file dari form
        $filename_pendaftaran = time(). "-". $img_pendaftaran->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img_pendaftaran->move('foto_pendaftaran/', $filename_pendaftaran); //proses memasukkan file kedalam direktori laravel
        Registration::create(
            [
                'nama_depan' => $request->nama_depan,
                'nama_belakang' => $request->nama_belakang,
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'alamat' => $request->alamat,
                'status' => 'Cek',
                'foto' => $filename_pendaftaran
            ]
        );
        return redirect('/User/Home')->with('success', 'Berhasil ditambah');
    }
}
