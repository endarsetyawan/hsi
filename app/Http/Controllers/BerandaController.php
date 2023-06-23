<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function index() {
        $np = Beranda::get();
        return view('back-end.beranda.index', ['np'=>$np]);
    }

    function edit($id) {
        $np = Beranda::get()
            ->where('id', $id);
        return view('back-end.beranda.edit', ['np'=>$np]);
    }

    function update(Request $request, string $id) {
        $np = Beranda::first()
            ->where('id', $id);
        $np->update($request->except(['_method', '_token']));
        return redirect()->route('beranda.index');
    }
}
