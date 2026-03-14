<?php

namespace App\Http\Controllers;

use App\Models\JamPelayanan;
use Illuminate\Http\Request;

class JamPelayananController extends Controller
{
    public function index()
    {
        $jam = JamPelayanan::all();
        return view('jam.index', compact('jam'));
    }

    public function create()
    {
        return view('jam.create');
    }

    public function store(Request $request)
    {
        JamPelayanan::create($request->all());

        return redirect('/jam')->with('success','Jam pelayanan berhasil ditambah');
    }

    public function edit($id)
    {
        $jam = JamPelayanan::findOrFail($id);
        return view('jam.edit', compact('jam'));
    }

    public function update(Request $request, $id)
    {
        $jam = JamPelayanan::findOrFail($id);
        $jam->update($request->all());

        return redirect('/jam')->with('success','Jam pelayanan berhasil diupdate');
    }

    public function destroy($id)
    {
        $jam = JamPelayanan::findOrFail($id);
        $jam->delete();

        return redirect('/jam')->with('success','Jam pelayanan berhasil dihapus');
    }
}
