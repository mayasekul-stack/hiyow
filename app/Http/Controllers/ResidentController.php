<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResidentController extends Controller
{
    public function index()
    {
        $residents = Resident::all();

        return view('pages.resident.index', [
            'residents' => $residents,
        ]);
    }

    public function create()
    {
        return view('pages.resident.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:100'],
            'jenis_tamu' => ['required', Rule::in(['warga', 'instansi', 'lainnya'])],
            'asal_desa' => ['required:jenis_tamu,warga', 'nullable', 'string'],
            'asal_instansi' => ['required:jenis_tamu,instansi', 'nullable', 'string'],
            'address' => ['required', 'max:700'],
            'keperluan' => ['required', 'string', 'max:150'],
            'no_hp' => ['required', 'max:15'],
            'tgl_kjgn' => ['required', 'date'],
            'jam_kjgn' => ['required', 'date_format:H:i'],
            'status' => ['required', Rule::in(['belum_diproses', 'diproses', 'selesai'])],
            'petugas' => ['required', 'max:100'],
            'catatan' => ['required', 'string'],
        ]);

        


        // dd($validatedData);
        Resident::create($validatedData);

        return redirect('/resident')->with('success', 'Berhasil Menambahkan data');
    }

    

    public function edit($id)
    {
        $resident = Resident::findOrFail($id);

        return view('pages.resident.edit', [
            'resident' => $resident,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => ['required', 'max:100'],
            'asal_desa' => ['required'],
            'asal_instansi' => ['required'],
            'jenis_tamu' => ['required'],
            'address' => ['required'],
            'keperluan' => ['nullable'],
            'no_hp' => ['nullable'],
            'tgl_kjgn' => ['required'],
            'jam_kjgn' => ['required'],
            'status' => ['required'],
            'petugas' => ['nullable'],
            'catatan' => ['nullable'],
]);


// dd($validatedData);

        Resident::findOrFail($id)->update($validatedData);

        return redirect('/resident')->with('success', 'Berhasil Mengubah data');
    }

    public function destroy($id)
{
    $resident = Resident::findOrFail($id);
    $resident->delete();
    return redirect('/resident')->with('success', 'Data dihapus');
}

}