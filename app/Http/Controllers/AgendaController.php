<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::orderBy('tanggal', 'asc')->get();
        return view('agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'keterangan' => 'required',
            'waktu' => 'required',
            'penanggung_jawab' => 'required',
            'status' => 'required|in:akan_berlangsung,selesai'
            
        ]);
        Agenda::create([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'keterangan' => $request->keterangan,
            'waktu' => $request->waktu,
            'penanggung_jawab' => $request->penanggung_jawab,
            'status' => $request->status
    ]);
            return redirect('/agenda')->with('success', 'Agenda berhasil ditambahkan!');
    }

    public function edit($id) 
    { 
        $agenda = Agenda::findOrFail($id); return view('agenda.edit', [ 'agenda' => $agenda, ]);
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'judul' => 'required',
        'tanggal' => 'required|date',
        'lokasi' => 'required',
        'keterangan' => 'required',
        'waktu' => 'required',
        'penanggung_jawab' => 'required',
        'status' => 'required|in:akan_berlangsung,selesai'
    ]);

    $agenda = Agenda::findOrFail($id);

    $agenda->update([
        'judul' => $request->judul,
        'tanggal' => $request->tanggal,
        'lokasi' => $request->lokasi,
        'keterangan' => $request->keterangan,
        'waktu' => $request->waktu,
        'penanggung_jawab' => $request->penanggung_jawab,
        'status' => $request->status
    ]);

    return redirect('/agenda')->with('success', 'Agenda berhasil diupdate!');
}
    
    public function destroy($id)
    {  
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return redirect('/agenda')->with('success', 'Agenda berhasil dihapus!');
    }
    


        
}
