<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.Login');
    }
    public function register()
    {
        return view('Auth.register');
    }
    public function register_store(Request $request)
    {
        // dd( $request);
        // die;
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'admin'
        ]);
        // Alert::success('Berhasil', 'Pendaftaran Berhasil');
        return redirect('/login');
    }
    public function login_store(Request $request)
    {
        // dd ($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect('/login')->with('status', 'Email atau Password salah');
        } else {
            return redirect('/Admin/Dashboard');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
