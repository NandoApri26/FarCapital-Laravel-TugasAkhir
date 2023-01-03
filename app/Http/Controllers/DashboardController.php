<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atlet;
use App\Models\Coach;
use App\Models\Containt;
use App\Models\Registration;
use App\Models\User;

class DashboardController extends Controller
{
    public function index ()
    {
        // return view('Admin.Dashboard.index');
        $atlet = Atlet::all()->count();
        $coach  = Coach::all()->count();
        $registration  = Registration::all()->count();
        $containt  = Containt::all()->count();
        return view('Admin.Dashboard.index', compact('atlet', 'coach', 'registration', 'containt'));
    }

}
