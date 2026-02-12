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
            'resident' => $residents,
        ]);
    }

    public function create()
    {
        return view('pages.resident.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:100'],
            'jenis_tamu' => ['required', Rule::in(['warga', 'instansi', 'lainnya'])],
            'asal_desa' => [ Rule::requiredIf($request->jenis_tamu === 'warga'),
            'nullable',
            'max:100'],
            'asal_instansi' => [Rule::requiredIf($request->jenis_tamu === 'instansi'),
            'nullable',
            'max:150'],
            'address' => ['required', 'max:700'],
            'keperluan' => ['nullable', 'string', 'max:150'],
            'no_hp' => ['nullable', 'max:15'],
            'tgl_kjgn' => ['required', 'date'],
            'jam_kjgn' => ['required', 'date_format:H:i'],
            'status' => ['nullable', Rule::in(['menunggu', 'diproses', 'selesai'])],
            'petugas' => ['nullable', 'max:100'],
            'catatan' => ['nullable', 'string'],
        ]);

        $validated['status'] = 'menunggu';


        Resident::create($validated);

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
        $validated = $request->validate([
            'name' => ['required', 'max:100'],
            'jenis_tamu' => ['required', Rule::in(['warga', 'instansi', 'lainnya'])],
        ]);

        Resident::findOrFail($id)->update($validated);

        return redirect('/resident')->with('success', 'Berhasil Mengubah data');
    }

    public function destroy($id)
{
    Resident::findOrFail($id)->delete();
    return redirect('/resident')->with('success', 'Data dihapus');
}

}