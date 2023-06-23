<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $about = About::get();
        $qty_about = count($about);
        return view('back-end.about.index', ['about'=>$about, 'qty_about'=>$qty_about]);
    }

    function create() {
        return view('back-end.about.add');
    }

    function store(Request $request)
    {
        About::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        return redirect()->route('about');
    }

    function edit($id) {
        $about = About::findorfail($id);
        return view('back-end.about.edit', compact('about'));
    }

    function update(Request $request, string $id) {
        $about = About::findorfail($id);
        $about->update($request->all());
        return redirect()->route('about')->with('toast_success', 'Data Berhasil di Update');
    }
}
