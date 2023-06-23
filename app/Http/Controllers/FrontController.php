<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Beranda;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function home() {
        $np = Beranda::first();
        $about = About::first();
        return view('front-end.home', ['np'=>$np, 'about'=>$about]);
    }
}
