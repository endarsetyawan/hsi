<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\NamaPerusahaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard() {
        $np = Beranda::get();
        return view('back-end.dashboard', ['np'=>$np]);
    }

}
